<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, lo strumento gratuito per memorie di traduzione</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta name="keywords" content="memoria di traduzione, translation memory, TM, traduzione assistita da computer, computer-aided translation, computer-assisted translation, CAT, GPL, open source" />

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css" />

</head>



<?php include '../../config/versions.txt'; ?>



<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>Lo strumento gratuito (GPL) per memorie di traduzione</p>

</div>

<div id="content">

<h2>Guida di OmegaT: tradurre OmegaT nella propria lingua</h2>


<h3>Traduzione: osservazioni generali</h3>


<p>Il termine "noi" qui di seguito si riferisce al gruppo di progetto di OmegaT. Il gruppo di progetto di OmegaT non è una società o una persona giuridica formale, ma solo un gruppo di volontari coinvolti nel progetto OmegaT.</p>


<p>OmegaT è un programma per memoria di traduzione gratuito e open source. L'interfaccia utente e la documentazione erano in origine scritti in inglese. Dato che il programma è concepito per i traduttori di tutto il mondo, e non solo dei paesi di lingua anglosassone, è opportuno che la documentazione e, se possibile, lo stesso programma, siano disponibili in altre lingue. Tuttavia, siccome il programma viene offerto e non venduto commercialmente, non ci sono risorse per pagare le traduzioni. Quelli che sono coinvolti nel progetto OmegaT, al contrario, sperano che le traduzioni vengano fornite innanzitutto da traduttori che hanno provato il programma e si sono convinti del suo valore per l'intera comunità di traduzione.</p>


<h3>Il lavoro di traduzione</h3>


<p>Al momento della scrittura, il materiale da tradurre è composto da:</p>


<p>

* L'interfaccia utente (menu, ecc.)<br/> * Il manuale dell'utente (molto completo)<br/> * La guida di "avvio rapido" (breve introduzione all'utilizzo di OmegaT)<br/> * Il file readme (documento che contiene informazioni generali su OmegaT)<br/> * Le pagine web di OmegaT (probabilmente dove stai leggendo queste righe)

</p>


<p>I traduttori sono liberi di tradurre quanto vogliono. In particolare, il manuale principale dell'utente prende almeno due settimane per la traduzione, e diversi traduttori potrebbero desiderare di condividere il lavoro.</p>

<h3>Procedura</h3>

<p>1. Contattare il <a href="mailto:jean.christophe.helary@gmail.com">coordinatore della localizzazione</a>, che sarà in grado di segnalarvi eventuali problemi specifici della lingua scelta.</p>


<p>2. Partecipare al <a href="http://tech.groups.yahoo.com/group/omegat/">Gruppo di utenti di OmegaT</a> (conosciuto anche come "OmT"). Durante il processo di iscrizione, si dovrà inviare un breve messaggio ai moderatori del gruppo: questo consente loro di distinguere gli utenti genuini dai cosiddetti spammer.</p>

<p>Dopo l'adesione, visitare il <a href="http://tech.groups.yahoo.com/group/omegat/database">Piano di localizzazione di OmegaT</a>. Questo piano mostra quale lavoro di traduzione e localizzazione è già stato fatto su OmegaT, e quale lavoro è attualmente in corso. Se una parte di lavoro che si ritiene affrontabile, per la lingua scelta, non è ancora stata iniziata, è possibile segnarla nel piano, in modo da indicare che ci si è fatti carico della responsabilità. Lo scopo del piano è quello di prevenire che due o più traduttori lavorino sulla stessa traduzione senza saperlo (doppio lavoro). <strong>Per evitare che due o più traduttori lavorino allo stesso tempo sulla stessa lingua, è quindi molto importante segnarsi nel piano di localizzazione quando si inizia a lavorare su una traduzione.</strong></p>

<p>3. Anche se non essenziale, è consigliabile anche iscriversi alla <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">mailing list dei localizzatori di OmegaT</a> (conosciuta pure come "OmT-l10n").</p>

<p>4. Scaricare i file per la traduzione, o il <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Full.zip"
>'; $endlink='</a>';?> <?php echo $link ?>pacchetto "Full" (completo)<?php echo $endlink ?> o quello <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Minimal.zip"
>'; $endlink='</a>';?> <?php echo $link ?>"Minimal" (minimo)<?php echo $endlink ?>.</p>

<p>Il pacchetto completo contiene il manuale utente, il manuale di avvio rapido, il corredo di risorse dell'interfaccia utente e il file readme (leggimi). Il pacchetto minimo contiene gli stessi file del pacchetto completo, fatta eccezione per il manuale principale dell'utente. Non è necessario tradurre un pacchetto completo; è possibile, ad esempio, tradurre solo l'interfaccia utente (bundle), o soltanto la guida di avvio rapido.</p>

<p>Se si vogliono tradurre le pagine web di OmegaT, scaricare il <a href="/resources/omt_website.zip">pacchetto di localizzazione del sito Web</a>. (Nota: questi sono i file inglesi. Se si preferisce tradurre da una lingua diversa in cui OmegaT è già stato localizzato, contattare il <a href="mailto:mailto:lin4trans@users.sourceforge.net">webmaster di OmegaT</a>.)</p>

<p>Il sito di OmegaT include file in formato HTML e, dal 2011, in PHP. Per tradurre quest'ultimo in OmegaT, è necessario registrare l'estensione .php con il filtro HTML e XHTML come segue:</p>

<p>Andare in Opzioni &gt; Filtri dei file... &gt; scegliere "file XTML e  XHTML" &gt; Modifica &gt; Aggiungi &gt; quindi scrivere "*.php" nella colonna "Modello del nome del file sorgente".</p>

<p>5. Potrebbero essere disponibili vecchie versioni delle memorie di traduzione (file TMX) e, o in alternativa, della documentazione per la lingua scelta, utili per la traduzione. I file di memoria di traduzione (TMX) delle precedenti localizzazioni di OmegaT, la documentazione e il sito sono reperibili nella <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">sezione "Files" del gruppo di utenti in linea</a>. Vale anche la pena chiedere nella <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista dei localizzatori</a> (OmT-l10n) se qualcuno ha del materiale di riferimento che potrebbe facilitare la traduzione.</p>

<p>6. Tradurre i file scelti. Inutile dire che preferiremmo che, per la localizzazione di OmegaT, si usasse lo stesso OmegaT. È possibile, tuttavia, utilizzare altri software, se si preferisce.</p>

<p>Decomprimere l'archivio zip del pacchetto completo o minimo scaricato. Una volta decompresso, i file per la localizzazione del programma sono un progetto OmegaT pronto all'uso. Non è necessario creare un progetto OmegaT come si dovrebbe normalmente fare.</p>

<p>Il metodo di traduzione è totalmente libero. Si può modificare, correggere, aggiungere o eliminare informazioni, a propria discrezione. Se si hanno domande, la <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">lista OmT-l10n</a> è il posto migliore per formularle.</p>

<p>Se il documento che si sta traducendo lo contiene, si prega di <strong>non</strong> tradurre la licenza GPL (GNU Public License) o GFDL (GNU Free Documentation License). In primo luogo, perché solo l'originale inglese è legalmente valido. Una traduzione può anche essere fornita per informazione, ma non ha alcuna validità giuridica. In secondo luogo, a meno che il proprio linguaggio non sia molto raro, entrambi i documenti con buona probabilità già sono stati tradotti. Eseguire una ricerca nel web, probabilmente si troveranno le traduzioni.</p>

<p>È importante mantenere la traduzione dei file nel loro formato originale. Se si utilizza OmegaT, la formattazione viene mantenuta automaticamente. Siamo grati per tutte le traduzioni, ma se i file venissero restituiti nello stesso formato (e non, per esempio, come file di Word) ciò semplificherebbe notevolmente il nostro lavoro.</p>

<p>7. Collaudare la propria traduzione (facoltativo).</p>

<p>Per collaudare l'interfaccia utente:</p>

<p>Avviare OmegaT da riga di comando (finestra MS-DOS) con i comandi seguenti (se non è sicuri di come eseguire l'operazione, consultare il manuale utente di OmegaT)</p>

<p>&nbsp; &nbsp; &nbsp;cd [percorso completo a OmegaT]<br/> &nbsp; &nbsp; &nbsp;java -jar OmegaT.jar resource-bundle=[nome del gruppo con il percorso completo]</p>

<p>dove [percorso completo di OmegaT] è il percorso completo della cartella contenente il programma di OmegaT e [nome del gruppo con il percorso completo] è il nome della traduzione del gruppo delle risorse (bundle_en.properties, a meno che si abbia cambiato il nome), incluso il percorso completo alla sua posizione.</p>

<p>Per verificare l'aspetto della Guida rapida all'avvio:</p>

<p>Nella cartella /docs/ del programma OmegaT, creare una sottocartella con il codice ISO della lingua del proprio sistema operativo (rinominare la cartella esistente temporanea, se già esiste) e copiare il manuale in questa cartella. Avviare poi normalmente OmegaT (se si è tradotto in una lingua che non è quella del sistema operativo, vedere sotto, "Come OmegaT gestisce le versioni localizzate").</p>

<p>8. Produrre una schermata di OmegaT nella propria lingua. Anche questa procedura è facoltativa, ma se si è stati in grado di avviare OmegaT col proprio pacchetto localizzato (vedere sopra), essa migliorerà la qualità della traduzione. Per catturare una schermata, avviare OmegaT e crearne una adatta per la cattura, come la finestra di dialogo "Crea nuovo progetto", che mostra i percorsi tipici.</p>

<p>Scegliere il file di tipo .png</p>

<p>Dare un nome all'immagine Nuova_immagine.png</p>

<p>9. Consegnare il file al coordinatore della localizzazione, che lo passerà alla squadra degli sviluppatori per l'inclusione nel prossimo rilascio di OmegaT. Se si è utilizzato OmegaT o un altro strumento CAT per il lavoro, inviare anche la memoria di traduzione (file TMX) assieme alla traduzione. Questo semplificherà notevolmente l'aggiornamento della propria traduzione in futuro. NON consegnare l'intero file di progetto OmegaT al coordinatore della localizzazione (non ha bisogno di ricevere più copie dell'intero progetto). Creare piuttosto due file. zip o tar.gz, uno contenente solo i documenti di destinazione e l'altro contenente i file tmx.&lt;/p&gt;</p>

<p>10. Non dimenticare di aggiornare il piano di localizzazione di OmegaT (si veda il passaggio due della procedura) per mostrare che è stata completata la traduzione di una particolare versione o di un documento. Allo stesso modo, se si abbandona il lavoro di traduzione per qualsiasi motivo, si prega di aggiornare la propria voce nel piano, in modo che rifletta la nuova situazione. Ciò consente a un altro traduttore di rilasciare il documento in questione ai fini della traduzione. Se ci si ferma prima di completare la traduzione, raccomandiamo di creare i file .tmx per il lavoro già fatto e di inviarli al coordinatore della localizzazione.&lt;/p&gt;</p>

<p>11. Se si utilizza OmegaT (noi speriamo sia così) o qualsiasi altro strumento CAT per produrre la traduzione, raccomandiamo anche di caricare i file TMX nel <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">deposito</a>.</p>

<h3>Come OmegaT gestisce le versioni localizzate</h3>

<p>Al momento della scrittura, OmegaT rileva la lingua del sistema operativo che si sta utilizzando. Quindi carica l'interfaccia utente e, oppure, il manuale dell'utente in quella lingua, se disponibile. Se l'interfaccia utente, o il manuale, non è disponibile nella lingua del proprio sistema operativo, le impostazioni predefinite di OmegaT sono quelle di visualizzare la versione in inglese.</p>

<p>Se OmegaT contiene una versione di lingua che si preferirebbe utilizzare ma non è la lingua del proprio sistema operativo, è possibile forzare OmegaT a utilizzare tale versione, modificando il comando di avvio. Il comando di avvio si trova nel file "omegat" e, o in alternativa, "omegat.bat", all'interno della cartella che contiene il programma. Il comando normale è: </p>

<p>&nbsp; &nbsp; &nbsp;java -jar OmegaT.jar</p>

<p> Cambiarlo aggiungendo l'opzione di lingua utente e il codice della lingua corrispondente, ad esempio nel caso seguente per l'italiano:</p>

<p> &nbsp; &nbsp; java -Duser.language=it -jar OmegaT.jar</p>

<h3>Problemi di copyright</h3>

<p>La maggior parte della documentazione OmegaT è concessa in licenza per il riutilizzo sotto la GNU Public License (GPL) o GNU Free Documentation License (GFDL). Le pagine web non sono concesse in licenza per il riutilizzo. Niente di tutto questo ha importanza, a meno che non si è particolarmente interessati a problemi di copyright. Si verrà accreditati come autori del proprio lavoro e nominati detentori congiunti del copyright.&lt;/p&gt;</p>

<p>Copyright Marc Prior 2009-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="Logo di SourceForge.net" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML" /></a>
	</div>

</div>

</body></html>
