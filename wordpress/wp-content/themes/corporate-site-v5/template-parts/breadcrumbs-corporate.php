<?php
  $URI = $_SERVER['REQUEST_URI'];
  $title = str_replace('<br>','' ,get_the_title());
  $home = 'Home';
  $wealthPark = 'WealthPark';
  $dxBusiness = '不動産デベロッパー向けDX事業';
  $fintechBusiness = 'Fintech Consumer事業本部（Fintech事業）';
  $retBusiness = 'WealthPark RealEstate Technologies';
  $titleLink = '<li><a href=' . get_permalink() . '>' . $title . '</a></li>';
  $menuCompany = __("menu.company", 'wp-next-landing-page');
  $menuSecurity = __("menu.security", 'wp-next-landing-page');
  $menuExternalTransmission = __("corporate.external-user-information", 'wp-next-landing-page');
  $menuPrivacy = __("menu.privacy", 'wp-next-landing-page');
  $pressKit = __("menu.press-kit", 'wp-next-landing-page');
  $termsOfUse = __("menu.terms", 'wp-next-landing-page');

  $queriedObj = get_queried_object();
  $objName = $queriedObj->name;
  $termLink = get_term_link($queriedObj->term_id);
  
  $langArrayURI = ['/ja/', '/tc/', '/sc/', '/en/']; // Each language Top Page URI

  if ($current_lang == "en") {
    $business = "Business";
    $design = "Design";
    $engineering = "Engineering";
    $corporate = "Corporate";
  } else {
    $business = "ビジネス";
    $design = "デザイン";
    $engineering = "エンジニア";
    $corporate = "コーポレート";
  }
?>
<?php if (!in_array($URI, $langArrayURI)) : ?>
<section class="breadcrumbs--global breadcrumbs--global-corporate ">
    <ul>
      <li>
        <img src="<?php echo get_template_directory_uri() ?>/img/business-icon.svg" alt="icon">
        <a href="/"><?php echo $wealthPark; ?></a>
      </li>
      <?php
      if (is_post_type_archive('news') || is_singular('news') || is_tax('news_category')) {
        echo '<li><a href="/news">' . $news . '</a></li>';
        if (is_singular('news')) {
          echo $titleLink;
        }
        if(is_tax('news_category')) {
          echo '<li><a href=' . $termLink . '>' . $objName . '</a></li>';
        }
      }
      if (is_page('company')) {
        echo '<li><a href=' . get_permalink() . '>' . $companyProfile . '</a></li>';
      }
      if (is_page('careers') || 
      is_parent_slug() === 'career' || 
      is_singular('careers') || 
      is_tax('careers_category') || 
      is_tax('careers_business') || 
      is_tax('careers_corporate') ||
      is_tax('careers_design') || 
      is_tax('careers_engineering') ||
      is_post_type_archive('park') ||
      is_category('park') ||
      is_tax('park_category') ||
      is_tax('park_tag') ||
      is_singular('park'))
      {
        echo '<li>' . $careers . '</li>';
        if(is_page('careers') || is_tax('careers_business') || is_tax('careers_corporate') || is_tax('careers_design') || is_tax('careers_engineering')) {
          echo '<li><a href="/careers">' . $midRecruitment . '</a></li>';
          if(is_tax('careers_business')){
            echo '<li>' . $business .' </li>';
          }elseif(is_tax('careers_corporate')) {
            echo '<li>' . $corporate .' </li>';
          }elseif(is_tax('careers_engineering')) {
            echo '<li>' . $engineering .' </li>';
          }elseif(is_tax('careers_design')) {
            echo '<li>' . $design .' </li>';
          }
          if(!is_page('careers')){
            echo '<li><a href=' . $termLink . '>' . $objName . '</a></li>';
          }
        }
        if(is_page('new-graduates'))  {
          echo '<li><a href=' . get_permalink() . '>' . $newGrads . '</a></li>';
        }
        if(is_page('wpb') || is_page('wai') || is_page('ret') || is_singular('careers')){
          echo '<li><a href="/careers/">' . $midRecruitment . '</a></li>';
          if(is_page('wpb'))  {
            echo '<li><a href=' . get_permalink() . '>' . $dxBusiness . '</a></li>';
          }
          if(is_page('wai'))  {
            echo '<li><a href=' . get_permalink() . '>' . $fintechBusiness . '</a></li>';
          }
          if(is_page('ret'))  {
            echo '<li><a href=' . get_permalink() . '>' . $retBusiness . '</a></li>';
          }
          if(is_singular('careers')){ 
            echo $titleLink;
          }
        }
        if(is_post_type_archive('park') || is_singular('park') || is_tax('park_category') || is_tax('park_tag')) {
          echo '<li><a href="/park">' . $park . '</a></li>';
          if(is_tax('park_tag') || is_tax('park_category'))  {
            echo '<li><a href=' . $termLink . '>' . $objName . '</a></li>';
          }
          if(is_singular('park')){
            echo $titleLink;
          }
        }
      }
      if(is_post_type_archive('wealthpark') || is_singular('wealthpark') || is_category() || is_tag()) {
        echo '<li>' . $articles . '</li>';
        echo '<li><a href="/wealthpark-blog">' . $wpBlog . '</a></li>';
        if(is_category() || is_tag())  {
          echo '<li><a href=' . $termLink . '>' . $objName . '</a></li>';
        }
        if(is_singular('wealthpark')){
          echo $titleLink;
        }
      }
      if(is_page('contact') || is_parent_slug() === 'contact' || is_page('corporate-contact-recruit')) {
        echo '<li><a href="/corporate/contact/">'.$contact.'</a></li>';
        if(is_parent_slug() === 'contact' || is_page('corporate-contact-recruit')){
          echo '<li><a href=' . get_permalink() . '>' . $title . '</a></li>';
        }
      }
      if(is_parent_slug() === 'corporate' || is_page('security') || is_page('press-kit')) {
        if(!is_page('contact')){
          echo '<li>' . $menuCompany . '</li>';
        }
        if(is_page('security')) {
          echo '<li><a href=' . get_permalink() . '>' . $menuSecurity . '</a></li>';
        }
        if(is_page('external-transmission-of-user-information')) {
          echo '<li><a href=' . get_permalink() . '>' . $menuExternalTransmission . '</a></li>';
        }
        if(is_page('privacy-policy')) {
          echo '<li><a href=' . get_permalink() . '>' . $menuPrivacy . '</a></li>';
        }
        if(is_page('press-kit')) {
          echo '<li><a href=' . get_permalink() . '>' . $pressKit . '</a></li>';
        }
        if(is_page('terms-of-use')) {
          echo '<li><a href=' . get_permalink() . '>' . $termsOfUse . '</a></li>';
        }
      }
      ?>
    </ul>
</section>
<?php endif; ?>



