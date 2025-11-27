<?php $current_lang = qtrans_getLanguage(); ?>
<div class="container main-footer">
  <?php _e("footer_banner", 'wp-next-landing-page'); ?>
  <div class="main-footer__inner">
    <div class="main-footer__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/footer_logo_wp.svg" alt="WealthPark" /></a>
    </div>
    <div class="main-footer__navigation">
      <div class="main-footer__navigation-list">
        <p class="main-footer__navigation-title"><?php _e("footer.menu.service", 'wp-next-landing-page'); ?></p>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/business/')); ?>"><?php _e("footer.menu-wpb", 'wp-next-landing-page'); ?></a></li>
          <li><a href="https://owner-app.wealth-park.com" target="_blank" rel="noopener noreferrer"><?php _e("owner-app-desc", 'wp-next-landing-page'); ?> <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
          <li><a href="https://wealthpark-ret.com/" target="https://wealthpark-ret.com/"><?php _e("footer.menu-wpam", 'wp-next-landing-page'); ?> <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
          <li><a href="https://wealthpark-alt.com/" target="_blank" rel="noopener noreferrer">WealthPark Investment <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
          <li><?php _e("footer.menu-lab_002", 'wp-next-landing-page'); ?> <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></li>
          <li><a href="<?php echo esc_url(home_url('/wealthpark-blog')); ?>">WealthPark Blog</a></li>
          <li>
            <a href="<?php echo esc_url(home_url('/park')); ?>">
              <?php echo ($current_lang == "ja") ? "採用オウンドメディア「Park」" : "Recruitment Media - Park";?>
            </a>
          </li>
        </ul>
      </div>
      <div class="main-footer__navigation-list">
        <p class="main-footer__navigation-title"><?php _e("footer.menu.product", 'wp-next-landing-page'); ?></p>
        <ul>
          <li><a href="https://itunes.apple.com/jp/app/wealth-park-real-estate-investment/id1068127268" target="_blank" rel="noopener noreferrer">App Store <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
          <li><a href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&amp;hl=ja" target="_blank" rel="noopener noreferrer">Google Play <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
          <li><a href="https://owner.wealth-park.com/" target="_blank" rel="noopener noreferrer"><?php _e("footer.menu-web-app", 'wp-next-landing-page'); ?> <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
        </ul>
      </div>
      <div class="main-footer__navigation-list">
        <p class="main-footer__navigation-title"><?php _e("footer.menu.company", 'wp-next-landing-page'); ?></p>
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo ($current_lang == "ja") ? "企業サイトTOP" : "Corporate";?>
            </a>
          </li>
          <?php if (is_page('asset-management') || is_parent_slug() === 'asset-management' || is_post_type_archive("help_wpam") || is_tax('help_am_topics') || is_singular("help_wpam") || is_page('uk') || is_parent_slug() === 'uk'): ?>
            <li><a href="<?php echo esc_url(home_url('/asset-management/company-profile/')); ?>"><?php _e("menu.company-profile", 'wp-next-landing-page'); ?></a></li>
          <?php else: ?>
            <li><a href="<?php echo esc_url(home_url('/corporate/company')); ?>"><?php _e("menu.company-profile", 'wp-next-landing-page'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/asset-management/company-profile/')); ?>"><?php _e("menu.wpam.company-profile", 'wp-next-landing-page'); ?></a></li>
          <?php endif ?>
          <li><a href="<?php echo esc_url(home_url('/news')); ?>"><?php _e("menu.news", 'wp-next-landing-page'); ?></a></li>
          <li><a href="https://prtimes.jp/main/html/searchrlp/company_id/40576" target="_blank" rel="noopener noreferrer"><?php _e("menu.press-release", 'wp-next-landing-page'); ?> <img src="<?php echo get_template_directory_uri() ?>/img/external_link.svg" alt="Open in a new tab" /></a></li>
          <li><a href="<?php echo esc_url(home_url('/press-kit')); ?>"><?php _e("menu.press-kit", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url(home_url('/tag/event-report/')); ?>"><?php _e("menu.event-report", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url(home_url('/careers')); ?>"><?php _e("menu.careers", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url(home_url('/corporate/contact/')); ?>"><?php _e("footer.menu.contact", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/corporate/terms-of-use' ) ); ?>"><?php _e("menu.terms", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/corporate/privacy-policy' ) ); ?>"><?php _e("menu.privacy", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/corporate/external-transmission-of-user-information/' ) ); ?>"><?php _e("corporate.external-user-information", 'wp-next-landing-page'); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/security' ) ); ?>"><?php _e("menu.security", 'wp-next-landing-page'); ?></a></li>          
        </ul>
      </div>
    </div>
    <div class="main-footer__banner">
      <?php if (is_page('asset-management') || is_parent_slug() === 'asset-management' || is_post_type_archive("help_wpam") || is_tax('help_am_topics') || is_singular("help_wpam") || is_page('uk') || is_parent_slug() === 'uk'): ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri() ?>/img/logo_isms_2.png" alt="ISMS" />
        <p><?php _e("footer.isms.certified-note", 'wp-next-landing-page'); ?></p>
      <?php endif ?>
    </div>
  </div>
</div>
