<div class="container">

<h2>Guida di OmegaT: Usare il tokenizer per OmegaT</h2>

<p>Omegat Tokenizer è un plugin per OmegaT. Esso fornisce migliori concordanze parziali e del glossario in OmegaT, basandosi sulla elaborazione delle radici ("stemming") delle parole da tradurre. Ad esempio, riconoscerà parole flesse nei testi e visualizzerà la corrispondente voce di glossario, anche se la voce di glossario contiene solo la forma non flessa di una parola.</p>

<h3>Preparazione</h3>

<p>Prima di utilizzare il tokenizer con OmegaT, è necessario assicurarsi che la versione di OmegaT sia adatta e pronta per l'uso di tale plugin.</p>

<p><strong>Versione WebStart di OmegaT</strong>: il tokenizer non è compatibile con la versione Webstart di OmegaT. Se si desidera utilizzare il tokenizer, installare la versione standard di OmegaT (ultima versione beta) per il proprio sistema.</p>

<p><strong>OmegaT versione 2.1.0 e precedenti</strong>: l'attuale tokenizer non è più compatibile con queste versioni (il tokenizer può essere utilizzato con le versioni 2.0. x e 2.1.0, ma richiede una versione diversa del tokenizer, così come una procedura di installazione diversa). Consigliamo agli utenti di aggiornare all'ultima versione beta di OmegaT.</p>

<p><strong>Versioni per Windows di OmegaT</strong>: per usare il tokenizer con OmegaT (qualsiasi versione) occorre un apposito file script di avvio. Tale file script di avvio non viene fornito con le versioni di OmegaT per Windows. Se si utilizza la versione di Windows con JRE, scaricare il file <a href="/resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>; per la versione di Windows senza JRE, scaricare invece il file <a href="/resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. Dopo lo scaricamento, inserire il file nella cartella principale di OmegaT (la cartella contenente il file OmegaT.jar, per esempio C:\Programmi\OmegaT).</p>

<p><strong>Versione di OmegaT multi-piattaforma (su Windows)</strong>: individuare il file script di avvio di OmegaT (OmegaT.bat).</p>

<p><strong>Versioni/sistemi Linux</strong>: individuare il file script del lancio di OmegaT (OmegaT o OmegaT.sh).</p>

<p>Controllare che OmegaT si avvii regolarmente quando si esegue il file script di avvio: <br/> - Su Linux, sulla riga di comando <br/> - Su Windows, facendo clic sul file script di avvio</p>


<h3>Installare Tokenizer</h3>

<p>Dopo la preparazione per l'installazione (vedere sopra), installare il tokenizer come segue:</p>

<p>1. Scaricare il <?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>pacchetto zip del tokenizer (per OmegaT versione 2.1.1 e successive)<?php echo $endlink ?>.</p>

<p>2. Decomprimere i file dal pacchetto zip del tokenizer.</p>

<p>3. Creare nella cartella principale del programma OmegaT (cioè quella contenente il file OmegaT.jar), una sottocartella chiamata "plugins", se già non ne esiste una con tale nome. Copiare i file del pacchetto tokenizer decompresso direttamente in questa sottocartella.</p>

<p>4. Aprire il file script di avvio (per esempio OmegaT_without_JRE.bat) in un editor di testo. Per gli utenti di Windows (in particolare): <strong>non</strong> basta fare clic su questo file. Avviare invece un editor di testo (tipo Notepad o Wordpad), quindi, con File &gt; Apri, aprire il file di script di avvio. Si può anche fare clic sul file col pulsante destro del mouse, quindi 'Apri con' e selezionare un editor di testo per aprirlo.</p>

<p>5. Il file script di avvio contiene il comando di avvio di OmegaT. La forma base del comando è:</p>

<p>java -jar OmegaT.jar</p>

<p>A seconda della configurazione del sistema, il comando di avvio potrebbe essere leggermente diverso.</p>

<p>6. Scegliere un tokenizer dal seguente elenco, in base alla lingua di <strong>origine</strong>:</p>

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

<p>Aggiungere l'argomento --ITokenizer = seguito dal nome completo di questo tokenizer (copiando l'intera riga, inserendo uno spazio) alla fine del comando di avvio all'interno del proprio file di script di avvio di OmegaT.</p>

<p>Ad esempio, per utilizzare il tokenizer inglese (quando si traduce dall'inglese), il comando di avvio potrebbe dunque essere:</p>

<p>java -jar OmegaT.jar %*
--ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>O se si sta traducendo dal turco, potrebbe essere:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Importante: questo comando tutto deve stare su una sola riga (anche se appare su due righe nello schermo in cui stai leggendo queste frasi).</p>

<p>7. Eseguire questo file: OmegaT ora dovrebbe avviarsi con la funzione tokenizer. Per verificare, controllare se le voci di glossario vengono visualizzate anche quando il segmento di OmegaT corrente contiene un termine in una forma flessa del termine contenuto nel glossario.</p>

<p>8. Se si desidera utilizzare diversi tokenizer perché si traduce da più lingue, creare un file di script di avvio di OmegaT specifico per ogni tokenizer che si desidera utilizzare. Denominare i file script di avvio in modo appropriato, ad esempio "OmegaT-EN.bat" per il file di script di avvio che contiene il comando con il tokenizer inglese e "OmegaT-TR.bat" per il file di script di avvio che contiene il comando con il tokenizer turco.</p>

<p>9. In alcuni casi, può succedere che il tokenizer per la lingua di origine interferisca con il correttore ortografico della lingua di destinazione. È possibile eliminare questo problema specificando un tokenizer anche per la lingua di destinazione (dove disponibile), con l'argomento --ITokenizerTarget=.</p>

<p>Ad esempio, se si sta traducendo dal cinese all'olandese, provare:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. Dopo aver creato uno script di avvio come descritto sopra, è possibile configurare il sistema affinché OmegaT sia avviato in modo più comodo, per esempio mediante la creazione di un collegamento. Per creare un collegamento in Windows:</p>

<p>Fare clic col pulsante destro del mouse sullo script di avvio (OmegaT.bat), poi, mentre lo si tiene premuto, trascinare lo script nella posizione desiderata, ad esempio sul desktop. Quando si rilascia il pulsante destro si apre una finestra di dialogo con varie opzioni. Scegliere "Crea collegamenti qui".</p>
<p>In alternativa, fare clic col destro sullo script di avvio. Selezionare: "Invia a" poi "Desktop (Crea collegamento)".</p>
<p>Dopo la creazione e il controllo del collegamento, lo si può aggiungere al menu Start trascinandovelo sopra.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>
