<?php print "<?xml version=\"1.0\"?>" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, a ferramenta de memoria de traduci&oacute;n libre</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  
  <meta name="keywords" content="translation memory, TM, computer-aided translation, computer-assisted translation, CAT, GPL, open source" />

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css" />

<META http-equiv="content-type" content="text/html; charset=utf-8">
</head><?php include '../../config/versions.txt'; ?> <?php include '../../config/website_progress.txt'; ?><body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>A ferramenta de memoria de traduci&oacute;n libre (GPL)</p>

</div>

<div id="content">

<h2>Gu&iacute;a de OmegaT: Traducir OmegaT ao seu idioma</h2>


<h3>Traduci&oacute;n: observaci&oacute;ns xerais</h3>


<p>«N&oacute;s» ref&iacute;rese ao equipo do proxecto OmegaT. O equipo do proxecto OmegaT non &eacute; unha empresa nin un corpo legal formal, s&oacute; un grupo de voluntarios involucrados no proxecto.</p>


<p>OmegaT &eacute; un programa gratu&iacute;to de c&oacute;digo aberto de memoria de traduci&oacute;n. A interface de usuario e a documentaci&oacute;n escrib&iacute;ronse orixinalmente en ingl&eacute;s. O programa est&aacute; destinado a persoas de todo o mundo que se dedican &aacute; traduci&oacute;n, polo que resulta conveniente que a documentaci&oacute;n (e, de ser posible, o propio programa) estean dispo&ntilde;ibles noutros idiomas. Como non somos un proxecto comercial, non temos o presuposto para contratar a persoas para realizar traduci&oacute;ns. Pola contra, as persoas involucradas no proxecto esperan que as traduci&oacute;ns sexan realizadas en primeiro lugar e principalmente por persoas dedicadas &aacute; traduci&oacute;n que te&ntilde;an probado OmegaT e estean convencidas do valor que aporta &aacute; comunidade da traduci&oacute;n.</p>

<h3>O traballo de traduci&oacute;n</h3>

<p>No momento de redactar este texto, o material que debe ser traducido consiste en:</p>

<p>* A interface de usuario (men&uacute;s, etc.) <br/> * O manual de usuario (moi completo)<br/> A gu&iacute;a de inicio r&aacute;pido (unha introduci&oacute;n corta ao uso de OmegaT)<br/> * O ficheiro leme (un documento que cont&eacute;n informaci&oacute;n xeral sobre OmegaT)<br/> * O titorial para principiantes<br/> A p&aacute;xina web de OmegaT (o lugar no que probablemente est&aacute; lendo isto)</p>

<p>As persoas que realizan a traduci&oacute;n te&ntilde;en a liberdade de levar a cabo tanto traballo como desexen. No caso do manual de usuario principal en concreto, pode levar ata d&uacute;as semanas traducilo, e moitas persoas prefiren compartir o traballo.</p>

<h3>Proceso</h3>

<p>1. Contacte co coordinador adecuado para o traballo de traduci&oacute;n:<br/> Para a interface de usuario, o manual de usuario e a gu&iacute;a de inicio r&aacute;pido ou o manual leme, contacte co <a href="mailto:jean.christophe.helary@gmail.com">Coordinador de localizaci&oacute;n de OmegaT</a>.<br/> Se desexa traducir a p&aacute;xina Web de OmegaT ou o titorial para novatos, contacte co <a href="mailto:lin4trans@users.sourceforge.net">xestor da p&aacute;xina web de OmegaT</a>.<p>2. &Uacute;nase ao <a href="http://tech.groups.yahoo.com/group/omegat/">grupo de usuarios de OmegaT</a> (tam&eacute;n co&ntilde;ecido como «OmT»). Durante o proceso de subscrici&oacute;n ter&aacute; que enviar unha mensaxe corta aos moderadores do grupo, para permitirlles distinguir entre usuarios reais e contas de correo non desexado.</p>

<p>Despois de unirse visite o <a href="http://tech.groups.yahoo.com/group/omegat/database">plan de localizaci&oacute;n de OmegaT</a>. Este plan mostra que traballos de traduci&oacute;n/localizaci&oacute;n de OmegaT se te&ntilde;en realizado e cales est&aacute;n en proceso. Se non se comezou a traballar nun aspecto determinado do seu idioma, pode crear unha entrada no plan e indicar que asumiu a responsabilidade. O prop&oacute;sito do plan &eacute; evitar que d&uacute;as ou m&aacute;is persoas traballen na mesma traduci&oacute;n sen ser conscientes (esforzo duplicado). <strong>Polo tanto, &eacute; moi importante que cree unha entrada no plan de localizaci&oacute;n cando comece a traballar nunha traduci&oacute;n para evitar que d&uacute;as ou m&aacute;is persoas traballen na mesma secci&oacute;n da localizaci&oacute;n dun idioma.</strong></p>

<p>3. Inda que non &eacute; esencial, recomend&aacute;moslle que se unha &aacute; <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista de correo de localizadores de OmegaT</a> (tam&eacute;n co&ntilde;ecida como &quot;OmT-l10n&quot;).</p>

<p>4. Descargue os ficheiros para realizar a traduci&oacute;n.</p>

<p>Para o <strong>programa OmegaT e a documentaci&oacute;n</strong>, pode optar entre <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Full.zip"
>';
$endlink='</a>';?> <?php echo $link ?>o paquete «Completo»<?php echo $endlink ?> ou o <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Minimal.zip"
>';
$endlink='</a>';?> <?php echo $link ?>paquete «M&iacute;nimo»<?php echo $endlink ?>.</p>

<p>O paquete completo cont&eacute;n o manual de usuario, a gu&iacute;a de inicio r&aacute;pido, a interface de usuario e o ficheiro leme. O paquete m&iacute;nimo cont&eacute;n os mesmos ficheiros que o paquete completo a excepci&oacute;n do manual de usuario. Non ten que traducir un paquete completo, pode simplemente traducir a interface de usuario (Bundle.properties) ou a gu&iacute;a de inicio r&aacute;pido.</p>

<p>Se desexa traducir <strong>a p&aacute;xina web de OmegaT</strong>, descargue o <a href="/files/omt_website.zip">paquete de localizaci&oacute;n da p&aacute;xina web</a>. (Te&ntilde;a en conta: estes son os paquetes do ingl&eacute;s. Se desexa traducir dende un idioma diferente ao que OmegaT xa fose traducido, contacte co <a href="mailto:mailto:lin4trans@users.sourceforge.net">xestor da p&aacute;xina web de OmegaT</a>.)</p>

<p>Polo xeral, as localizaci&oacute;ns da interface de usuario de OmegaT e a documentaci&oacute;n actual&iacute;zanse con cada nova versi&oacute;n de OmegaT. </p>

<p>A p&aacute;xina web de OmegaT &eacute; un traballo en progreso continuo. Pode <a href="./website_file_list.php">ver unha lista das p&aacute;xinas da web de OmegaT na que se indica cando foi actualizada por &uacute;ltima vez</a>.<p>A p&aacute;xina web de OmegaT incl&uacute;e ficheiros en formato HTML e, dende 2011, en formato PHP. Para traducir os ficheiros PHP en OmegaT, debe rexistrar a extensi&oacute;n .php cos filtros HTML e XHTML seguindo estes pasos:</p>

<p>Opci&oacute;ns &gt; Filtros de ficheiros &gt; Seleccione «HTML e XHTML» &gt; Editar &gt;Engadir &gt; Introduza &ldquo;*.php&rdquo; no cadro «Padr&oacute;n do nome de ficheiro de orixe». </p>

<p>Por &uacute;ltimo, pode atopar o <strong>Titorial para novatos</strong> <a href="/files/guide/OmegaT_for_Beginners_gl.odt">aqu&iacute;</a>.</p>

<p>5. &Eacute; posible que haxa versi&oacute;ns antigas das da documentaci&oacute;n ou das memorias de traduci&oacute;n (ficheiros TMX) dispo&ntilde;ibles para o seu idioma que poden ser &uacute;tiles no proceso de traduci&oacute;n. Pode atopar os ficheiros de memorias de traduci&oacute;n (TMX) de localizaci&oacute;ns antigas de OmegaT, a documentaci&oacute;n e a p&aacute;xina web na <a href="http://groups.yahoo.com/neo/groups/omegat/files/3- Localization files/Translation memory repository/">secci&oacute;n «Files» do grupo de usuarios en li&ntilde;a</a>. Tam&eacute;n merece a pena preguntar na <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista de localizadores</a> (OmT-l10n) se algu&eacute;n ten materiais de referencia que poidan facilitar a s&uacute;a traduci&oacute;n.</p>

<p>6. Traduza os ficheiros que escolleu. Non &eacute; necesario que digamos que prefeririamos que empregase OmegaT para realizar as labores de localizaci&oacute;n de OmegaT, pero pode empregar outro software se o desexa.</p>

<p>Despois de descargar o ficheiro zip do paquete completo ou m&iacute;nimo ou o paquete de localizaci&oacute;n da p&aacute;xina web, descompr&iacute;mao. Para os paquetes completos ou m&iacute;nimos (interface de usuario e documentaci&oacute;n) non &eacute; necesario que cree un proxecto de OmegaT como o far&iacute;a normalmente: cando os descomprima, os ficheiros de localizaci&oacute;n de OmegaT est&aacute;n listos para usarse nun proxecto. (Este non &eacute; o caso dos ficheiros de localizaci&oacute;n da p&aacute;xina web.)</p>

<p>Ten liberdade total &aacute; hora de decidir como realizar a traduci&oacute;n. Pode modificar, corrixir, engadir ou eliminar informaci&oacute;n baixo os seus propios criterios. Se ten algunha pregunta, a <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista OmT-l10n</a> &eacute; o mellor lugar para publicalas.</p>

<p>Se a atopa nos documentos que est&aacute; traducindo, <strong>non</strong>&nbsp;traduza a GPL (GNU Public License) ou a GFDL (GNU Free Documentation License). S&oacute; a versi&oacute;n orixinal en ingl&eacute;s &eacute; v&aacute;lida. &Eacute; posible que se incl&uacute;a unha versi&oacute;n traducida por motivos informativos, pero non ter&aacute; validez legal. Ademais, a menos que o seu sexa un idioma pouco com&uacute;n, &eacute; probable que ambos documentos xa te&ntilde;an sido traducidos. Se fai unha busca na web seguramente atopar&aacute; as traduci&oacute;ns.</p>

<p>Mante&ntilde;a as traduci&oacute;ns de ficheiros no seu formato orixinal, e non cambie o nome dos ficheiros. O formato manterase de forma autom&aacute;tica se emprega OmegaT. Agradecemos todas as traduci&oacute;ns, pero simplifica moito o noso traballo se recibimos os ficheiros no mesmo formato (e non como ficheiros de Word, por exemplo).</p>

<p>7. Probe a s&uacute;a traduci&oacute;n (opcional).</p>

<p>Para probar a interface de usuario:</p>

<p>Execute OmegaT dende a li&ntilde;a de comandos (vent&aacute; de MS-DOS) cos seguintes comandos (se non sabe como facer isto, consulte o manual de usuario de OmegaT).</p>

<p>&nbsp; &nbsp; &nbsp;cd [ruta completa a OmegaT]<br/> &nbsp; &nbsp; &nbsp;java -jar OmegaT.jar resource-bundle=[nome do paquete coa ruta completa]</p>

<p>[ruta completa a OmegaT] &eacute; a ruta ao cartafol que cont&eacute;n o programa OmegaT e [nome do paquete coa ruta completa] &eacute; o nome da s&uacute;a traduci&oacute;n do paquete de recursos (bundle_en.properties, a menos que o cambiase) e a ruta completa &aacute; localizaci&oacute;n.</p>

<p>Para probar a visualizaci&oacute;n da Gu&iacute;a de inicio r&aacute;pido:</p>

<p>No cartafol /docs/ do programa OMegaT, cree un subcartafol co c&oacute;digo iso do idioma do seu sistema operativo (se o cartafol xa existe, cambie o seu nome de forma temporal) e copie o manual neste cartafol. Despois disto execute OmegaT de formal normal. (Se traduciu a un idioma no que non est&aacute; o seu sistema operativo, mire a continuaci&oacute;n «Como xestiona OmegaT as versi&oacute;ns localizadas».)</p>

<p>8. Cree unha captura de pantalla de OmegaT no seu idioma (despois de traducir a interface de usuario). Este paso tam&eacute;n &eacute; opcional, pero se conseguiu executar OmegaT co paquete localizado (como explicamos no paso anterior) mellorar&aacute; a calidade da s&uacute;a traduci&oacute;n. Para crear unha captura de pantalla, execute OmegaT e cree unha pantalla adecuada para unha captura, como pode ser a xanela «Crear un novo proxecto» na que se mostran as rutas t&iacute;picas.</p>

<p>Escolla o formato de ficheiro .png.</p>

<p>Asigne &aacute; imaxe o nome NewImage.png</p>

<p>9. Entregue o seu ficheiro ao coordinador da localizaci&oacute;n, que llo enviar&aacute; ao equipo de desenvolvemento para que o incl&uacute;a na pr&oacute;xima versi&oacute;n de OmegaT (no caso da interface e a documentaci&oacute;n) ou o suba &aacute; web (no caso da p&aacute;xina web). Se empregou OmegaT ou algunha outra ferramenta de traduci&oacute;n asistida para levar a cabo o traballo, suba a memoria de traduci&oacute;n (ficheiro TMX) ao <a href="http://groups.yahoo.com/neo/groups/omegat/files/3- Localization files/Translation memory repository/">repositorio de memorias de traduci&oacute;n no grupo de usuarios en li&ntilde;a</a>. Isto facilitar&aacute; a actualizaci&oacute;n da traduci&oacute;n no futuro. Por favor, non lle entregue o proxecto completo de OmegaT ao coordinador da traduci&oacute;n (non precisa recibir m&uacute;ltiples copias do proxecto completo). En lugar diso, cree dous ficheiros separados en formato .zip ou .tar.gz, nun incl&uacute;a s&oacute; os documentos e no outro s&oacute; os ficheiros tmx.</p>

<p>10. Non esqueza <strong>actualizar o Plan de localizaci&oacute;n de OmegaT</strong> (consulte o paso 2 do proceso) para mostrar que completou a traduci&oacute;n dun documento/versi&oacute;n concreto. Da mesma forma, se abandonou o traballo de traduci&oacute;n por calquera motivo, actualice a entrada no plan para indicalo. Isto permite que outra persoa poida traballar na traduci&oacute;n. Se abandona o proxecto antes de completar a traduci&oacute;n, cree os ficheiros TMX para as traduci&oacute;ns que realizou e s&uacute;baos ao repositorio de memorias de traduci&oacute;n.</p>

<h3>Informaci&oacute;n de copyright</h3>

<p>&Eacute; posible reutilizar a maior parte da documentaci&oacute;n de OmegaT grazas &aacute;s licenzas GNU Public License (GPL) e GNU Free Documentation License (GFDL). Ningunha licenza permite reutilizar a p&aacute;xina web. Isto non &eacute; importante para vostede, a menos que te&ntilde;a un interese particular nos asuntos de copyright. Acreditaremos o seu traballo e pasar&aacute; a ser co-titular do copyright.</p>

<p>Copyright Marc Prior 2009-2014</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net Logo" height="31" width="88" /></a><br /> <a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a></div>

</div>

</body></html>
