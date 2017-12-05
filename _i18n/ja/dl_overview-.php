<?php print "<?xml version=\"1.0\"?>" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
  <title>OmegaT, 自由な翻訳メモリツール</title>
  <meta name="generator" content="screem 0.10.2" />
  
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  
  <meta name="keywords" content="翻訳メモリ, TM, コンピューター支援翻訳, コンピューター利用翻訳, CAT, GPL, オープンソース" />

  
<link rel="stylesheet" type="text/css" href="./simple.css" />

</head>



<?php include '../config/versions.txt'; ?>



<body>

<div id="container">
			
<div id="banner">

<h1>OmegaT</h1>

<p>自由な（GPL）翻訳メモリツール</p>

</div>

<ul id="menu">

  <li><a href="omegat">OmegaT とは</a></li>

  <li><a href="requirements">要件</a></li>

  <li><a href="screenshots">スクリーンショット</a></li>

  <li><a href="downloads">ダウンロード</a></li>

  <li><a href="documentation">文書</a></li>

  <li><a href="resources">その他のリソース</a></li>

  <li><a href="3rd_party">関連プログラム</a></li>

  <li><a href="contact_support">連絡先とサポート</a></li>

  <li><a href="involved">あなたにできること</a></li>

  <li><a href="reviews">レビュー</a></li>

  <li><a href="who_we_are">貢献者</a></li>

</ul>

<div id="content">
		
<h2>OmegaT のダウンロード</h2>

<h3>ダウンロードリンク</h3>

<p>以下のリンクから、さまざまなバージョンの OmegaT を入手できます。詳しくは、下記の「パッケージの説明」を参照してください。</p>

<table>

<tr>

<td><b>通常版</b>（Standard）<br/>（最新版：<?php echo $standard_name ?>）
</td>

<td>

<p>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Windows.exe/download"
>'; $endlink='</a>';?> <?php echo $link ?>Windows（JRE 付き）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Windows_without_JRE.exe/download"
>'; $endlink='</a>';?> <?php echo $link ?>Windows（JRE 無し）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Mac.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>Mac OS X<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Linux.tar.bz2/download"
>'; $endlink='</a>';?> <?php echo $link ?>Linux（JRE 付き）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Without_JRE.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>クロスプラットフォーム（JRE 無し）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Standard/OmegaT%20'.$standard_name.'/OmegaT_'.$standard_number.'_Source.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>ソースコード<?php echo $endlink ?><br/></p>

</td>

</tr>

<tr>

<td><b>開発版</b>（Latest）<br/>（現在の版：<?php echo $latest_name ?>）
</td>

<td>

<p>

<?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Windows.exe/download"
>'; $endlink='</a>';?> <?php echo $link ?>Windows（JRE 付き）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Windows_without_JRE.exe/download"
>'; $endlink='</a>';?> <?php echo $link ?>Windows（JRE 無し）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Mac.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>Mac OS X<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Linux.tar.bz2/download"
>'; $endlink='</a>';?> <?php echo $link ?>Linux（JRE 付き）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Without_JRE.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>クロスプラットフォーム（JRE 無し）<?php echo $endlink ?><br/><?php $link='<a
href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Latest/OmegaT%20'.$latest_name.'/OmegaT_'.$latest_number.'_Beta_Source.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>ソースコード<?php echo $endlink ?><br/></p>

</td>

</tr>

<tr>

<td><b>Web Start 版</b></td>

<td>

<p><a
href="http://omegat.sourceforge.net/webstart/OmegaT.jnlp">Web Start 通常版</a><br/><a
href="http://omegat.sourceforge.net/webstart-dev/OmegaT.jnlp">Web Start 開発版</a><br/></p>

</td>

</tr>

<tr>

<td><b>旧版</b></td>

<td><p><a href="http://sourceforge.net/projects/omegat/files/OmegaT%20-%20Legacy/">新版に置き換えられた古いバージョン</a></p></td>

</tr>

<tr>

<td><b>Trunk 版</b></td>

<td><p><a href="http://omegat.svn.sourceforge.net/viewvc/omegat/trunk/?view=tar">/trunk</a> 版は、開発途中の機能を含む最先端の「アルファ」版です。</p></td>

</tr>

</table>


<h2>パッケージの説明</h2>

<p>注意： 1 つのパッケージが複数の区分にまたがることがあります。たとえば、「通常版 Windows（JRE 無し）」や「開発版 Linux（JRE 付き）」などのバージョンがあります。</p>

<h3>通常版</h3>

<p>通常版は、あるていどの評価試用期間を経ているため、動作は安定しています。取扱説明書については、少なくとも英語版は通常、最新の内容になっています。ただし、「開発版」に含まれている機能のいくつかが、まだ取り入れられていません。</p>

<h3>開発版</h3>

<p>開発版は、通常版よりもさらに開発が進んだ状態のもので、通常版には存在しない新機能を含んでいます。開発版はたいていの場合、じゅうぶん使用に耐えるていどには安定しています。けれども、いくつかバグが残っているかもしれません。取扱説明書については、特に新機能を中心に、未記載であったり、草稿段階の記述を含んだりしています。OmegaT をあるていど長く使っているユーザーは、開発版を選ぶことがよくあります。</p>

<h3>プラットフォーム（OS）</h3>

<p>プラットフォーム別の OmegaT パッケージが、Windows、Linux、Mac OS X 向けに配布されています。また、適切な JRE がインストール済みであれば、特定のプラットフォームに依存しないクロスプラットフォーム版も利用できます。</p>

<h3>JRE 付き/無し</h3>

<p>OmegaT を実行するには、Java Runtime Environment（JRE）がコンピューターにインストールされている必要があります。</p>

<p>適切なバージョンの JRE がインストールされていることを確認済みであれば、JRE 無しの OmegaT 版をダウンロードできます。ファイルサイズが小さいため、ダウンロードが早く終わります。また、インストールに必要なハードディスク容量も少なくなります。この場合、デフォルト版を選ばないでください。他のバージョン（通常版や開発版）を選び、次に「Java 無し」と記された版を選んでください。</p>

<p>JRE をインストール済みのコンピューターに、JRE 付きの OmegaT をインストールしても問題はありません。OmegaT 用の JRE は、既存の JRE とは別の場所にインストールされ、特に衝突は起こしません。したがって、JRE 付きの OmegaT をインストールしておけば、どんな環境であっても安全といえます。もしコンピューターに適切なバージョンの JRE がインストール済みかどうか分からないときは、JRE 付き（またはデフォルト）のバージョンを選んでください。 </p>

<p>Mac OS X ユーザー：Mac OS X には、デフォルトで JRE がインストールされています。そのため、Mac OS X 用の JRE 付き OmegaT はありません。</p>

<p>Linux ユーザー：ほとんどの Linux ディストリビューションは、Java 実行環境を同梱しています。しかし、オープンソース実装の JRE の中には、OmegaT が正常に動作しないものがあります（すぐに明確ではないかもしれません）。もし Linux に不慣れな場合は、JRE 付きの OmegaT を選ぶことをお勧めします。経験豊富な Linux ユーザーであれば、Oracle（旧 Sun）の JRE をシステムレベルでインストールすることを選ぶかもしれません。
</p>

<h3>Web Start 版</h3>

<p>Web Start 版は、OmegaT をインストールするもう一つの方法です。</p>

<p>Web Start 版では、将来の更新版が自動インストールされます。</p>

<p>インストール中、OS によってはいくつかのセキュリティ警告が表示されることがあります。<br/>証明書は、フランスで登記された会社 <a href="http://www.pnsconcept.com/coordinates">PnS Concept Sarl</a> によって署名されています。</p>

<p>この Web Start 版に与える権限（「コンピューターへの無制限アクセス」のように表示されることがあります）は、ローカル版に対して与えるものと同じで、コンピューターのハードディスクにアクセスすることを許可するものです。</p>

<p>Web Start 版をイントールするには、コンピューターに Java 1.3 以降がインストール済みである必要があります。</p>

<p>プライバシーについて：OmegaT Java Web Start は、ユーザーのコンピューターに関するいかなる情報も外部へ保存することはありません。プログラムは、ユーザーのコンピューター上で実行されます。ユーザーが作成した文書や翻訳メモリは、ユーザーのコンピューターに保存され、OmegaT プロジェクトがユーザーの作業内容や他の情報へアクセスすることはありません。</p>

<h3>旧版</h3>

<p>旧版は、新版によって置き換えられた古いバージョンです。ほとんどのユーザーにとって、関係がありません。しかし、何らかの制約（OS や Java のバージョンなどに依存）を抱えているユーザーには、旧版が必要となることがあります。</p>

<h3>Trunk 版</h3>

<p>Trunk 版（アルファ版）は、開発中の最新状態を反映しています。これは、真剣に取り組んでいる開発者とテスト実施者以外にはお勧めしません。次の subversion コマンドから入手することもできます。</p>

<p>svn co svn://svn.code.sf.net/p/omegat/svn/trunk omegat</p>

<h3>ソースコードパッケージ</h3>

<p>ソースコードパッケージは、一般ユーザーには必要なく、開発者のみを対象としています。ソースコードパッケージは、該当するコンパイル済みバージョンのフォルダー内にあります。</p>

</div>

<div id="footer"><a href="http://sourceforge.net"><img src="http://sourceforge.net/sflogo.php?group_id=68187&amp;type=1" alt="SourceForge.net ロゴ" height="31" width="88" /></a><br />

<a href="http://validator.w3.org/check?uri=referer"><img src="/img/xhtml.png" alt="Valid XHTML" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="/img/css.png" alt="Valid XHTML" /></a>
	</div>

</div>


</body>

</html>
