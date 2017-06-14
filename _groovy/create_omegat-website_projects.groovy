/* :name=Omegat Website Translation		:description=Manage omegat.org website translations.
 * 
 * Creates all the translation projects for Omegat-website. Copy source files from English content.
 *
 * @author  Briac Pilpré
 * @date    2017-06-12
 * @version 0.1
 */
import org.omegat.core.team2.TeamTool;
import org.omegat.core.data.RealProject;
import org.omegat.core.data.ProjectProperties;
import org.omegat.util.ProjectFileStorage;

import org.eclipse.jgit.api.Git;
import org.eclipse.jgit.api.RemoteAddCommand;
import org.eclipse.jgit.transport.URIish;

import org.apache.commons.io.FileUtils;

jekyllDir = "C:/dev/omegat-jekyll-website/";
githubRepo = "https://github.com/omegat-org";
githubRepo = "https://github.com/briacp";

sourceDirectory      = new  File(jekyllDir, "_i18n/en");
translationDirectory = new  File(jekyllDir, "_translations");


def targetLanguages = [
	"ar", "ca", "cz", "de", "el", "es", "fr", "gl", "id", "ia", "it", "ko", "hu", "ja", 
	"nl", "pl", "br", "pt", "ru", "sq", "sk", "si", "hr", "fi", "sv", "zh_CN", "zh_TW"
];

// Translated projects
targetLanguages = [ "fr" ];

// TODO - Make a GUI ?
targetLanguages.each{ targetLang ->
	//toOmegaT(targetLang);
	toSite(targetLang);
	//copyEnglishFiletoSite("404.html", targetLang);
}

/** 
 *  
 * Copy a single file from the English _i18n/en to the corresponding language.
 *
 */
void copyEnglishFiletoSite(srcFile, targetLang) {
	console.println("copyEnglishFiletoSite => ${srcFile} to ${targetLang}");

	src = new File(sourceDirectory, srcFile);
	dst = new File(new File(jekyllDir, "_i18n/${targetLang}"), srcFile);
	console.println("    -> ${src} to ${dst}");
	FileUtils.copyFile(src, dst);

}

/** 
 *  
 *  Copy files from the English versions of the site to OmegaT project of another language. 
 *  If the language is not present, the OmegaT project is created.
 *
 */
void toOmegaT(targetLang) {
	console.println("toOmegaT => ${targetLang}");

	def projectDir = new File(translationDirectory, "omegat-website-${targetLang}");

	console.println(" -> projectDir: ${projectDir}");

	if (! projectDir.exists()) {
		projectDir.mkdirs();

		console.println(" -> Git init...");
		Git.init().setDirectory(projectDir).call();

		console.println(" -> Creating project...");
		TeamTool.initTeamProject(projectDir, "en", targetLang);
	}

	// git remote add origin https://github.com/briacp/omegat-website-ar.git
	/*
	RemoteAddCommand remAdd = Git.open(projectDir).remoteAdd();
     remAdd.setUri(new URIish("${githubRepo}/omegat-website-${targetLang}.git"));
     remAdd.setName("origin")
     remAdd.call();
     */

	console.println(" -> Copying source files...");
	def src = sourceDirectory;
	def dst = new File(projectDir, "source/${targetLang}");
	console.println("    -> DIR ${src} to ${dst}");
	FileUtils.copyDirectory(src, dst);

	src = new File(sourceDirectory, "../en.yml");
	dst = new File(projectDir, "source/${targetLang}.yml");
	console.println("    -> YML ${src} to ${dst}");
	FileUtils.copyFile(src, dst);

	/*
	def git = Git.open(projectDir);
	gitCall = git.add().addFilepattern(".*").call();
	git.commit().setMessage("Commit ${targetLang} source files.").call();
	*/

	//git push -u origin master
	//git.push().setDryRun(true).call();

	console.println("");
}

/** 
 *  
 * Compile translations from OmT projects and copy the resulting files to Jekyll.
 *
 */
void toSite(targetLang) {
	console.println("toSite => ${targetLang}");

	def projectDir = new File(translationDirectory, "omegat-website-${targetLang}");
	def targetDir = new File(projectDir, "target");

	// Generate targets from all the different projects
	
	// Load project
	console.println("  -> Loading project ${projectDir}...");
	Map<String, String> params = new HashMap<String, String>();
	params.put("project",projectDir.getAbsolutePath());
     //Core.initializeConsole(params);
     projectProperties = ProjectFileStorage.loadProjectProperties(projectDir);
     projectProperties.verifyProject();
     RealProject p = new RealProject(projectProperties);
     Core.setProject(p);
     p.loadProject(false); // true/false: onlineMode

     // Generate targets
     console.println("    -> Compile project...");
	p.compileProject(".*");

	// Close project
	console.println("    -> Close project...");
	p.closeProject();
	
	console.println(" -> Copying files...");
	def src = new File(targetDir, "${targetLang}");
	def dst = new File(jekyllDir, "_i18n/${targetLang}");
	dst.mkdirs();
	console.println("    -> DIR ${src} to ${dst}");
	FileUtils.copyDirectory(src, dst);

	src = new File(targetDir, "${targetLang}.yml");
	dst = new File(jekyllDir, "_i18n/${targetLang}.yml");
	console.println("    -> YML ${src} to ${dst}");
	FileUtils.copyFile(src, dst);

	console.println("");
}



