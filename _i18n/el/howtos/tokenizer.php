<div class="container">

<h2>Οδηγός τού OmegaT: Χρήση τού λεξιμεριστή τού OmegaT</h2>

<p>Ο λεξιμεριστής τού omegat είναι ένα βυσματούμενο πρόγραμμα για το OmegaT. Παρέχει περισσότερα ευρήματα από την μεταφραστική μνήμη και το γλωσσάρι τού OmegaT, αφού υπολογίζει τα θέματα/ρίζες των λέξεων. Για παράδειγμα, αναγνωρίζει τους τονισμένους τύπους μιας λέξης και εμφανίζει το σχετικό λήμμα από το γλωσσάρι, ακόμη κι αν αυτό δεν είναι τονισμένο.</p>

<h3>Προετοιμασία</h3>

<p>Προτού χρησιμοποιήσετε τον λεξιμεριστή με το OmegaT, πρέπει να βεβαιωθείτε ότι η έκδοσή σας του OmegaT είναι κατάλληλη και σωστά προετοιμασμένη.</p>

<p><strong>OmegaT έκδοση Webstart</strong>: ο λεξιμεριστής δεν είναι συμβατός με την έκδοση Webstart τού OmegaT. Αν θέλετε να χρησιμοποιήσετε τον λεξιμεριστή, εγκαταστήστε την κανονική έκδοση του OmegaT (τελευταία έκδοση beta) για το σύστημά σας.</p>

<p><strong>OmegaT έκδοση 2.1.0 και παλιότερες</strong>: ο τρέχων λεξιμεριστής δεν είναι συμβατός με αυτές τις εκδόσεις. (Ο λεξιμεριστής μπορεί να χρησιμοποιηθεί με τις εκδόσεις 2.0.x και 2.1.0, αλλά χρειάζονται άλλη έκδοση του λεξιμεριστή και άλλη διαδικασία εγκατάστασης.) Συστήνεται στους χρήστες να κάνουν αναβάθμιση στην τελευταία beta έκδοση του OmegaT.</p>

<p><strong>OmegaT εκδόσεις για Windows</strong>: για να χρησιμοποιηθεί το OmegaT (οποιαδήποτε έκδοση) με τον λεξιμεριστή, πρέπει να εκκινηθεί από ειδικό αρχείο δέσμης ενεργειών. Με τις εκδόσεις για Windows δεν παρέχεται τέτοιο αρχείο δέσμης ενεργειών. Αν χρησιμοποιείτε την έκδοση για Windows με το JRE, κατεβάστε το αρχείο <a href="/resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>. Αν χρησιμοποιείτε την έκδοση για Windows χωρίς JRE, κατεβάστε το αρχείο <a href="/resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. Μετά, βάλτε το αρχείο στον κυρίως φάκελο του OmegaT (αυτόν που περιέχει το αρχείο OmegaT.jar).</p>

<p><strong>Έκδοση για κάθε πλατφόρμα (σε Windows)</strong>: εντοπίστε το ειδικό αρχείο δέσμης ενεργειών (OmegaT.bat).</p>

<p><strong>Εκδόσεις για Linux</strong>: εντοπίστε το ειδικό αρχείο δέσμης ενεργειών (OmegaT ή OmegaT.sh).</p>

<p>Βεβαιωθείτε ότι το OmegaT εκκινείται όταν εκτελείτε την δέσμη ενεργειών:<br/>
- Σε Linux, μέσω της γραμμή εντολών<br/>
- Σε Windows, κάνοντας κλικ στο αρχείο δέσμης ενεργειών</p>


<h3>Εγκατάσταση του λεξιμεριστή</h3>

<p>Αφού ετοιμαστείτε για εγκατάσταση (βλ. παραπάνω), εγκαταστήστε τον λεξιμεριστή ως εξής:</p>

<p>1. Κατεβάστε το &lt;a href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/0.4_2-2.1/OmegaT-tokenizers_0.4_2-2.1.zip/download"&gt;πακέτο zip τού λεξιμεριστή (για OmegaT έκδοση 2.1.1 και μεταγενέστερες)&lt;/a&gt;.<?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>';
$endlink='</a>';?>
<?php echo $link ?>tokenizer zip package (for OmegaT version 2.1.1 and later)<?php echo $endlink ?>.</p>

<p>2. Αποσυμπιέστε τα αρχεία τού πακέτου zip τού λεξιμεριστή.</p>

<p>3. Στον κυρίως φάκελο του OmegaT (εκείνον που περιέχει το αρχείο OmegaT.jar) δημιουργήστε έναν υποφάκελο με όνομα "plugins" —αν δεν υπάρχει ήδη τέτοιος υποφάκελος. Αντιγράψτε τα αρχεία που αποσυμπιέσατε από το πακέτο τού λεξιμεριστή κατευθείαν στον υποφάκελο αυτόν.</p>

<p>4. Ανοίξτε το αρχείο δέσμης ενεργειών σε επεξεργαστή κειμένου. Χρήστες Windows (ειδικά): <strong>μην</strong> κάνετε απλώς κλικ στο αρχείο. Εκκινήστε έναν επεξεργαστή κειμένου (όπως Notepad ή Wordpad) και ανοίξτε το αρχείο δέσμης ενεργειών από το Αρχείο &gt; Άνοιγμα. Ίσως είναι δυνατόν να κάνετε δεξιό κλικ στο αρχείο και να επιλέξετε με ποιον επεξεργαστή κειμένου θέλετε να το ανοίξετε.</p>

<p>5. Το αρχείο δέσμης ενεργειών περιέχει την εντολή εκκίνησης του OmegaT. Η βασική μορφή αυτής της εντολής είναι:</p>

<p>java -jar OmegaT.jar</p>

<p>Ανάλογα με την διαμόρφωση του συστήματός σας, η εντολή εκκίνησης ίσως διαφέρει.</p>

<p>6. Επιλέξτε έναν λεξιμεριστή από την ακόλουθη λίστα, ανάλογα με την γλώσσα <strong>αφετηρίας</strong> σας:</p>

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

<p>Προσθέστε το όρισμα --ITokenizer= ακολουθούμενο από το πλήρες όνομα του λεξιμεριστή (αντιγράφοντας όλη την γραμμή και προσθέτοντας ένα κενό) στο τέλος τής εντολής εκκίνησης, στο ειδικό αρχείο δέσμης ενεργειών τού OmegaT.</p>

<p>Για παράδειγμα, για να χρησιμοποιήσετε τον αγγλικό λεξιμεριστή (όταν μεταφράζετε από την Αγγλική), η εντολή εκκίνησης μπορεί να είναι:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>Αν μεταφράζετε από την Ελληνική, μπορεί να είναι:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneGreekTokenizer</p>

<p>Σημαντικό: ολόκληρη η εντολή πρέπει να καταλαμβάνει μία γραμμή (ακόμη κι αν εμφανίζεται σε δύο γραμμές στην οθόνη σας).</p>

<p>7. Εκτελέστε το αρχείο και το OmegaT πρέπει να εκκινηθεί διαθέτοντας την λειτουργία λεξιμερισμού. Για να την δοκιμάσετε, ελέγξτε αν εμφανίζονται λήμματα από το γλωσσάρι ακόμη κι όταν το τρέχον τεμάχιο περιέχει έναν όρο σε πτώση διαφορετική από εκείνη που έχει καταχωριστεί στο γλωσσάρι.</p>

<p>8. Αν επιθυμείτε να χρησιμοποιείτε περισσότερους από έναν λεξιμεριστές, επειδή μεταφράζετε από περισσότερες από μία γλώσσες, δημιουργήστε χωριστά αρχεία δέσμης ενεργειών για την εκκίνηση του OmegaT, ένα για κάθε γλώσσα αφετηρίας. Ονομάστε τα αρχεία δέσμης ενεργειών καταλλήλως, για παράδειγμα "OmegaT-EN.bat" για το αρχείο δέσμης ενεργειών με τον αγγλικό λεξιμεριστή και "OmegaT-EL.bat" για το αρχείο δέσμης ενεργειών με τον ελληνικό λεξιμεριστή.</p>

<p>9. Σε ορισμένες περιπτώσεις, ίσως διαπιστώσετε ότι ο λεξιμεριστής τής γλώσσας αφετηρίας επηρεάζει τον ορθογραφικό έλεγχο της γλώσσας αφίξεως. Μπορείτε να εξαλείψετε το πρόβλημα ορίζοντας έναν λεξιμεριστή και για την γλώσσα αφίξεως (αν διατίθεται), με το όρισμα --ITokenizerTarget=.</p>

<p>Για παράδειγμα, αν μεταφράζετε από την Κινεζική στην Ολλανδική, δοκιμάστε την εντολή:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. Αφού δημιουργήσετε μια δέσμη ενεργειών όπως περιγράφηκε παραπάνω, μπορείτε να διαμορφώσετε το σύστημά σας ώστε το OmegaT να εκκινείται ευκολότερα, για παράδειγμα δημιουργώντας μια συντόμευση. Για να δημιουργήσετε μια συντόμευση σε Windows:</p>

<p>Κάντε δεξιό κλικ στο αρχείο δέσμης ενεργειών (OmegaT.bat) και, κρατώντας το κουμπί τού ποντικιού πατημένο, σύρτε το αρχείο στην επιφάνεια εργασίας ή σε άλλη, βολικότερη θέση. Όταν σταματήσετε να πατάτε το δεξιό κουμπί, εμφανίζεται ένα πλαίσιο διαλόγου με διάφορες επιλογές. Κάντε κλικ στην επιλογή "Δημιουργία συντομεύσεων εδώ".</p>
<p>Εναλλακτικά, κάντε δεξιό κλικ στο αρχείο δέσμης ενεργειών. Επιλέξτε "Αποστολή προς" και μετά "Επιφάνεια εργασίας (δημιουργία συντόμευσης)".</p>
<p>Αφού δημιουργήσετε και δοκιμάσετε την συντόμευση, μπορείτε να την προσθέσετε στο μενού Έναρξη σέρνοντάς την εκεί.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>
