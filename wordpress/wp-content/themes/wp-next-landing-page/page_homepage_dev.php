<?php
/*
Template Name: Homepage - Dev
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title><?php _e("corporate.meta-title.corporate", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.corporate", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php _e("corporate.meta-title.top", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://wealth-park.com/corporate/" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/corporate/ogp_image_wp-corporate_001.jpg">
<meta property="og:site_name" content="WealthPark Corporate" />
<meta property="og:description" content="<?php _e("corporate.meta-description.top", 'wp-next-landing-page'); ?>">
<meta name="twitter:card" content="summary_large_image" />
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css"> -->
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/corporate" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/corporate" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/corporate" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/corporate" />
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>

  <section class="page-name">
    <div class="page-name__inner page-name__inner--company-profile">
      <h2 class="page-name__title">Team</h2>
    </div>
  </section>








    <div class="container__inner team__inner">
      <div class="title-box">
        <ul class="team-lists">
          <li class="team-lists__person modal-syncer" data-target="modal-content-01">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_kawada.png" alt="Ryuta Kawada"></p>
            <p class="team-lists__person-name">Ryuta Kawada</p>
            <p class="team-lists__person-role">Founder & CEO<br /> Representative Director of the Board</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-02">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_mase.png" alt="Yusuke Mase"></p>
            <p class="team-lists__person-name">Yusuke Mase</p>
            <p class="team-lists__person-role">COO, CPO<br />Director of the Board & <br />Executive Vice President</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-04">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_shirasaki.png" alt="白崎 純平"></p>
          <p class="team-lists__person-name">Jumpei Shirasaki</p>
          <p class="team-lists__person-role">CFO, Head of USA<br />Managing Director, Member of the Board</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-06">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_tezuka.png" alt="Kensuke Tezuka"></p>
          <p class="team-lists__person-name">Kensuke Tezuka</p>
          <p class="team-lists__person-role">CBO, Head of SaaS Business, <br /> HR & PR<br />Managing Director, Member of the Board</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-12">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_ishimura.png" alt="Yuki Ishimura"></p>
            <p class="team-lists__person-name">Yuki Ishimura</p>
            <p class="team-lists__person-role">Executive Officer<br />SaaS Business Sales Director</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-13">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_kajiro.png" alt="Yoshitaro Kajiro"></p>
            <p class="team-lists__person-name">Yoshitaro Kajiro</p>
            <p class="team-lists__person-role">Executive Officer<br>Fintech Business Division<br>Head of Sourcing and Asset Management<br>/ WealthPark Alternative Investments(*)<br>Director</p>
          </li>
          <!--
          <li class="team-lists__person modal-syncer" data-target="modal-content-10">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_suzuki.png" alt="Yoshikazu Suzuki"></p>
          <p class="team-lists__person-name">Yoshikazu Suzuki</p>
          <p class="team-lists__person-role">CIO<br />Executive Director</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-07">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_yoshimoto.png" alt="Yuki Yoshimoto"></p>
          <p class="team-lists__person-name">Yuki Yoshimoto</p>
          <p class="team-lists__person-role">VP of Design</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-08">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_yoshiwara.png" alt="Kenta Yoshihara"></p>
          <p class="team-lists__person-name">Kenta Yoshihara</p>
          <p class="team-lists__person-role">VP of Operation</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-09">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_seth.png" alt="Luan Seth"></p>
          <p class="team-lists__person-name">Luan Seth</p>
          <p class="team-lists__person-role">VP of Product</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-11">
          <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_takahiro_fujii.png" alt="Takahiro Fujii"></p>
          <p class="team-lists__person-name">Takahiro Fujii</p>
          <p class="team-lists__person-role">VP of Engineering</p>
          </li>
          -->
        </ul>
        <p>*Crowd Realty, Inc., the current company name to be changed in 2022</p>
      </div>
    </div>
  </section>
  <div id="modal-content-01" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_kawada.png" alt="Ryuta Kawada"></p>
    <p class="team-lists__person-name">Ryuta Kawada</p>
    <p class="team-lists__person-role">Founder & CEO<br />Representative Director of the Board</p>
    <p class="team-lists__person-description">Ryuta is the founder and CEO of WealthPark, responsible for the company's business strategy. He held a management position at Fashionwalk, an IT venture company. Preceding that, he served as an investment banker in Mizuho Securities. He is highly experienced in management and has a broad network of domestic and foreign technology companies and high-net-worth individuals.<br/><br/>He holds a B.S. in Management Science from Tokyo Institute of Technology.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.facebook.com/ryuta.kawada.7" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_facebook.png" alt="Facebook" /></a>
      <a href="https://www.linkedin.com/in/ryuta-kawada-76a8b29a/" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
      <a href="https://www.instagram.com/kawadary/?hl=ja" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_instagram.png" alt="instagram" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-02" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_mase.png" alt="Yusuke Mase"></p>
    <p class="team-lists__person-name">Yusuke Mase</p>
    <p class="team-lists__person-role">COO, CPO<br />Director of the Board & <br />Executive Vice President</p>
    <p class="team-lists__person-description">Yusuke is the COO and CPO of WealthPark. Prior to joining WealthPark, Yusuke worked at The Carlyle Group and Taiyo Pacific Partners, and Mizuho Securities, where he led various alternative asset investments and portfolio company's business transformations in corporate private equity and hedge fund spaces.
  He holds M.A. in Industrial Engineering and B.A. in Information Science from Tokyo Institute of Technology, and his M.B.A. from London Business School.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.facebook.com/yusuke.mase.7" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_facebook.png" alt="Facebook" /></a>
      <a href="https://www.linkedin.com/in/yusuke-mase-a3a41440" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-04" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_shirasaki.png" alt="Jumpei Shirasaki"></p>
    <p class="team-lists__person-name">Jumpei Shirasaki</p>
    <p class="team-lists__person-role">CFO, Head of USA<br />Managing Director, Member of the Board</p>
    <p class="team-lists__person-description">Jumpei is the CFO of WealthPark and leads the USA business. Prior to WealthPark, he worked at MSREF, a real-estate fund of Morgan Stanley,  serving the investment business in hard assets, operational assets, private equity, non-performing loans, etc. He is experienced in investment management and has a broad network in Japan and overseas.<br /><br />He received his B.A. in Policy Management from Keio University.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.linkedin.com/in/jumpei-shirasaki-35b625150/" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-06" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_tezuka.png" alt="Kensuke Tezuka"></p>
    <p class="team-lists__person-name">Kensuke Tezuka</p>
    <p class="team-lists__person-role">CBO, Head of SaaS Business, HR & PR<br />Managing Director, Member of the Board</p>
    <p class="team-lists__person-description">Kensuke is the CBO of WealthPark, overseeing SaaS business, HR, and PR. Before joining WealthPark, Kensuke served domestic and global business development and business planning in Rakuten and Fujifilm. He is well experienced in planning and execution of marketing and business strategies.<br /> <br /> He received his B.A. in Law and Political Science at Tokyo University and his M.B.A. at London Business School.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.facebook.com/kensuke.tezuka" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_facebook.png" alt="Facebook" /></a>
      <a href="https://jp.linkedin.com/in/kensuke-tezuka-27182217" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-12" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_profile_ishimura.png" alt="Yuki Ishimura"></p>
    <p class="team-lists__person-name">Yuki Ishimura</p>
    <p class="team-lists__person-role">Executive Officer<br />SaaS Business Sales Director</p>
    <p class="team-lists__person-description">Yuki is responsible for sales of WealthPark Business, SaaS product for property managers. Prior to joining WealthPark, Yuki worked for Actcall inc. as sales director of call center services and business development director of overseas real estate franchise business.<br /> <br /> Yuki is also actively involved in the industry working group and promoting the digitization of property management.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.facebook.com/yuki.ishimura.754" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_facebook.png" alt="Facebook" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-10" class="modal-content">
  <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_suzuki.png" alt="Yoshikazu Suzuki"></p>
  <p class="team-lists__person-name">Yoshikazu Suzuki</p>
  <p class="team-lists__person-role">CIO<br />Executive Director</p>
    <p class="team-lists__person-description">Yoshikazu is CIO of Wealth Park. He is in charge of investment business at Wealth Park.<br> <br>
  Before joining Wealth Park, he engaged in private equity investment and worked as a board of director of invested company. His experience includes growth capital investment outside Japan and cross-border M&A advisory at Investment Bank.<br> <br>
  Yoshikazu holds M.S. in Science & Technology at Graduate School of Keio University and B.S. in Science and Technology at Keio University.</p>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-07" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_yoshimoto.png" alt="Yuki Yoshimoto"></p>
    <p class="team-lists__person-name">Yuki Yoshimoto</p>
    <p class="team-lists__person-role">VP of Design</p>
    <p class="team-lists__person-description">Yuki is the Chief Creative Officer of Wealth Park. His main responsibilities include design and brand management. Yuki is the driving force behind Wealth Park’s creative direction.<br> <br> Yuki has close to 10 years of experience in the creative design field, including for corporate and brand sites, campaign sites, package designs, and product designs.<br> <br> Yuki holds a B.S. in Information Systems from Tokyo City University, Japan.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.linkedin.com/in/yukiyoshimoto/" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
      <a href="https://www.behance.net/yukiyoshimoto" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_behance.png" alt="Behance" class="behance" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-08" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_yoshiwara.png" alt="Kenta Yoshihara"></p>
    <p class="team-lists__person-name">Kenta Yoshihara</p>
    <p class="team-lists__person-role">VP of Operation</p>
    <p class="team-lists__person-description">Kenta is responsible for running vertical business operation and cross-sectinal projects at WealthPark.<br> <br> Before joining WealthPark in 2014, he has lead strategic finance and corporate investment team at mobile game company and engaged in several investment and PMI projects at private equity company /global financial advisory firm.<br> <br> Kenta received MBA at Purdue University and LLB at Gakushuin University.</p>
    <div class="team-lists__person-sns">
      <a href="https://www.facebook.com/yoshihara.kenta.7" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_facebook.png" alt="Facebook" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-09" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_seth.png" alt="Luan Seth"></p>
    <p class="team-lists__person-name">Luan Seth</p>
    <p class="team-lists__person-role">VP of Product</p>
    <p class="team-lists__person-description">Seth is the VP of Products of WealthPark.<br> <br> Before joining the team he has had 10+ years of Technical and Product leadership experience in Sony and Rakuten in addition to starting his own digital service company.<br> <br> An active AngelList investor and Kyoto hotels owner, Seth holds a Master of Electrical Engineering degree from the University of Southern California. </p>
    <div class="team-lists__person-sns">
      <a href="https://www.linkedin.com/in/seth-luan-62110912/" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-11" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_takahiro_fujii.png" alt="Takahiro Fujii"></p>
    <p class="team-lists__person-name">Takahiro Fujii</p>
    <p class="team-lists__person-role">VP of Engineering</p>
    <p class="team-lists__person-description">Fujii is the VP of Engineering of WealthPark.<br> <br>As VPoE, to lead international engineering organization and developments.<br>Also as a FrontEnd engineer, Fujii is working as individual contributor. <br>Fujii has experience to lead international organization and FrontEnd/BackEnd/Mobile/FujiiStack organization.<br>Before joining WealthPark, Fujii worked as Engineering Manager in Rakuten for OTA(Online Travel Agency) service.<br> <br>Fujii holds B.S in Mathematical information science of Tokyo University of Science</p>
    <div class="team-lists__person-sns">
      <a href="https://twitter.com/taka_ft" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_twitter.png" alt="Twitter" /></a>
      <a href="https://www.linkedin.com/in/takahiro-fujii-221a7461/" target="_blank"><img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/ic_linkedin.png" alt="LinkedIn" /></a>
    </div>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-13" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_kajiro.png" alt="Yoshitaro Kajiro"></p>
    <p class="team-lists__person-name">Yoshitaro Kajiro</p>
    <p class="team-lists__person-role">Executive Officer<br>Fintech Business Division<br>Head of Sourcing and Asset Management<br>/ WealthPark Alternative Investments(*)<br>Director</p>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>












<!-- </div> -->
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<script>
  $("#modal-open").click(
  	function(){
      //キーボード操作などにより、オーバーレイが多重起動するのを防止する
      $(this).blur() ;	//ボタンからフォーカスを外す
      //新しくモーダルウィンドウを起動しない
      if($("#modal-overlay")[0]) return false ;
      $("body").append('<div id="modal-overlay" class="modal-overlay"></div>');
      $("#modal-overlay").fadeIn("slow");
      $("#modal-content").fadeIn("slow");
  	}
  );
  $("#modal-overlay, #modal-close").unbind().click(function(){
    $("#modal-content, #modal-overlay").fadeOut("slow",function(){
    	$("#modal-overlay").remove();
    });
  });
</script>
<script type="text/javascript">
  $('.slider').slick({
    // autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
  });
</script>
<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>
