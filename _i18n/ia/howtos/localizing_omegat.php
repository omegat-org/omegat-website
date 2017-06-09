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

<h2>Guida de OmegaT: render OmegaT in vostre lingua</h2>


<h3>Traduction: notas general</h3>


<p>Le termino "Nos" hic in ultra se refere al gruppo de projecto de OmegaT.. Le gruppo de projecto de OmegaT non es un societate o un persona juridic formal, ma sol un gruppo de voluntarios implicate in le projecto OmegaT.</p>


<p>OmegaT es un programma gratuite pro memoria de traduction, open-source.. Le interfacie del usator e le documentation esseva in origine scribite in anglese. Pois que le programma es destinate pro le traductores in omne le mundo e non solmente in le paises de lingua anglese, il es opportun que la documentation e, si possibile, le programma mesme, sia disponibile in altere linguas. Totevia, pois que le programma es offerite e non vendite commercialmente, non es presente ressources disponibile a pagar pro le traductiones. In vice, illes qui es implicate in le projecto OmegaT spera que le traductiones essera fornite ante toto ab traductores qui ha experimentate OmegaT e es convincite de su valor pro le communitate complete del traductores.</p>


<h3>Le labor de traduction</h3>


<p>Al momento del scriptura, le material a render es componite ab:</p>


<p>

* Le interfacie del usator (menu ecc.)<br/>  * Le guida "initio rapide" (un curte introduction al uso de OmegaT)<br/>  * Le guida "Initio rapide" (un curte introduction al uso de OmegaT)<br/> * Le file readme (un documento que contine information general re OmegaT)<br/> * Le paginas TTT de OmegaT (probabilemente ubi tu lege ora)

</p>


<p>Le traductores es libere de affrontar le quantitate de labor que illes vole.  In particular, le manual principal del usator risca de ingagiar duo septimanas pro le traduction, e plure traductores poterea desiderar de participar al labor.</p>

<h3>Procedura</h3>

<p>1. Stabilir le contacto con le <a href="mailto:jean.christophe.helary@gmail.com">Coordinator del localisation</a>, ille essera habile a parlar te re alicun questiones specific re tu lingua.</p>


<p>2. Participa al <a href="http://tech.groups.yahoo.com/group/omegat/">Gruppo del usator de OmegaT</a> (alsi note como "OmT"). Durante le processo de adhesion, tu debera inviar un breve message pro le moderatores del gruppo: isto es pro consentir lor de distinguer le usatores sincer ex le disturbatores.</p>

<p>Post le adhesion, visita le <a href="http://tech.groups.yahoo.com/group/omegat/database">Plan de localisation de OmegaT</a>. Iste plan monstra qual labor de traduction e localisation esseva jam facite sur OmegaT, e qual labor es actualmente in curso. Si un pecia apte del labor pro tu lingua non es etiam nunc initiate, tu pote signar lo in le plan per indicar que tu ha assumite le responsabilitate pro isto.  Le scopo del plan es celle de prevenir que duo o plus traductores labora sur le mesme traduction sin esser consciente (duplicatos del obras).  <strong>Al fin de evitar que duo o plus traductores labora al mesme tempore sur le mesme lingua, es ergo assatis importante signar se in le plan de localisation quando on initia a laborar sur un traduction.</strong></p>

<p>3. Ben que non essential, il es convenibile anque adherer al <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">Mailing list del localisator de OmegaT</a> (cognoscite etiam como "OmT-l10n").</p>

<p>4. Discarga le files pro le traduction, o le <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Full.zip"
>'; $endlink='</a>';?> <?php echo $link ?>"Full" package<?php echo $endlink ?> o le <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Minimal.zip"
>'; $endlink='</a>';?> <?php echo $link ?>"Minimal" package<?php echo $endlink ?>.</p>

<p>Le pacchetto complete contine le 'Manual del usator', le 'Manual de initio rapide', le 'Equipamento de ressources de Interfacie del usator' e le file 'Lege me'. Le pacchetto minime contine le mesme files del pacchetto complete, exception facite pro le manual principal del usator. Tu non debe traducer un pacchetto complete; il es possibile, per exemplo, render solmente le Interfacie del usator (equipamento), o solmente le Guida de initio rapide.
</p>

<p>Si tu vole render le paginas TTT de OmegaT, discarga le <a href="http://www.omegat.org/resources/omt_website.zip">pacchetto de localisation del sito TTT</a>.. (Nota: istos son files in lingua anglese. Si tu prefere render ex un altere lingua, in le qual OmegaT esseva jam localisate, que tu stabili contacto con le <a href="mailto:mailto:lin4trans@users.sourceforge.net">webmaster di OmegaT</a>.)</p>

<p>Le sito de OmegaT include files in HTML e, a partir del 2011, anque in formato PHP. Pro render isto ultime in OmegaT, es necesse registrar le extension .php con le filtro XHTML como seque:</p>

<p>Optiones &gt; Filtros del files... &gt; Selige "files HTML e XHTML" &gt; Modifica &gt; Adde &gt; inde scribe "*.php" in le colonna "Modello del nomine del file original".</p>

<p>5. On pote haber versiones vetule del memorias de traduction (files TMX) e/o documentation disponibile pro tu lingua, le qual es utile pro le traduction. Le files de memoria de traduction (TMX) del precedente localisationes de OmegaT, le documentation e le sito es disponibile in le <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">section "File" del gruppo de usatores on-line</a> Il es avantagiose anque demandar presso le <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista del localisatores</a> (OmT-l10n) si alicuno ha ulle material de referentia que poterea facilitar tu traduction.</p>

<p>6. Rende le files que tu ha seligite. Inutile dicer que nos prefererea usar OmegaT pro le labor de localisation de OmegaT. Totevia il es possibile usar altere software, si tu desira lo</p>

<p>Dispacchetta le archivo .zip del pacchetto complete o minime que tu ha discargate. Quando decomprimite, le files pro le localisation del programma OmegaT es un projecto OmegaT preste al uso. Tu non necessita crear un projecto OmegaT como tu facerea normalmente.</p>

<p>Tu ha complete libertate re como render. Tu pote modificar, corriger, adder o eliminar informationes a tu proprie discretion. 
Si tu ha demandas, le <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista OmT-l10n</a> es le loco melior pro formular los.</p>

<p>Que tu <strong>NON</strong> rende le licentia GPL (GNU Public License) o GFDL (GNU Free Documentation License), si le documento que tu es rendente contine lo. In primo loco, proque sol le original in lingua anglese es legalmente valide. Un traduction pote anque esser fornite pro information, ma non ha ulle validitate juridic. In secundo loco, a minus que vostre non es un lingua assatis rar, ambe le documentos in omne probabilitate esseva jam rendite Que tu cerca in le TTT e probabilemente trovara le traductiones.</p>

<p>Per favor mantene le traduction del files in lor formatos original. La forma es mantenite automaticamente si on ha usate OmegaT. Nos es grate per omne le traductiones, ma se le files es rendite in le mesme formato (e non, per exemplo, como files de Word) isto simplifica assatis nostre labor.</p>

<p>7. Proba tu traduction (optional).</p>

<p>Pro probar le interfacie del usator:</p>

<p>Lancea OmegaT ab le riga de commando (fenestra MS-DOS) con le sequente commandos (si tu non es certe re le execution de iste operation, consulta le manual del usator de OmegaT)</p>

<p>&nbsp; &nbsp; &nbsp;cd [percurso complete de OmegaT]<br/> &nbsp; &nbsp; &nbsp;java -jar OmegaT.jar resource-bundle=[nomine del equipamento del interfacie del usator con le percurso complete]</p>

<p>ubi [percurso complete de OmegaT] es le percurso complete del plica continente le programma OmegaT e [nomine del equipamento del interfacie del usator con le percurso complete] es le nomine de vostre traduction del equipamento del ressources (bundle_en.properties, a minus que non ha cambiate le nomine) includite le percurso complete per su position.</p>

<p>Pro verificar le apparentia del Guida de initio rapide al lanceamento:</p>

<p>in le plica /docs/ del programma OmegaT, crea un sub-plica con le codice ISO del lingua de tu systema operative (Renomina le plica existente temporaneemente si jam existe) e copia le manual in iste plica. Postea lancea OmegaT normalmente. (Si tu ha rendite in un lingua que non es le lingua del systema operative, vide sub, "Como OmegaT tracta le versiones localisate".)</p>

<p>8. Produce un imagine del visor de OmegaT in tu lingua. Anque isto es facultative, ma si tu esseva capabile de lancear OmegaT con tu pacchetto localisate (vide supra), Illo meliorara le qualitate de tu traduction. Pro producer un imagine del schermo, lancea OmegaT e crea un pagina commode pro su captura, visualisante percursos typic como le fenestra de dialogo  "Crea nove projecto".</p>

<p>Selige le formato de file .png</p>

<p>Denominar le imagine NewImage.png</p>

<p>9. Committe tu file al coordinator de localisation, que conferera lo al equipa de disveloppamento pro le insertion in le proxime emission de OmegaT. Si tu ha usate OmegaT o un altere instrumento CAT pro le labor, invia anque le memoria de traduction (file TMX) insimul con le traduction. Isto simplificara assatis le actualisation de tu traduction in le futuro. NON committer tu integre file de projecto OmegaT al coordinator del localisation (ille non necessita de reciper plus copias del integre projecto) Plus tosto, crea duo files. .zip, tar o gz, uno continente sol le documentos rendite e lo altere continente le files .tmx.</p>

<p>10. Non oblidar de actualisar le plan de localisation de OmegaT (vider le passo 2 del procedura) per monstrar que esseva completate la traduction de un particular version de documento. In le mesme modo, si tu abandona le labor de traduction per ulle motivo, actualisa per favor tu voce in le plan per monstrar isto Isto consenti de emitter le documento in question pro le traduction ex un altere traductor. Si tu interrumpe anteriormente al completamento del traduction, crea per favor le files .tmx ex lo que ha facite e committe los al coordinator del localisation.</p>

<p>11. Si tu usa OmegaT (nos spera que tu lo face) o ulle altere instrumento CAT pro producer le traduction, carga anque per favor le files TMX in le <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">archivo</a>.</p>

<h3>Como OmegaT tracta le versiones localisate</h3>

<p>Al momento del scriptura, OmegaT releva le lingua del systema operative que tu es usante. Inde illo carga le interfacie del usator e/o le manual del usator in ille lingua, si disponibile. Si un interfacie del usator o le manual del usator non es disponibile in le lingua del systema operative, le preparationes initial de OmegaT es pro visualisar le versiones in anglese.</p>

<p>Si OmegaT contine un version de lingua que te placerea usar, ma non es le lingua del systema operative, tu pote fortiar OmegaT a usar le version desiderate modificante le commando de lanceamento. Le commando de lanceamento pote esser trovate in le file "omegat" o "omegat.bat" in le plica continente le programma. Le commando normal es: </p>

<p>&nbsp; &nbsp; &nbsp;java -jar OmegaT.jar</p>

<p> Cambia lo con le addition del optiones lingua del usator e le codice correspondente del lingua, per exemplo in le caso sequente pro le francese</p>

<p>  &nbsp; &nbsp; java -Duser.language=fr -jar OmegaT.jar</p>

<h3>Questiones re le derecto de autor</h3>

<p>Le major parte del documentation OmegaT es concedite in licentia pro reusar lo sub le GNU Public License (GPL) o GNU Free Documentation License (GFDL). Le paginas TTT non es concedite in licentia pro reusar los. Nihil de tote isto ha necessitate de reguardar te, a minus que tu non es particularmente interessate al problemas del copyright.
 Tu essera accreditate como le autor de tu obra e nominate como detentor del copyright conjuncte.</p>

<p>Copyright Marc Prior 2009-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net Logo" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>

</body></html>
