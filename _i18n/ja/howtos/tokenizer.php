<div class="container">

<h2>OmegaT 技術情報：トークナイザーの使用</h2>

<p><strong>トークナイザープラグインは OmegaT バージョン 3.0.0 に統合されました。以下の情報は、OmegaT バージョン 3.0.0 よりも前のバージョンについてのみ当てはまります。もし以前のバージョンの OmegaT でトークナイザープラグインを利用しており、その状態から OmegaT バージョン 3.0.0 以上にアップグレードした場合は、プラグインフォルダーからトークナイザープラグインを削除してください。</strong></p>

<p>OmegaT トークナイザーは、OmegaT のプラグインです。トークナイザーは、原文の単語の語幹を処理し（ステミング）、OmegaT における参考訳文と用語集の一致処理を改善します。たとえば、テキスト中の語尾変化した単語を認識し、用語集には語尾変化していない単語しか載っていない場合であっても、その単語を表示します。</p>

<h3>準備</h3>

<p>OmegaT でトークナイザーを使用し始める前に、OmegaT のバージョンが適切で、トークナイザーを使用できる状態にあることを確認する必要があります。</p>

<p><strong>Webstart 版 OmegaT</strong>：トークナイザーは、Webstart 版 OmegaT には対応していません。トークナイザーを使用するには、通常版の OmegaT（最新ベータ版）をシステムにインストールします。</p>

<p><strong>OmegaT バージョン 2.1.0 以前</strong>：現在のトークナイザーには対応していません。（バージョン 2.0.x から 2.1.0 の間でもトークナイザーを使用できますが、それには別バージョンのトークナイザーと別のインストール方法が必要です。） 最新ベータ版の OmegaT にアップグレードすることをお勧めします。</p>

<p><strong>Windows 版 OmegaT</strong>：OmegaT (バージョンにかかわらず) でトークナイザーを使用するには、起動スクリプトファイルから起動する必要があります。起動スクリプトファイルは、Windows 版 OmegaT には付属していません。JRE 付きの Windows 版を使用している場合、<a href="/files/OmegaT_with_JRE.bat">OmegaT_with_JRE.bat</a> ファイルをダウンロードしてください。JRE 無しの Windows 版を使用している場合は、<a href="/files/OmegaT_without_JRE.bat">OmegaT_without_JRE.bat</a> ファイルをダウンロードしてください。ダウンロードしたファイルを、OmegaT メインフォルダー（OmegaT.jar ファイルが入っているフォルダー）に入れてください。</p>

<p><strong>プラットフォームに依存しない版（Windows 上）</strong>：OmegaT 起動スクリプトファイル（OmegaT.bat）の場所を確認してください。</p>

<p><strong>Linux 版/システム</strong>：OmegaT 起動スクリプトファイル（OmegaT または OmegaT.sh）の場所を確認してください。</p>

<p>起動スクリプトファイルを実行すると OmegaT が起動することを確認します。<br/>- Linux では、コマンドラインを使用します。<br/>- Windows では、起動スクリプトファイルをクリックします。</p>


<h3>トークナイザーのインストール</h3>

<p>インストールの準備（上記参照）ができたら、以下の手順でトークナイザーをインストールします。</p>

<p>1. <?php $link='<a
href="http://sourceforge.net/projects/omegat-plugins/files/OmegaT-tokenizers/OmegaT%202.1.1%20and%20later/'.$tokenizers_number.'/OmegaT-tokenizers_'.$tokenizers_number.'.zip/download"
>'; $endlink='</a>';?> <?php echo $link ?>トークナイザー zip パッケージ（OmegaT バージョン 2.1.1 以降）<?php echo $endlink ?>をダウンロードします。</p>

<p>2. トークナイザー zip パッケージのファイルを展開します。</p>

<p>3. OmegaT プログラムのメインフォルダー（OmegaT.jar ファイルが入っているフォルダー）内に、 「plugins」という名のフォルダーを作成します（その名のフォルダーがまだない場合）。トークナイザーパッケージから展開したファイルを、plugins フォルダー内にコピーします。</p>

<p>4. 起動スクリプトファイルをテキストエディターで開きます。特に Windows ユーザー：このファイルを直接クリック<strong>しない</strong>でください。. その代わりに、テキストエディター（「メモ帳」や 「ワードパッド」）を起動して、［ファイル］→［開く］から起動スクリプトを開いてください。ファイルをマウスで右クリックして、ファイルを開くためのテキストエディターを選ぶこともできます。</p>

<p>5. 起動ファイルスクリプトには、OmegaT 起動コマンドが書かれています。このコマンドの基本形は次の通りです。</p>

<p>java -jar OmegaT.jar</p>

<p>システム構成に応じて、起動コマンドは多少変わります。</p>

<p>6. <strong>原文</strong>の言語に応じて、以下の一覧からトークナイザーを選びます。</p>

<p>org.omegat.plugins.tokenizer.LuceneArabicTokenizer<br/>org.omegat.plugins.tokenizer.LuceneBrazilianTokenizer<br/>org.omegat.plugins.tokenizer.LuceneChineseTokenizer<br/>org.omegat.plugins.tokenizer.LuceneCJKTokenizer<br/>org.omegat.plugins.tokenizer.LuceneCzechTokenizer<br/>org.omegat.plugins.tokenizer.LuceneDutchTokenizer<br/>org.omegat.plugins.tokenizer.LuceneFrenchTokenizer<br/>org.omegat.plugins.tokenizer.LuceneGermanTokenizer<br/>org.omegat.plugins.tokenizer.LuceneGreekTokenizer<br/>org.omegat.plugins.tokenizer.LucenePersianTokenizer<br/>org.omegat.plugins.tokenizer.LuceneSmartChineseTokenizer<br/>org.omegat.plugins.tokenizer.LuceneRussianTokenizer<br/>org.omegat.plugins.tokenizer.LuceneThaiTokenizer<br/>org.omegat.plugins.tokenizer.SnowballDanishTokenizer<br/>org.omegat.plugins.tokenizer.SnowballDutchTokenizer<br/>org.omegat.plugins.tokenizer.SnowballEnglishTokenizer<br/>org.omegat.plugins.tokenizer.SnowballFinnishTokenizer<br/>org.omegat.plugins.tokenizer.SnowballFrenchTokenizer<br/>org.omegat.plugins.tokenizer.SnowballGerman2Tokenizer<br/>org.omegat.plugins.tokenizer.SnowballGermanTokenizer<br/>org.omegat.plugins.tokenizer.SnowballHungarianTokenizer<br/>org.omegat.plugins.tokenizer.SnowballItalianTokenizer<br/>org.omegat.plugins.tokenizer.SnowballNorwegianTokenizer<br/>org.omegat.plugins.tokenizer.SnowballPorterTokenizer<br/>org.omegat.plugins.tokenizer.SnowballPortugueseTokenizer<br/>org.omegat.plugins.tokenizer.SnowballRomanianTokenizer<br/>org.omegat.plugins.tokenizer.SnowballRussianTokenizer<br/>org.omegat.plugins.tokenizer.SnowballSpanishTokenizer<br/>org.omegat.plugins.tokenizer.SnowballSwedishTokenizer<br/>org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>OmegaT 起動スクリプトファイルの起動コマンドの最後に、引数「--ITokenizer=」に続けてトークナイザーのフルネームを追加します（スペースを挟んで全行をコピー）。</p>

<p>たとえば、英語トークナイザーを使用する場合（原文が英語）、一例として次のような起動コマンドになります。</p>

<p>java -jar OmegaT.jar %*
--ITokenizer=org.omegat.plugins.tokenizer.SnowballEnglishTokenizer</p>

<p>トルコ語から翻訳する場合は、次のようになるかもしれません。</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.SnowballTurkishTokenizer</p>

<p>重要：このコマンド全体は 1 行で書く必要があります（ご使用のブラウザーでは 2 行で表示されているかもしれません）。</p>

<p>7. このファイルを実行すると、OmegaT はトークナイザー機能付きで起動します。機能を試験するには、 用語集に掲載されている単語の語尾変化形が現在の分節内にある場合に、その単語が用語集ウィンドウに表示されることを確認してください。</p>

<p>8. 複数の原文を取り扱うために異なるトークナイザーを使用したい場合は、各トークナイザーに対して個別に OmegaT 起動スクリプトを作成してください。起動スクリプトファイルに適切な名称を付けてください。たとえば、英語トークナイザー用のコマンドを含むファイルは「OmegaT-EN.bat」、トルコ語トークナイザー用のコマンドを含むファイルは「OmegaT-TR.bat」のように名付けます。</p>

<p>9. 原文言語のトークナイザーが、訳文言語の綴り確認機能を妨げることがあるかもしれません。この問題は、引数「--ITokenizerTarget=」によって、訳文言語のトークナイザー（存在する場合）を指定することによって回避できます。</p>

<p>たとえば、中国語からオランダ語へ翻訳する場合は、次のようなコマンドを試してみてください。</p>

<p>java -jar OmegaT.jar %* --ITokenizer=org.omegat.plugins.tokenizer.LuceneChineseTokenizer --ITokenizerTarget=org.omegat.plugins.tokenizer.LuceneDutchTokenizer</p>

<p>10. 上記のように起動スクリプトを作成後に、たとえばショートカットによって、より簡単に OmegaT を起動できるようにシステムを構成することができます。Windows でショートカットを作成する方法</p>

<p>起動スクリプト（OmegaT.bat）を右クリックし、マウス右ボタンを押したまま、スクリプトをデスクトップなどの使いやすい場所へドラッグします。そこでマウス右ボタンを放すと、いくつかのオプションを示すダイアログが開きます。「ショートカットをここに作成」を選びます。</p>
<p>あるいは、起動スクリプトを右クリックし、「送る」を選び、「デスクトップ（ショートカットを作成）」を選びます。</p>
<p>ショートカットを作成してテストしたら、それをドラッグしてスタートメニューに追加することができます。</p>
<p>Copyright Marc Prior 2010-2011</p>

</div>
