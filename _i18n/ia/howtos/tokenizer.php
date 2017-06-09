<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, le application gratuite pro memoria de traduction</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <meta name="keywords" content="translation memory, TM, computer-aided translation, computer-assisted translation, CAT, GPL, open source" />

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css" />

</head>



<?php include '../../config/versions.txt'; ?>



<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>OmegaT, le instrumento (GPL) gratuite pro memoria de traduction</p>

</div>

<div id="content">

<h2>Guida de OmegaT: Using the OmegaT tokenizer</h2>

<p><strong>Le plug-in tokenizers son includite in OmegaT desde le version 3.0.0. Dunque le information sequente es applicabile sol si tu es usante un version de OmegaT precedente le 3.0.0.<br/> si tu esseva usante le plug-in tokenizer con un version de OmegaT precedente e tu ha promovite al version 3.0.0 o sequente de OmegaT, dele le files del plug-in tokenizer de tu plica plug-in.</strong></p>

<p>Le tokenizer de OmegaT es un  plugin pro OmegaT. Illo provide melior concordantias partial o del glossario, con le computation del radices ("cerca del stirpe") del parolas original. Per exemplo,illo recognoscera parolas declinate in textos e monstrara le correspondente entrata del glossario, etsi le entrata del glossario contine sol le forma non declinate de un parola.</p>

<h3>Preparation</h3>

<p>Avante que tu usa le tokenizer con OmegaT, tu debe in prime loco assecurar te que tu version de OmegaT es convenibile e preparate pro le uso con illo.</p>

<p><strong>Version Webstart de OmegaT</strong>: le tokenizer non es compatibile con le version Webstart de OmegaT. Si tu vole usar le tokenizer, installa le version standard de OmegaT (le ultime version beta) pro tu systema.</p>

<p><strong>OmegaT version 2.1.0 e precedente</strong>: le actual tokenizer non es compatibile con iste versiones. (Le tokenizer pote esser usate con le versiones 2.0.x e 2.1.0, ma isto necessita ambe un differente version del tokenizer, e un differente procedura de installation.) Le usatores es avisate pro promover al ultime version beta de OmegaT.</p>

<p><strong>Versiones Windows de OmegaT</strong>:pro usar OmegaT (omne version) con le tokenizer, illo debe esser lanceate ab un file script de lanceamento. Un file script de lanceamento non es supplite con le versiones de OmegaT pro Windows. Si tu es usante le version Windows con JRE, discarga le file <a href="../../resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>; si tu es usante le version Windows sin JRE, discarga le file <a href="../../resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. Depost le discargamento, pone le file in le plica principal de OmegaT (le plica continente le file OmegaT.jar).</p>

<p><strong>Le version Platteforma neutre (sur Windows)</strong>: loca tu file script de lanceamento de OmegaT (OmegaT.bat).</p>

<p><strong>Versiones/systemas Linux</strong>: loca tu file script de lanceamento de OmegaT (OmegaT o OmegaT.sh).</p>

<p>Controla que OmegaT es lanceate quando tu exeque le file script de lanceamento:<br/> - Sur Linux, sur le linea de commando<br/> - sur Windows, cliccante sur le file script de lanceamento</p>


<h3>Installar le tokenizer</h3>

<p>Depost le preparation pro le installation (vide precedente), installa le tokenizer como seque:</p>

<p>1. Discarga le pacchetto <?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>tokenizer zip (pro version 2.1.1 de OmegaT e sequente)<?php echo $endlink ?>.</p>

<p>2. Expande le files ab le pacchetto tokenizer zip.</p>

<p>3. In le plica principal del programma OmegaT (id es le plica continente le file OmegaT.jar), crea un sub plica nominate "plugins", si un sub plica con iste nomine non existe ja. copia le files que tu ha expandite ex le pacchetto tokenizer directemente in iste sub plica.</p>

<p>4. Aperi tu file script de lanceamento in un editor de texto. Usatores de Windows (in particular):  <strong>non</strong> cliccar simplemente sur iste file. In vice, lancea un editor de texto (assi como Notepad o Wordpad), alora aperi le file script de lanceamento con File &gt; Aperi. Tu pote alsi cliccar con le dextero con le mouse sur le file, pois seliger un editor de texto in le qual aperir lo</p>

<p>5. Le file script de lanceamento contine le commando de lanceamento de OmegaT. Le forma basic de iste commando is:</p>

<p>java -jar OmegaT.jar</p>

<p>Dependente sur tu configuration del systema, le commando de lanceamento pote esser legiermente differente.</p>

<p>6. Selige un tokenizer ex le lista sequente, secundo tu lingua <strong>de origine</strong>:</p>

<p>org.omegat.plugins.tokenizer.LuceneArabicTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneBrazilianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneChineseTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneCJKTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneCzechTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneDutchTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneFrenchTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneGermanTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneGreekTokenizer<br/>
org.omegat.plugins.tokenizer.LucenePersianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneSmartChineseTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneRussianTokenizer<br/>
org.omegat.plugins.tokenizer.LuceneThaiTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballDanishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballDutchTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballEnglishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballFinnishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballFrenchTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballGerman2Tokenizer<br/>
org.omegat.plugins.tokenizer.SnowballGermanTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballHungarianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballItalianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballNorwegianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballPorterTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballPortugueseTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballRomanianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballRussianTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballSpanishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballSwedishTokenizer<br/>
org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Adde le argumento --ITokenizer= sequite per le nomine complete de iste tokenizer (copiante le linea integre, insere un spatio) al fin del commando de lanceamento in tu file script de lanceamento de OmegaT .</p>

<p>Per exemplo, pro usar le tokenizer anglese (quando on rende a partir del anglese), tu commando de lanceamento pote ora esser:</p>

<p>java -jar OmegaT.jar %*
--ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>O si tu es rendente ab turco, il pote ora esser:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Importante: iste commando integre debe apparer sur un linea (mesmo si illo appare trovar se sur duo lineas in le apparentia in le qual tu es legente lo).</p>

<p>7. Exeque iste file, e OmegaT deberea ora lancear  con le function tokenizer. Pro essayar, controla si entratas glossario es monstrate mesmo ubi le segmento OmegaT actual  contine un termino in un forma declinate ex illo in le glossario.</p>

<p>8. Si tu vole usar tokenizers differente perque tu rende ex plus que un lingua, crea un file script de lanceamento de OmegaT separate pro cata tokenizer que tu desidera usar. Denomina appropriatemente le files script de lanceamento, per exemplo  "OmegaT-EN.bat" pro le file script de lanceamento continente le commando con le tokenizer anglese e "OmegaT-TR.bat" pro le file script de lanceamento continente le commando con le tokenizer turco.</p>

<p>9. In alicun casos, tu pote trovar que le tokenizer del lingua de origine interfere con le tokenizer del corrector orthographic. Tu pote eliminar iste problema specificante (ubi disponibile) un tokenizer pro le lingua de destination, con le argumento --ITokenizerTarget=.</p>

<p>Per exemplo, si tu es rendente ex le chinese al nederlandese, proba:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. Depost create un script de lanceamento como supra describite, tu pote configurar tu systema de maniera que OmegaT es lanceate plus convenibilemente, per exemplo creante un via breve. Pro crear un via breve in Windows:</p>

<p>Clicca con le dextero sur le script de lanceamento (OmegaT.bat), pois tenente le button dextre del mouse depresse, trahe le script a un position commode, assi como tu scriptorio. Quando tu relaxa le clicca dextre, un fenestra de dialogo se displica con plure optiones. Seliger "Crea hic vias breve".</p>
<p>Alternativemente, clicca con le dextere sur le file script de lanceamento Selige: "Invia a", pois selige "Scriptorio (crea via breve)".</p>
<p>Depost create e probate le via breve, tu pote adder lo al menu Start lo illac.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net Logo" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>

</body></html>
