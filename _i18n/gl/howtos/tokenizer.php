<div class="container">

<h2>Gu&iacute;a de OmegaT: Usar o tokenizer de OmegaT</h2>

<p><strong>O complemento tokenizer integrouse en OmegaT na versi&oacute;n 3.0.0. A informaci&oacute;n que atopar&aacute; a continuaci&oacute;n s&oacute; se aplica se est&aacute; empregando unha versi&oacute;n de OmegaT anterior &aacute; 3.0.0.<br/> Se estivo usando o complemento tokenizer cunha versi&oacute;n anterior de OmegaT e actualizou &aacute; versi&oacute;n 3.0.0 de OmegaT ou unha superior, borre os ficheiros do complemento tokenizer na carpeta do complemento.</strong></p>

<p>O tokenizer de OmegaT &eacute; un complemento para OmegaT. Aporta mellores coincidencias parciais e de glosario a OmegaT mediante a computaci&oacute;n das palabras ra&iacute;z. Por exemplo, reco&ntilde;ecer&aacute; as palabras flexionadas e mostrar&aacute; a entrada do glosario correspondente, incluso se a entrada do glosario s&oacute; cont&eacute;n a palabra sen flexionar.</p>

<h3>Preparativos</h3>

<p>Antes de empregar o tokenizer con OmegaT, ter&aacute; que asegurarse de que a s&uacute;a versi&oacute;n &eacute; compatible e est&aacute; preparada para o seu uso.</p>

<p><strong>Versi&oacute;n Comezo Web</strong>: o tokenizer non &eacute; compatible con esta versi&oacute;n de OmegaT. Se quere empregar o tokenizer, ter&aacute; que instalar a versi&oacute;n est&aacute;ndar de OmegaT (a &uacute;ltima versi&oacute;n beta) no seu sistema.</p>

<p><strong>Versi&oacute;n 2.1.0 de OmegaT e anteriores</strong>: o tokenizer actual non &eacute; compatible con estas versi&oacute;ns. (&Eacute; posible empregar o tokenizer coas versi&oacute;ns 2.0.X e 2.1.0, pero &eacute; necesario empregar unha versi&oacute;n do tokenizer e un m&eacute;todo de instalaci&oacute;n distintos.) Recomendamos aos usuarios que actualicen OmegaT &aacute; &uacute;ltima versi&oacute;n beta.</p>

<p><strong>Versi&oacute;ns de Windows de OmegaT</strong>: para poder empregar o tokenizer en OmegaT, ser&aacute; necesario que o execute dende un ficheiro de script de inicio. Non se incl&uacute;e este ficheiro nas versi&oacute;ns de OmegaT de Windows. Se est&aacute; usando a versi&oacute;n de Windows con JRE, descargue o ficheiro <a href="/resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>; pola contra, se est&aacute; empregando a versi&oacute;n de Windows sen JRE, descargue o ficheiro <a href="/resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. Unha vez finalice a descarga, sit&uacute;e o arquivo no cartafol principal de OmegaT (o cartafol no que se atopa o ficheiro OmegaT.jar).</p>

<p><strong>Versi&oacute;n independente de plataforma (en Windows)</strong>: localice o ficheiro de script de inicio (OmegaT.bat).</p>

<p><strong>Versi&oacute;ns/sistemas Linux</strong>: localice o ficheiro de script de inicio (OmegaT ou OmegaT.sh).</p>

<p>Aseg&uacute;rese de que OmegaT est&aacute; iniciado antes de executar o ficheiro de script de inicio:<br/> - En Linux, na li&ntilde;a de comandos<br/> - En Windows, facendo clic no ficheiro de script de inicio</p>


<h3>Instalar o tokenizer</h3>

<p>Despois de preparar a instalaci&oacute;n como se indicou nos par&aacute;grafos anteriores, poder&aacute; instalar o tokenizer seguindo este proceso:</p>

<p>1. Descargue o <?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>';
$endlink='</a>';?> <?php echo $link ?>paquete zip que cont&eacute;n o tokenizer (para a versi&oacute;n 2.1.1 de OmegaT e posteriores)<?php echo $endlink ?>.</p>

<p>2. Descomprima os ficheiros do paquete zip que cont&eacute;n o tokenizer.</p>

<p>3. No cartafol principal de OmegaT (o cartafol no que atopar&aacute; o ficheiro OmegaT.jar), cree un subcartafol chamado «plugins» se non existe xa. Copie directamente neste cartafol os ficheiros que descomprimiu do paquete do tokenizer.</p>

<p>4. Abra o seu ficheiro de script de inicio nun editor de texto. Os usuarios de Windows (en especial): <strong>non</strong> fagan simplemente dobre clic neste ficheiro. No seu lugar deber&aacute;n abrir un editor de texto, como Notepad ou Wordpad, e abrir o ficheiro de script de inicio con Ficheiro &gt; Abrir. Tam&eacute;n poden facer clic co bot&oacute;n dereito do rato no ficheiro e seleccionar o editor de texto co que queren abrilo.</p>

<p>5. O ficheiro de script de inicio cont&eacute;n o comando de inicio de OmegaT. A forma b&aacute;sica deste comando &eacute;:</p>

<p>java -jar OmegaT.jar</p>

<p>O comando de inicio pode cambiar dependendo da configuraci&oacute;n do seu sistema.</p>

<p>6. Escolla un tokenizer da seguinte lista tendo en conta a s&uacute;a lingua de <strong>orixe</strong>:</p>

<p>org.omegat.plugins.tokenizer.LuceneArabicTokenizer<br/> org.omegat.plugins.tokenizer.LuceneBrazilianTokenizer<br/> org.omegat.plugins.tokenizer.LuceneChineseTokenizer<br/> org.omegat.plugins.tokenizer.LuceneCJKTokenizer<br/> org.omegat.plugins.tokenizer.LuceneCzechTokenizer<br/> org.omegat.plugins.tokenizer.LuceneDutchTokenizer<br/> org.omegat.plugins.tokenizer.LuceneFrenchTokenizer<br/> org.omegat.plugins.tokenizer.LuceneGermanTokenizer<br/> org.omegat.plugins.tokenizer.LuceneGreekTokenizer<br/> org.omegat.plugins.tokenizer.LucenePersianTokenizer<br/> org.omegat.plugins.tokenizer.LuceneSmartChineseTokenizer<br/> org.omegat.plugins.tokenizer.LuceneRussianTokenizer<br/> org.omegat.plugins.tokenizer.LuceneThaiTokenizer<br/> org.omegat.plugins.tokenizer.SnowballDanishTokenizer<br/> org.omegat.plugins.tokenizer.SnowballDutchTokenizer<br/> org.omegat.plugins.tokenizer.SnowballEnglishTokenizer<br/> org.omegat.plugins.tokenizer.SnowballFinnishTokenizer<br/> org.omegat.plugins.tokenizer.SnowballFrenchTokenizer<br/> org.omegat.plugins.tokenizer.SnowballGerman2Tokenizer<br/> org.omegat.plugins.tokenizer.SnowballGermanTokenizer<br/> org.omegat.plugins.tokenizer.SnowballHungarianTokenizer<br/> org.omegat.plugins.tokenizer.SnowballItalianTokenizer<br/> org.omegat.plugins.tokenizer.SnowballNorwegianTokenizer<br/> org.omegat.plugins.tokenizer.SnowballPorterTokenizer<br/> org.omegat.plugins.tokenizer.SnowballPortugueseTokenizer<br/> org.omegat.plugins.tokenizer.SnowballRomanianTokenizer<br/> org.omegat.plugins.tokenizer.SnowballRussianTokenizer<br/> org.omegat.plugins.tokenizer.SnowballSpanishTokenizer<br/> org.omegat.plugins.tokenizer.SnowballSwedishTokenizer<br/> org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Engada o argumento --ITokenizer= seguido do nome completo do tokenizer que escolleu (copiando a li&ntilde;a enteira e engadindo un espazo) ao final do comando de inicio no seu ficheiro de script de inicio de OmegaT.</p>

<p>Por exemplo, para usar o tokenizer Ingl&eacute;s (cando est&aacute; traducindo do ingl&eacute;s), o seu comando de inicio deber&aacute; ser:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>Pola contra, se est&aacute; traducindo do turco, deber&aacute; ser:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Importante: o comando completo deber&aacute; aparecer nunha soa li&ntilde;a (incluso se o programa que usa emprega unha opci&oacute;n de visualizaci&oacute;n que o mostre en d&uacute;as li&ntilde;as).</p>

<p>7. Execute este ficheiro, e OmegaT deber&iacute;a iniciarse coa funci&oacute;n tokenizer. Saber&aacute; que est&aacute; activada se as entradas do glosario se mostran incluso cando o segmento actual de OmegaT cont&eacute;n un termo nunha forma flexionada con respecto a aquela que est&aacute; presente no glosario.</p>

<p>8. Se quere usar diferentes tokenizers porque traduce dende m&aacute;is dunha lingua, deber&aacute; crear un ficheiro de script de inicio de OmegaT por cada tokenizer que desexe usar. Asigne un nome adecuado aos ficheiros de script de inicio, por exemplo, «OmegaT-EN.bat» para o ficheiro de script de inicio que cont&eacute;n o tokenizer do idioma ingl&eacute;s e «OmegaT-TR.bat» para o ficheiro que cont&eacute;n o comando co tokenizer do idioma turco. </p>

<p>9. Nalg&uacute;ns casos ver&aacute; que o tokenizer da lingua de orixe interfire co corrector ortogr&aacute;fico da lingua de destino. Pode evitar este problema especificando un tokenizer para a lingua de destino (cando haxa un dispo&ntilde;ible) empregando o argumento --ITokenizerTarget=.</p>

<p>Por exemplo, se est&aacute; traducindo do chino ao holand&eacute;s, probe:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. Despois de crear un script de inicio tal como se describe nas li&ntilde;as superiores, poder&aacute; configurar o seu sistema para que OmegaT se execute dunha forma m&aacute;is c&oacute;moda, para o cal unha boa soluci&oacute;n pode ser un atallo. Para crear un atallo en Windows:</p>

<p>Faga clic co bot&oacute;n dereito do rato no ficheiro de script de inicio (OmegaT.bat). Despois, mantendo o bot&oacute;n dereito do rato premido, arrastre o script ao lugar onde quere crear o atallo, como por exemplo ao escritorio. Cando solte o bot&oacute;n dereito, aparecer&aacute; un di&aacute;logo con varias opci&oacute;ns. Escolla «Crear un atallo aqu&iacute;».</p>
<p>Tam&eacute;n pode facer clic co bot&oacute;n dereito do rato no ficheiro de script de inicio e escoller «Enviar a» e despois «Escritorio (crear atallo)».</p>
<p>Despois de ter creado e probado o atallo, poder&aacute; engadilo ao men&uacute; Inicio arrastr&aacute;ndoo ata el.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>
