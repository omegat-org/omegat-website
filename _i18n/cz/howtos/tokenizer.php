<div class="container">

<h2>Návod OmegaT: O použití tokenizerů</h2>

<p>Tokenizer OmegaT je plugin pro OmegaT. Poskytuje v rámci OmegaT lepší výsledky pro přibližné překlady a shody s glosářem, a to určením kořenu / kmene („stemming“) slov zdrojového textu. Například rozezná ohýbaná slova v textu a zobrazí odpovídající záznam v glosáři, a to i když záznam v glosáři obsahuje neohýbanou formu slova (lemma).</p>

<h3>Příprava</h3>

<p>Před používáním tokenizeru s aplikací OmegaT se musíte nejdříve ujistit, že verze vaší OmegaT je pro toto vhodná a připravená pro použití tokenizeru.</p>

<p><strong>Verze OmegaT Webstart</strong>: tokenizer není s verzí OmegaT Webstart kompatibilní. Pokud chcete používat tokenizer, instalujte si standardní verzi OmegaT (poslední beta verzi) pro svůj systém.</p>

<p><strong>OmegaT verze 2.1.0 a starší</strong>: aktuální tokenizer není kompatibilní s těmito verzemi. (Tokenizer můžete použít s verzemi 2.0.x a 2.1.0, ale toto vyžaduje jak odlišné verze tokenizeru, tak odlišný způsob instalace.) Uživatelé by měli povýšit na nejnovější beta verzi OmegaT.</p>

<p><strong>Verze OmegaT pro Windows</strong>: aby šlo použít OmegaT (jakákoliv verze) s tokenizerem, tak musí být tento program spuštěn přes soubor spouštěcího skriptu. Soubor spouštěcího skriptu není dostupný s verzemi OmegaT pro Windows. Pokud používáte verzi pro Windows s JRE, stáhněte si soubor <a href="/resources/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a>; Pokud používáte verzi pro Windows bez JRE, stáhněte si soubor <a href="/resources/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a>. Po stažení umístěte soubor do hlavního adresáře OmegaT (adresář obsahující soubor OmegaT.jar).</p>

<p><strong>Verze bez závislosti na platformě (pod Windows)</strong>: užijte daný soubor se spouštěcím skriptem pro OmegaT (Omega.bat).</p>

<p><strong>Verze pro systémy Linux</strong>: užijte daný soubor se spouštěcím skriptem pro OmegaT (OmegaT nebo OmegaT.sh).</p>

<p>Zkontrolujte, že OmegaT se spustí, když spustíte soubor se startovacím skriptem:<br/> - Pod Linuxem, na příkazové řádce<br/> - Pod Windows, kliknutím na soubor se spouštěcím skriptem</p>


<h3>Instalace tokenizeru</h3>

<p>Po přípravě na instalaci (vizte výše), instalujte tokenizer následovně:</p>

<p>1. Stáhněte si <?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>';
$endlink='</a>';?><?php echo $link ?>archiv zip obsahující tokenizer (pro OmegaT ve verzi 2.1.1 a novější<?php echo $endlink ?>.</p>

<p>2. Rozbalte soubory tokenizeru z archivu zip.</p>

<p>3. V hlavním adresáři programu OmegaT (tj. adresář obsahující soubor OmegaT.jar), vytvořte podadresář nazvaný „plugins“, a to tehdy, pokud podadresář s tímto názvem dosud není k dispozici. Zkopírujte soubory, které jste rozbalili z archivu tokenizeru přímo do tohoto podadresáře.</p>

<p>4. Otevřete soubor se spouštěcím skriptem v textovém editoru. Uživatelé Windows (obzvláště): <strong>ne</strong>stačí jen kliknout na tento soubor. Místo toho, otevřete si textový editor (např. Poznámkový blok nebo WordPad), pak otevřete soubor se spouštěcím skriptem přes Soubor &gt; Otevřít. Může být přístupná možnost přes dialogové menu, které se zobrazí po nakliknutí souboru pravým tlačítkem myši, pak označte textový editor, ve kterém si přejete soubor otevřít.</p>

<p>5. Spouštěcí skript obsahuje příkaz ke spuštění OmegaT. Základní tvar tohoto příkazu je:</p>

<p>java -jar OmegaT.jar</p>

<p>Podle nastavení vašeho systému může být spouštěcí příkaz mírně odlišný.</p>

<p>6. vyberte tokenizer z následujícího seznamu, podle vašeho <strong>zdrojového</strong> jazyka:</p>

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

<p>Na konec spouštěcího příkazu v souboru obsahujícím váš spouštěcí skript přidejte paramter --ITokenizer= jež bude následován celým jménem tokenizeru (zkopírováním celého řádku, vložením mezery).</p>

<p>Například, když chcete použít anglický tokenizer (při překladech z angličtiny), může váš spouštěcí příkaz vypadat takto:</p>

<p>java -jar OmegaT.jar %*
--ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>Nebo když překládáte z turečtiny, může pak vypadat takto:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>Důležitá poznámka: celý příkaz musí být na jednom řádku (i když se to tu třeba zobrazuje jako dva řádky).</p>

<p>7. Spusťte tento soubor a OmegaT bude nyní spuštěna s funkcí tokenizeru. Testujeme: zkontrolujte zda záznamy v glosáři se zobrazují i když aktuální segment OmegaT obsahuje, oproti záznamu v glosáři, výraz v ohýbané formě.</p>

<p>8. Pokud chcete používat různé tokenizery, například protože překládáte z více než jednoho jazyka, vytvořte oddělené soubory OmegaT se spouštěcím skriptem zvlášť pro každý tokenizer, který chcete použít. Pojmenujte pak soubor se spouštěcím skriptem podle daného jazyka, např. „OmegaT-EN.bat“ pro spouštění souboru se spouštěcím skriptem, který dosahuje příkaz s anglickým tokenizerem a „OmegaT-TR.bat“ pro soubor se spouštěcím skriptem, který obsahuje příkaz s tureckým tokenizerem.</p>

<p>9. V některých případech se může stát, že tokenizer zdrojového jazyka se ruší s kontrolou pravopisu cílového jazyka. Tento problém můžete odstranit tak, že deklarujete tokenizer pro cílový jazyk (tam kde je dostupný), a to prostřednictvím parametru --ITokenizerTarget=.</p>

<p>Například, pokud překládáte z čínštiny do holandštiny, zkuste:</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. Po vytvoření spouštěcího skriptu, jak je to popsáno nahoře, můžete konfigurovat svůj systém tak, aby se dalo spouštět OmegaT pohodlněji, např. vytvořením zástupce. Jak vytvořit zástupce ve Windows:</p>

<p>Klikněte pravým tlačítkem myši na spouštěcí skript (OmegaT.bat), pak podržte pravé tlačítko myši stisknuté, přetáhněte skript na požadovanou pozici, např. na své pracovní ploše. Jakmile uvolníte tlačítko myši, otevře se dialogové okno s několika položkami. Vyberte položku „Vytvořit zde zástupce“.</p>
<p>Podobně můžete kliknout pravým tlačítkem myši na spouštěcí skript. Vyberte „Odeslat“, pak vyberte „Plocha (vytvořit zástupce)“.</p>
<p>Až zástupce vytvoříte a otestujete, můžete jej přidat do nabídky Start tak, že jej tam přetáhnete.</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>
