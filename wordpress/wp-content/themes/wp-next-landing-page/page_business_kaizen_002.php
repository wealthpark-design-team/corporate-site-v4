<?php
/*
Template Name: Service Page - Business - Kaizen - 002
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta name="apple-itunes-app" content="app-id=1068127268">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/business/css/case_study_style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/kaizen.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
  <?php include "tag-manager-body.php" ?>
  <div id="page" class="whole-page seminar-kpv-pr seminar-kpv-pr--kaizen">
	<?php include "header-common.php" ?>
    <div id="content" class="site-content site-content--kaizen">
      <main id="main" class="site-main blog-container" role="main">
        <article class="example example--kaizen">
          <section class="featured-image">
            <img loading="lazy" class="example-thumbnail__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/main_visual.jpg">
          </section>
          <section class="example-header">
            <div class="example-header__meta">  
              <p class="example-header__meta--description">
                顧客の課題解決に向けて、<br class="visible-sp">ワンチームで顧客現場に<br>
                寄り添ったプロダクト開発を<br class="visible-sp">進める
              </p>
            </div>
          </section>
          <section>
            <div class="kaizen-profile kaizen-profile--no-margin-bottom">
              <div class="kaizen-profile__img">
                <img src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/profile1.jpg">
              </div>
              <div class="kaizen-profile__text">
                <p>
                  法人事業本部 執行役員 カスタマーサクセス統括<br>
                  <span class="director-orange">鳥谷 拓真</span>
                </p>
                <p>楽天グループ株式会社にてトラベル事業、民泊事業（現：楽天LIFULL STAY）をはじめ複数の新規事業立ち上げに従事。WeatlhParkでは、WealthParkビジネス事業のカスタマーサクセス責任者を務める。</p>
              </div>
            </div>
            <div class="profile-hr"></div>
            <div class="kaizen-profile kaizen-profile--no-margin-bottom">
              <div class="kaizen-profile__img">
                <img src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/profile2.jpg">
              </div>
              <div class="kaizen-profile__text">
                <p>
                  法人事業部 プロダクト部 部長<br>
                  <span class="director-blue">鳥居 俊二</span>
                </p>
                <p>楽天グループにて、楽天トラベルのPdMとして従事。また国内・海外チェーンホテル・大手旅行サイト・口コミサイトとの在庫連携案件（API接続）にも多数従事。WealthParkでは、WealthParkビジネスのプロダクトマネージャーを担当。</p>
              </div>
            </div>
            <div class="profile-hr"></div>
            <div class="kaizen-profile">
              <div class="kaizen-profile__img">
                <img src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/profile3.jpg">
              </div>
              <div class="kaizen-profile__text">
                <p>
                  法人事業本部 エンジニアディレクター<br>
                  <span class="director-green">寺島 浩太</span>
                </p>
                <p>カカクコムにて最大50名程度のエンジニアのマネジメントに従事。食べログシステム本部副本部長を担当。その後メルカリにてエンジニアリングマネージャーとしてグローバルなエンジニアチームのマネジメントを担当。WealthParkではエンジニア組織の統括を担当。</p>
              </div>
            </div>
          </section>
          <section class="toc">
            <p class="toc__title">目次</p>
            <ul class="toc__list">
                <li class="toc__item">
                  <a class="toc__link" href="#toc_index1">営業、プロダクト企画、エンジニアが三位一体で「本当に現場で使える」プロダクト開発を進める</a>
                  <ul class="toc__list--child"></ul>
                </li>
                <li class="toc__item">
                  <a class="toc__link" href="#toc_index2">不動産管理会社様、オーナー様のニーズを元にオーナーアプリのトップ画面のデザイン変更へ</a>
                  <ul class="toc__list--child"></ul>
                </li>
                <li class="toc__item">
                  <a class="toc__link" href="#toc_index3">営業、カスタマーサクセス、エンジニアによる徹底した顧客目線で取り組んだ「誤送信防止機能」</a>
                  <ul class="toc__list--child"></ul>
                </li>
                <li class="toc__item">
                  <a class="toc__link" href="#toc_index4">「本当に使い続けられるもの」を管理会社様と共に作る</a>
                  <ul class="toc__list--child"></ul>
                </li>
            </ul>
          </section>
          <section class="example-content">
            <p class="interviewer" id="toc_index1">営業、プロダクト企画、エンジニアが三位一体で<br class="hidden-sp">
              「本当に現場で使える」プロダクト開発を進める</p>
            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_1.jpg" alt="画像" width="100%"></div>
              <p class="example-content__image-caption">左から鳥谷、寺島、鳥居</p>
            </div>
            <p>--座って並んでいるだけでワンチーム感があふれ出してますね</p>
            <p><span class="director-blue">鳥居:</span> はい。僕らは毎日のように顔合わせていますから（笑）担当営業も含めて、毎日議論をしています。</p>
            <p><span class="director-orange">鳥谷:</span> 営業と開発が、同じチームとして机を並べてます。距離感がすごく近いです。</p>
            <p><span class="director-green">寺島:</span> 私はエンジニアですが、時には顧客とのミーティングに出て、現場で起きている事を把握して、営業とも目線を合わせながら開発を進めています。</p>
            <p>--以前と今の組織は何が違うのですか？</p>
            <p><span class="director-blue">鳥居:</span> 以前は機能別の組織でした。各組織の生産性を高めるために、良く取られる組織形態です。<br>
            営業が管理会社様と会話してきた内容をフィードバック受ける感じです。</p>
            <p><span class="director-orange">鳥谷:</span>  今は管理会社様の取り巻く環境の変化が激しく、様々な課題が発生しています。営業・プロダクト企画・開発が一緒になって、管理会社様の現場で起きている課題を把握し、解決をすることが必要となってきました。なので「顧客の課題解決」を起点とした組織体制へと変更しました。<strong>営業と開発が分業したままの組織では、本当に顧客の課題を解決できるものにならない</strong>と感じています。</p>
            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_2.jpg" alt="画像" width="100%"></div>
              <p class="example-content__image-caption">法人事業本部 執行役員 カスタマーサクセス統括 鳥谷 拓真</p>
            </div>
            <p><span class="director-blue">鳥居:</span> 開発側としても、本当にその機能が管理会社様の現場に合うものかどうか。それを検証するためにも<strong>営業と共に行動して、管理会社様と近い距離感で議論ができる環境が必要</strong>と感じていました。今は営業・プロダクト企画・エンジニアがワンチームとなって実際に顧客のもとへ足を運び、プロダクトについての議論を重ねることで、現場が本当に使いやすいサービスへとアップデートが迅速に可能となっています。</p>
            <p><span class="director-green">寺島:</span> エンジニアとしても、なぜそのような開発が必要なのか、それが現場にどのように役に立つものなのか理解できるようになり、重要度を理解し、適切なリソース配分と、逆にプロダクト企画側へどのような開発が良いかの提案を行えるようになりました。</p>
            <p><span class="director-orange">鳥谷:</span> プロダクト機能開発議論は、<strong>その機能で顧客の業務フローがどのように変わるのかまで整理して議論</strong>しました。機能があれば解決できるものでなく、実際の運用に落とし込まないとならないからです。</p>
            <p><span class="director-green">寺島:</span> 議論が深まると、WealthPark側でも想定していなかった機能の開発が必要となることに気が付いてきます。そしてそれを乗り越えるために、エンジニア組織としてどのようにすればよいのか、柔軟に対応できるようにしています。</p>
            
            <p class="interviewer" id="toc_index2">不動産管理会社様、オーナー様のニーズを元にオーナーアプリのトップ画面のデザイン変更へ</p>
            <p>--実際にワンチームとなって取り組んだ事例について教えてください</p>
            <p><span class="director-orange">鳥谷:</span>  まずはオーナーアプリのトップ画面デザインの変更ですかね。</p>
            <p><span class="director-blue">鳥居:</span>  利用オーナー数が50,000人を超えようかというあたりから、利用オーナーのすそ野が広がって行くのを感じるようになりました。その中で、オーナーアプリを利用するオーナー様と管理会社様からのニーズも多様化してきました。その状況を踏まえて、あらためてニーズを整理して、オーナーアプリのトップ画面を変更しようと考えました。</p>

            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_3.jpg" alt="画像" width="100%"></div>
              <p class="example-content__image-caption">法人事業部 プロダクト部 部長　鳥居 俊二</p>
            </div>

            <p><span class="director-orange">鳥谷:</span> ちょうどその検討が始まる前から、WealthParkではオーナー様に直接電話をして導入促進をする専用コールセンターを作っていて、最初はオーナー様に導入を促進する事に集中をしていたのですが、導入だけでなくフォローコールもしていく中で、実際にオーナー様からご要望をいただけるようになったのも大きかったです。</p>
            <p><span class="director-blue">鳥居:</span> <strong>開発と営業で、あらためてオーナー様と管理会社様のニーズを調査して整理</strong>しました。オーナー様がまずは何を知りたくて、そしてスムーズに不動産管理会社様とコミュニケーションをとれるようにするには何ができればいいのか。情報の選定を慎重に行いました。</p>
            <p><span class="director-orange">鳥谷:</span> オーナー様の多くは、まず毎月届く収支明細書か、記帳した通帳を見て「入金がいくらか」を確認します。その後、その数字について違和感を感じたら各物件の稼働率や収支情報を見て、状況を把握する。という流れをアプリのトップ画面で再現できれば、圧倒的に使いやすくなるという事が分かりました。また、アプリを開いた最初の画面で、不動産会社からの提案が届いているのを、ぱっと見でわかるというのも、オーナー満足度を高めるのと同時に、提案へのレスポンスが早くなる重要な要素と見立てました。</p>
            <p><span class="director-green">寺島:</span> そこで開発に動き出そうとプロジェクトが始まりましたが、実は最初は少し難航しました。</p>
            <p><span class="director-blue">鳥居:</span> それまでのWealthParkの画面から大きく変わることもあり、社内で懸念の声が出てきました。以前の画面を気に入ってくださっている、不動産管理会社様とオーナー様も少なくなかったからです。</p>

            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_4.jpg" alt="画像" width="100%"></div>
              <p class="example-content__image-caption">現在のオーナーアプリ WealthParkトップ画面</p>
            </div>

            <p><span class="director-orange">鳥谷:</span> 社内で議論を重ねましたが、なかなか進みませんでしたが、<strong>結局「正解は顧客の中にある」</strong>という事で、管理会社様にヒアリングに回ることにしました。そうしましたら、ほぼすべての会社様で好評をいただき、それが後押しになり、「よし行こう！！」と急ピッチで開発を進めることができました。</p>
            <p><span class="director-green">寺島:</span> そこからはかなり激動でした（笑）<br>
            ただ、予測はしていたので、開発体制をすぐに引き直し、そこから数か月で段階的にリリースを実現することができました。</p>
            <p><span class="director-blue">鳥居:</span> とは言え、リリース時には本当に評価をいただけるのか、というのは不安がなかった言えば嘘になりますが、リリース後に取ったオーナーアンケートでは、変更後の<strong>画面が見やすくなって良くなったという声がほぼ100％</strong>となり、胸をなでおろしました。</p>

            <p class="interviewer" id="toc_index3">営業、カスタマーサクセス、エンジニアによる<br class="hidden-sp">
            徹底した顧客目線で取り組んだ「誤送信防止機能」</p>

            <p>--その他にもありますか？</p>
            <p><span class="director-blue">鳥居:</span> 次は誤送信防止機能ですかね。</p>
            <p><span class="director-orange">鳥谷:</span> 大手管理会社様の導入が増えてきた背景もありますが、気軽にコミュニケーションができるオーナーアプリだからこそ、個人情報漏洩防止のリスクを懸念する声が、かなり増えてきました。</p>
            <p><span class="director-green">寺島:</span> 従来のメールでは専用ソフトやサービスの導入で、添付ファイルのチェックができていたのですが、それと同じ思想をオーナーアプリのチャットで再現するようにご要望をいただいたのですが、そのまま再現すると、せっかくのチャットの気軽なコミュニケーションが損なわれる、というデメリットも存在しました。</p>
            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_5.jpg" alt="画像" width="100%"></div>
              <p class="example-content__image-caption">法人事業本部 エンジニアディレクター  寺島 浩太</p>
            </div>

            <p><span class="director-blue">鳥居:</span> そこで、<strong>顧客のところへ赴き、直接課題と解決策について議論をすることにしました</strong>。<br>
            まずは顧客の業務フローを整理し、個人情報の送付前、個人情報送付時、個人情報漏洩後の3つのフェーズに整理して、どこでどのような対応策を打つのが、オーナーアプリのメリットを損なわず、最適なのかを顧客と議論を続けました。</p>
            <p><span class="director-orange">鳥谷:</span> 顧客と同じ目線で一緒に考えて何度も何度も取り組みました。私たちが言うのは恐れ多いのですが、大変でしたが、顧客と<strong>ワンチームになれた気がした取組</strong>でした。議論が詰まってきた段階で、またエンジニアチームにも参加してもらい、議論の内容をどこまで実現可能かを整理と調整をして、開発を進めることができました。</p>
            <p><span class="director-green">寺島:</span> お客様からの強いご要望に対して、<strong>エンジニアとしても最適解を見つけながらソリューションをしていった取組</strong>でした。結局、そのお客様と綿密な打ち合わせを重ねていたのもあり、私が入ってからは1～2か月で進めることができました。</p>
            <p><span class="director-blue">鳥居:</span> お客様には喜んでいただき、この機能なら安心して社内展開できると評価をいただき、無事オーナーアプリ導入プロジェクトがスタートできました。この取り組みでできた機能は他の管理会社様にも展開できる機能に磨き上げることができました。この様に、難易度が高いけれども管理会社様、オーナー様のためになる機能開発には今後も取り組みたいと考えています。</p>
            <p><span class="director-orange">鳥谷:</span> 複数の管理会社様からご要望をいただいておりました。ただ、防止のために、全部のチャットをチェックしてから送信をする機能などを付ければ簡単かもしれませんが、それをやってしまうと、コミュニケーションツールをメールやFAXからチャットやワークフローにしてスピードアップさせる意味がなくなってしまう。そこで、極力チャットやワークフローにおける顧客体験が損なわないように、誤送信による個人情報漏洩における課題は何か？を洗い出して、取組を整理し始めました。</p>
            <p><span class="director-blue">鳥居:</span> 誤送信による個人情報漏洩が発生する流れをフェーズに分けて、発生事象と原因を整理しました。ここは、<strong>管理会社様と一緒に作り上げました</strong>。それらの事象と原因についてどのように対応すれば解決になるのかを、管理会社様と議論しました。</p>
            <p class="interviewer" id="toc_index4">「本当に使い続けられるもの」を管理会社様と共に作る</p>
            <p>--今後も顧客課題をより一層解決していくために何か取り組みをされる予定はありますか？</p>
            <p><span class="director-blue">鳥居:</span> プロダクト企画としては、開発を検討している機能は、実は他にもたくさんあります。ただ、その前に解くべきソリューションが、不動産管理会社様との対話の中で常に更新されていきます。その度に開発を検討する機能が増え続けたり、更新されていくのですが（笑）、常に、いつでも開発を開始できるように準備をしています。</p>
            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_6.jpg" alt="画像" width="100%"></div>
            </div>

            <p>--準備とは具体的にどういったものでしょうか？</p>
            <p><span class="director-blue">鳥居:</span> エンジニアチームにバトンを渡す際に、ソリューションを実現するために、どのように機能・UXに落とし込めばよいのかを分解して整理をして渡すことが重要で、その整理をし続けています。それも営業だけでなく、顧客とも直接議論をして、業務フローの中でどのように機能するのか、そこから逆算して落とし込んでいます。</p>
            <p><span class="director-green">寺島:</span> 「これがあると顧客が買いたいと言っている」というのはなぜなのか。その「なぜ」を置き去りしないことが重要です。営業主導で、一旦きらびやかな機能開発の要望が入ることもありますが、<strong>エンジニアも管理会社の現場理解を深めることで、その「なぜ」を深堀して最適な開発提案が可能</strong>となります。</p>
            <p>もちろん、「いざやるぞ！」になったらいつでも全力投球ができるように、エンジニアリソースをきめ細やかに管理しています。</p>
            <p>--なるほど、このプロダクト企画とエンジニアの連携で、<strong>開発リリース数が倍増</strong>したわけですね</p>
            <p><span class="director-green">寺島:</span> そうですね、その分忙しくはなりましたが（笑）、顧客の顔や現場が見えている中での開発なので、とてもやりがいはあります。</p>
            <p>--カスタマーサクセスとしてはいかがでしょうか？</p>
            <p><span class="director-orange">鳥谷:</span> 今までの管理会社様との議論で、私たちが気が付いたことは、管理会社様からの要望の中に管理会社様自身が気が付いていない課題が多く潜んでいるということです。実はそこを深堀して議論をしないと、そのまま<strong>作ってみたはいいが、結局現場で使えない機能</strong>となり、そのまま風化していくことが多くあります。私たちは管理会社様の現場で<strong>「本当に使い続けられるもの」を管理会社様と一緒に作っていきたい</strong>と考えています。</p>
            <p style="text-align: right">23年 8月</p>
            <div class="example-content__hd--center">
              <div class="example-content__pic"><img class="example-content__image" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/story2/image_7.jpg" alt="画像" width="100%"></div>
            </div>
            <div class="next-story">
              <a href="<?php echo home_url()?>/business/kaizen/k001">
                前の記事を読む
              </a>
            </div>
          </section>
        </article>
      </main><!-- #main -->
    </div>
  </div>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-corporate.php" ?>
	</footer>
  <script>
    $(function () {
      $('a[href^="#"]').click(function() {
        // スクロールの速度
        let speed = 800; // ミリ秒で記述
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let headerHeight = $('.menu__navbar').outerHeight(); //固定ヘッダーの高さ
        let position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
        $('body,html').animate({
          scrollTop: position
        }, speed, 'swing');
        return false;
      });
    });

    function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
    }
  </script>
  
</body>
</html>
