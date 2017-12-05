<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, svobodný nástroj využívající technologie překladových pamětí</title>
  <meta name="generator" content="screem 0.10.2"/>
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  
  <meta name="keywords" content="translation memory, TM, computer-aided translation, computer-assisted translation, překladová paměť, TM, překlad podporovaný počítačem, CAT, GPL, open source"/>

  
<link rel="stylesheet" type="text/css" href="../../config/howto.css"/>

</head>

<?php include '../../config/versions.txt'; ?>

<body>

<div id="container">
			
<div id="banner">

<h1>O aplikaci OmegaT</h1>

<p>Svobodný (GPL) nástroj využívající technologie překladových pamětí </p>

</div>

<div id="content">

<h2>Návod OmegaT: Překlad OmegaT do vašeho jazyka</h2>


<h3>Překlad: všeobecné poznámky</h3>


<p>„My“ v následujícím textu označuje tým projektu OmegaT. Tým projektu OmegaT není společnost nebo formální právní subjekt, jen skupina dobrovolníků podílejících se na projektu OmegaT.</p>


<p>OmegaT je svobodný, open-source program využívající technologie překladové paměti. Uživatelské rozhraní a dokumentace byli původně napsané v angličtině. Program je určený pro překladatele na celém světě a ne jen v anglicky mluvících zemích, proto je vhodné aby dokumentace (a podle možností i samotný program) byli dostupné i v jiných jazycích. Protože je program poskytován zdarma a není komerčně prodáván, nejsou k dispozici žádné zdroje na platby za překlady. Ti, kteří se podílejí na projektu OmegaT spíše doufají, že překlady poskytují nejprve a především překladatelé, kteří již vyzkoušeli aplikaci OmegaT a jsou přesvědčeni o její hodnotě pro překladatelskou komunitu jako celek.</p>


<h3>Překladatelská práce</h3>


<p>V době psaní tohoto textu obsahuje materiál, který je potřebné přeložit, tyto části:</p>


<p>* Uživatelské rozhraní (menu atd.)<br/> * Uživatelská příručka (velmi obsáhlá)<br/> * Stručný průvodce „Instant start“ (krátký úvod k používání OmegaT)<br/> * Soubor čtimě (readme) (dokument, který obsahuje všeobecné informace o OmegaT)<br/> * Webové stránky OmegaT (pravděpodobně je právě čtete online)</p>


<p>Překladatelé mohou přeložit z této práce tolik, kolik si k překladu vyberou.  Zejména pak překlad hlavní uživatelské příručky zabere přibližně dva týdny, je tudíž možné práci rozdělit mezi několika překladateli.</p>

<h3>Postup</h3>

<p>1. Kontaktujte <a href="mailto:jean.christophe.helary@gmail.com">koordinátora lokalizací</a>, který vás může informovat o specifických záležitostech týkajících se Vašeho jazyka. </p>


<p>2. Přidejte se k <a href="http://tech.groups.yahoo.com/group/omegat/">uživatelské skupině OmegaT</a> (známé též jako „OmT“). Během procesu registrace budete muset poslat krátkou zprávu skupině moderátorů: to je proto, aby mohli odlišit skutečné uživatele od spamerů.</p>

<p>Až se připojíte, navštivte Lokalizační plán <a href="http://tech.groups.yahoo.com/group/omegat/database">OmegaT Localization Plan</a>. Tento plán ukazuje jaká překladatelská/lokalizační práce už byla pro OmegaT učiněna, a jaká práce právě probíhá. Pokud pro Váš jazyk ještě nebyl započatý vhodný kus práce, můžete provést v plánu záznam, abyste ukázali, že jste za ni převzali odpovědnost. Účelem plánu je předejít tomu, aby dva nebo více překladatelů pracovali na stejném překladu bez toho, aby si toho byli vědomi (duplikace úsilí). <strong>Jakmile začnete pracovat na překladu, je velmi důležité, abyste udělali záznam v lokalizačním plánu, aby se tak předešlo, že by dva či více překladatelů pracovalo ve stejném čase na stejném jazyce.</strong></p>

<p>3. I když to není nutné, přesto doporučujeme, aby jste se též přihlásili do <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">emailové konference lokalizátorů OmegaT</a> (známé též jako &quot;OmT-l10n&quot;)</p>

<p>4. Stáhněte si soubory na překlad, buď <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Full.zip"
>';
$endlink='</a>';?><?php echo $link ?>„plný“ („Full“) balík<?php echo $endlink ?> nebo <?php $link='<a
href="http://sourceforge.net/projects/omegat/files/Other%20-%20Localization%20projects/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_L10N_Minimal.zip"
>';
$endlink='</a>';?><?php echo $link ?>„minimální“ („Minimal“) balík<?php echo $endlink ?>.</p>

<p>Plný balík obsahuje uživatelskou příručku, rychlou úvodní příručku, zdrojový balíček uživatelského rozhraní a soubor čtimě (readme). Minimální balík obsahuje stejné soubory jako plný balík, mimo hlavní uživatelskou příručku. Nemusíte překládat celý balík; můžete například přeložit jen uživatelské rozhraní (Bundle.properties), nebo jen stručný úvodní tutoriál.</p>

<p>Pokud chcete překládat webové stránky OmegaT, stáhněte si <a href="/files/omt_website.zip">lokalizační balík webové prezentace</a>. (Poznámka: toto jsou anglické soubory. Pokud upřednostňujete překlad z jiného jazyka, do kterého byla aplikace OmegaT již lokalizována, prosím kontaktujte <a href="mailto:mailto:lin4trans@users.sourceforge.net">webmastera OmegaT</a>).</p>

<p>Webová prezentace OmegaT obsahuje soubory ve formátu HTML a od roku 2011 také v PHP. Aby šlo překládat PHP v OmegaT, musíte registrovat koncovkku .php ve filtru XHTML následovně:</p>

<p>Možnosti &gt; Filtry souborů &gt; vyberte „Soubory XHTML“ &gt; Editovat... &gt; Přidat... &gt; pak vložte „*.php“ do pole „Vzor názvu zdrojového souboru“.</p>

<p>5. K dispozici mohou být starší verze dokumentace anebo překladových pamětí (souborů TMX) pro Váš jazyk, které by byly užitečné pro Váš překlad. Soubory s překladovou pamětí (TMX) starších lokalizací OmegaT, dokumentaci a webovou prezentaci nejdete v části <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">„Files“ („Soubory“) v online uživatelské skupině</a>. Stojí za to zeptat se v <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">konferenci pro překladatele lokalizátory</a> (OmT-l10n), zda-li někdo nemá nějaký referenční materiál, který by mohl ulehčit Váš překlad.</p>

<p>6. Přeložte soubory, které jste si vybrali. Není třeba připomínat, že bychom byli raději, kdyby jste pro práci na lokalizaci OmegaT používali právě OmegaT. Ale pokud chcete, můžete použít i jiný program.</p>

<p>Rozbalte archívy zip plného nebo minimálního balíku, který jste si stáhli. Když jsou rozbalené, soubory pro lokalizaci programu OmegaT představují projekt OmegaT připravený na použití. Nepotřebujete tedy vytvářet projekt OmegaT, jak byste to normálně dělali.</p>

<p>Máte úplnou svobodu v tom, jak překládáte. Můžete upravovat, opravovat, přidávat nebo mazat informace podle svého vlastního uvážení. Pokud máte nějaké otázky, <a href="https://lists.sourceforge.net/lists/listinfo/omegat-l10n">konference OmT-l10n</a> je to nejlepší místo, kde se zeptat.</p>

<p>Pokud dokument, který překládáte, obsahuje text licence GPL (GNU Public License) nebo GFDL (GNU Free Documentation License) <strong>ne</strong>překládejte tyto licence. V první řadě je totiž legálně platná jen původní anglická verze. Pro informaci lze poskytovat překlad, ale tento pak nemá žádnou legální platnost. A ve druhé řadě, pokud Váš jazyk není velmi nevšední, tak byly oba dokumenty s velkou pravděpodobností již přeloženy. Prohledejte web a nějaký překlad jistě naleznete.</p>

<p>Prosím ponechejte překlady souborů v jejich původním formátu. Pokud používáte OmegaT bude formátování automaticky zachováno. Jsme vděční za všechny překlady, ale značně nám zjednoduší práci skutečnost, když budou soubory odevzdávané ve stejném formátu (a ne např. jako soubory Wordu).</p>

<p>7. Otestujte svůj překlad (volitelné)</p>

<p>Postup jak testovat uživatelské rozhraní:</p>

<p>Spusťte OmegaT z příkazové řádky (okno MS-DOS) prostřednictvím následujících příkazů (pokud si nejste v této oblasti jisti, podívejte se do příručky OmegaT)</p>

<p>     cd [full path to OmegaT]<br/> java -jar OmegaT.jar resource-bundle=[jméno balíčku s celou cestou]</p>

<p>kde [celá cesta k OmegaT] je celá cesta k adresáři obsahující program OmegaT, a [jméno balíčku s celou cestou] je jméno všeho překladu zdrojového balíčku (soubor „bundle“ s lokalizací, např. bundle_cs.properties, pokud jste tedy neměnili jméno) včetně celé cesty k lokalizaci.</p>

<p>Pro testování zobrazení úvodního průvodce po spuštění:</p>

<p>V adresáři programu OmegaT /docs/ vytvořte podadresář s ISO kódem jazyka vašeho operačního systému (pokud tam již takový adresář je, přejmenujte jej dočasně na dobu testování), a zkopírujte příručku do tohoto adresáře. Pak spusťte OmegaT běžným  způsobem. (Pokud jste překládali do jazyka, který není jazykem vašeho operačního systému, vizte bod níže „Jak OmegaT zachází s lokalizovanými verzemi“.)</p>

<p>8. Jak vytvořit snímek obrazovky OmegaT ve vašem jazyce. Toto je také volitelný krok (a jen když se vám podařilo spustit OmegaT s vaší lokalizací, vizte výše), ale když se vám toto daří zprovoznit, bude kvalita vašeho překladu ještě lepší. Když budete chtít vytvořit snímek obrazovky, spusťte OmegaT a nastavte kýženou obrazovku pro snímek obrazovky, jako např. „Vytvořit nový projekt“, které ukazuje typické cesty projektu.</p>

<p>Vyberte typ souboru .png</p>

<p>Pojmenujte soubor NovySoubor.png</p>

<p>9. Odevzdejte soubor koordinátorovi lokalizací, který jej dále předá vývojářskému týmu, aby se dostal do následujícího vydání OmegaT. Pokud jste pro práci použili aplikaci OmegaT, nebo jiný CAT nástroj, prosím pošlete spolu s překladem i Vaši překladovou paměť (soubor TMX). Do budoucna to totiž velmi zjednoduší aktualizaci Vašeho překladu. Prosím NEodevzdávejte celý projekt OmegaT koordinátorovi lokalizací (nepotřebuje dostávat několik kopií celého projektu). Raději vytvořte dva oddělené archivy, buď .zip nebo tar.gz, jeden, který obsahuje cílové soubory a druhý, který obsahuje soubory TMX.</p>

<p>10. Nezapomeňte aktualizovat Lokalizační plán OmegaT (vizte krok 2) abyste ukázali, že překlad daného dokumentu / verze je dokončen. Stejně tak, když z jakéhokoliv důvodu ukončíte práci na překladu, prosím aktualizujte svou položku v plánu, aby na toto poukazovala. Je pak možno uvolnit daný dokument pro překlad jinému překladateli. Pokud na překladu již nebude pokračovat a projekt není kompletně přeložen, prosím vytvořte překladovou paměť TMX obsahující dosavadní překlad a pošlete ji koordinátorovi lokalizace.</p>

<p>11. Pokud k vyhotovení svého překladu používáte OmegaT (doufáme, že ano) nebo jiný nástroj CAT, prosím také nahrajte do <a href="http://tech.groups.yahoo.com/group/OmegaT/files/3- Localization files/Translation memory repository/">repozitáře</a> i soubory TMX.</p>

<h3>Jak OmegaT zachází s lokalizovanými verzemi</h3>

<p>V době psaní tohoto textu, detekuje OmegaT jazyk operačního systému, který používáte. Potom načte uživatelské rozhraní anebo uživatelskou příručku v tomto jazyce, pokud je k dispozici. Když uživatelské rozhraní nebo uživatelská příručka nejsou k dispozici v jazyce vašeho operačního systému, výchozí nastavení OmegaT zobrazí anglickou verzi.</p>

<p>Pokud OmegaT obsahuje verzi jazyka, kterou byste chtěli používat, ale není jazykem Vašeho operačního systému, můžete aplikaci OmegaT přinutit k tomu, aby použila požadovanou verzi změnou spouštěcího příkazu. Spouštěcí příkaz naleznete v souboru „omegat“ anebo „omega.bat“ v adresáři, který obsahuje aplikaci. Standardní příkaz je:</p>

<p>     java -jar OmegaT.jar</p>

<p>Tento změňte přidáním volby uživatelského jazyka a příslušného kódu jazyka, např. v následujícím případě pro francouzštinu:</p>

<p>     java -Duser.language=fr -jar OmegaT.jar</p>

<h3>O autorských právech</h3>

<p>Většina dokumentace OmegaT je licencovaná pro opětovné využití za podmínek licence GNU Public License (GPL) nebo GNU Free Documentation License (GFDL). Webové stránky nejsou licencované pro opětovné využití. Ničím z tohoto se nemusíte zabývat, pokud se nezajímáte o otázky autorských práv do hloubky. Budete uvedený jako autor práce  a jmenovaný jako spoludržitel autorských práv.</p>

<p>Copyright Marc Prior 2009-2011</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="Logo SourceForge.net" height="31" width="88"/></a><br/>

<a href="http://validator.w3.org/check?uri=referer"><img src="../../images/xhtml.png" alt="Valid XHTML"/></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="../../images/css.png" alt="Valid XHTML"/></a>
	</div>

</div>

</body></html>
