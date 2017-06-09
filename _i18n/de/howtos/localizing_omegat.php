<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, the free translation memory tool</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta name="keywords" content="translation memory, TM, computer-aided translation, computer-assisted translation, CAT, GPL, open source" />

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css" />

</head>

<?php include '../../config/versions.txt'; ?>

<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>The free (GPL) translation memory tool</p>

</div>

<div id="content">

<h2>OmegaT HowTo: Translating OmegaT into your language</h2>


<h3>Translation: general remarks</h3>


<p>"We" refers below to the OmegaT project team. The OmegaT project team is not a company or formal legal body; just a group of volunteers involved in the OmegaT project.</p>


<p>OmegaT is a free, open-source translation memory program. The user interface and documentation were originally written in English. As the program is intended for translators throughout the world and not just
in English-speaking countries, it is appropriate that the documentation (and, if possible, the program itself) be available in other languages. However, as the program is being given away and not sold commercially, there are no resources available to pay for translations. Instead, those involved in the OmegaT project hope that translations will be provided first and foremost by translators who have tried OmegaT and are convinced of its value to the translation community as a whole.</p>


<h3>The translation work</h3>


<p>At the time of writing, the material to be translated comprises:</p>


<p>

* The user interface (menus etc.)<br/>

* The user manual (very comprehensive)<br/>

* The "instant start" guide (a short introduction to using OmegaT)<br/>

* The readme file (a document that contains general information about OmegaT)<br/>

* The OmegaT web pages (probably where you are reading this)

</p>


<p>Translators are free to tackle as much or as little of the work as they wish. In particular, the main user manual is likely to take two weeks to translate, and several translators may wish to share the work.</p>

<h3>Procedure</h3>

<p>1. Contact the <a href="mailto:jean.christophe.helary@gmail.com">localization co-ordinator</a>, who will be able to tell you of any specific issues regarding your language.</p>


<p>2. Join the <a href="http://tech.groups.yahoo.com/group/omegat/">OmegaT user group</a> (also known as "OmT"). During the subscription process, you will have to send a short message to the group moderators: this is to enable them to distinguish genuine users from spammers.</p>

<p>After joining, visit the <a href="http://tech.groups.yahoo.com/group/omegat/database">OmegaT Localization Plan</a>. This plan shows what translation/localization work has already been done on OmegaT, and what work is currently in progress. If a suitable piece of the work for your language has not yet been started, you can make an entry in the plan to indicate that you have assumed responsibility for it. The purpose of the plan is to prevent two or more translators from working on the same translation without being aware of it (duplication of effort). <strong>In order to prevent two or more translators from working on the same language at the same time, it is therefore very important that you make an entry in the localization plan when you begin work on a translation.</strong></p>

<p>3. Although not essential, we recommend that you also join the <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">OmegaT localizers' mailing list</a> (also known as "OmT-l10n").</p>

<p>4. Download the files for translation, either the <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Full.zip"
>';
$endlink='</a>';?>
<?php echo $link ?>"Full" package<?php echo $endlink ?> or the <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Minimal.zip"
>';
$endlink='</a>';?>
<?php echo $link ?>"Minimal" package<?php echo $endlink ?>.</p>

<p>The full package contains the user manual, the instant start manual, the user interface resource bundle and the readme file. The minimal package contains the same files as the full package, except for the main user manual. You do not have to translate a complete package; you can, for instance, translate just the user interface (Bundle.properties), or just the instant start tutorial.</p>

<p>If you wish to translate the OmegaT web pages, download the <a href="http://www.omegat.org/resources/omt_website.zip">website localization package</a>. (Note: these are the English files. If you prefer to translate from a different language into which OmegaT has already been localized, please&nbsp;contact the <a href="mailto:mailto:lin4trans@users.sourceforge.net">OmegaT webmaster</a>.)</p>

<p>The OmegaT website includes files in HTML and, as of 2011, PHP format. To translate the latter in OmegaT, you must register the .php extension with the HTML and XHTML filter as follows:</p>

<p>Options > File Filters > Select "HTML and XHTML files" > Edit > Add > Then enter "*.php" in the "Source Filename Pattern" column.</p>

<p>5. There may be older versions of the documentation and/or translation memories (TMX files) available for your language which are useful to your translation. Translation memory (TMX) files of older localizations of OmegaT, the documentation and the website can be found in the <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">"Files" section of the online user group</a>. It is also worth asking on the <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">localizers' list</a> (OmT-l10n) whether anyone has any reference material which might facilitate your translation.</p>

<p>6. Translate the files you have chosen. Needless to say, we would prefer you to use OmegaT for the OmegaT localization work. You can however use other software if you wish.</p>

<p>Unpack the zip archives of the full or minimal package you have downloaded. When unpacked, the files for localization of the OmegaT program are a ready-to-use OmegaT project. You do not need to create an OmegaT project as you normally would.</p>

<p>You have complete freedom in how you translate. You can modify, correct, add or delete information at your own discretion. If you have any questions, the&nbsp;<a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">OmT-l10n list</a> is the best place to post them.</p>

<p>If the document you are translating contains it, please do <strong>not</strong>&nbsp;translate
the GPL (GNU Public License) or the GFDL (GNU Free Documentation License). Firstly, only the original English is legally valid. A translation may also be provided for information, but it has no legal validity. Secondly, unless yours is a&nbsp; very uncommon language, both documents have in all probability already been translated. Search the web and you will probably find the translations.</p>

<p>Please keep translations of files in their original format. The formatting is retained automatically if you use OmegaT. We are grateful for all translations, but it simplifies our work considerably if files are returned in the same format (and not as Word files, for example).</p>

<p>7. Test your translation (optional).</p>

<p>To test the user interface:</p>

<p>Launch OmegaT from the command line (MS-DOS window) with the following commands (if you are unsure how to do this, refer to the OmegaT user manual)</p>

<p>&nbsp; &nbsp; &nbsp;cd [full path to OmegaT]<br/>

&nbsp; &nbsp; &nbsp;java -jar OmegaT.jar resource-bundle=[name of bundle with full path]</p>

<p>where [full path to OmegaT] is the full path to the folder containing the OmegaT program, and [name of bundle with full path] is the name of your translation of the resource bundle (bundle_en.properties, unless you have changed the name) including the full path to its location.</p>

<p>To test display of the Instant Start Guide at launch:</p>

<p>In the /docs/ folder of the OmegaT program, create a sub-folder with the ISO code of your operating system language (rename the existing folder temporarily if it already exists), and copy the manual into this folder. Then launch OmegaT normally. (If you have translated into a language which is not your operating system language, see below, "How OmegaT handles localized versions".)</p>

<p>8. Produce a screenshot of OmegaT in your language. This is also optional, but if you have been able to launch OmegaT with your localized bundle (see above), it will enhance the quality of your translation. To produce a screenshot, launch OmegaT and create a suitable screen for a screenshot, such as the "Create new project" dialog showing typical paths.</p>

<p>Choose the .png file type</p>

<p>Name the image NewImage.png</p>

<p>9. Deliver your file to the localization co-ordinator, who will pass it on to the development team for inclusion in the next release of OmegaT. If you used OmegaT or another CAT tool for the work, please also send your translation memory (TMX file) together with the translation. This will greatly simplify updating of your translation in the future. Please do NOT deliver your entire OmegaT project file to the localization coordinator (he does not need to receive multiple copies of the entire project). Rather, create two separate .zip or tar.gz files, one containing the target documents only, and the other containing the tmx files.</p>

<p>10. Don't forget to update the OmegaT Localization Plan (see Step 2 of the procedure) to show that you have completed translation of a particular document/version. Equally, if you abandon the translation work for any reason, please update your entry in the plan to show this. This enables the document concerned to be released for translation by another translator. If you discontinue before completing the transaltion, please do create the tmx files for what you have done and send them along to the localization coordinator.</p>

<p>11. If you use OmegaT (we hope that you do) or any other CAT tool to produce your translation, please also upload the TMX files to the <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">repository</a>.</p>

<h3>How OmegaT handles localized versions</h3>

<p>At the time of writing, OmegaT detects the language of the operating system you are using. It then loads the user interface and/or user manual in that language, if available. If a user interface or user manual are not available in the language of your operating system, OmegaT defaults to displaying the English versions.</p>

<p>If OmegaT contains a language version which you would like to use but is not the language of your operating system, you can force OmegaT to use the desired version by changing the launch command. The launch command can be found in the file "omegat" and/or "omegat.bat" in the folder containing the program. The normal command is: </p>

<p>&nbsp; &nbsp; &nbsp;java -jar OmegaT.jar</p>

<p> Change this by adding the user language option and the corresponding language code, e.g. in the following case for French:</p>

<p> &nbsp; &nbsp; java -Duser.language=fr -jar OmegaT.jar</p>

<h3>Copyright issues</h3>

<p>Most of the OmegaT documentation is licensed for re-use under the GNU Public License (GPL) or GNU Free Documentation License (GFDL). The web pages are not licensed for re-use. None of this need concern you unless you are particularly interested in copyright issues. You will be credited as the author of your work and named as joint copyright holder.</p>

<p>Copyright Marc Prior 2009-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net Logo" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>

</body></html>
