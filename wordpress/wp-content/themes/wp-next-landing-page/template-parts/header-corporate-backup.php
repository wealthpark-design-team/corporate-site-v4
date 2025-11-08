<?php 
  $home = "Home";
  $service = __("menu.service", 'wp-next-landing-page');
  $news = __("menu.news", 'wp-next-landing-page');
  $pressRelease = __("menu.press-release", 'wp-next-landing-page');
  $releaseNotes = __("menu.release-notes", 'wp-next-landing-page');
  $wpBusiness = __("menu.wp-business-title", 'wp-next-landing-page');
  $wpBusinessDesc = __("menu.wp-business-desc", 'wp-next-landing-page');
  $wpAssetManagement = __("menu.wp-am-title", 'wp-next-landing-page');
  $wpAssetManagementDesc = __("menu.wp-am-desc", 'wp-next-landing-page');
  $ownerAppTitle = __("owner-app-title", 'wp-next-landing-page');
  $ownerAppDesc = __("owner-app-desc", 'wp-next-landing-page');
  $wpAssetManagementDesc = __("menu.wp-am-desc", 'wp-next-landing-page');
  $articles = __("menu.articles", 'wp-next-landing-page');
  $companyProfile = __("menu.company-profile", 'wp-next-landing-page');
  $company = __("menu.company", 'wp-next-landing-page');
  $careers = __("menu.careers", 'wp-next-landing-page');
  $midRecruitment = __("menu.mid-recruitment", 'wp-next-landing-page');
  $newGrads = __("menu.newgrad-recruitment", 'wp-next-landing-page');
  $park = ($current_lang == "ja") ? "採用オウンドメディア「Park」" : "Recruitment Media - Park";
  $ownedmedia = ($current_lang == "ja") ? "オウンドメディア" : "Media";
  $wpBlog = __("menu.wp-blog", 'wp-next-landing-page');
  $wpl = __("menu.wpl", 'wp-next-landing-page');
  $specialFeature = __("menu.special-feature", 'wp-next-landing-page');
  $eventReport = __("menu.event-report", 'wp-next-landing-page');
  $kpv = __("menu.kpv", 'wp-next-landing-page');
  $interviews = __("menu.interviews", 'wp-next-landing-page');
  $pmCompaniesPC = "不動産管理会社の方";
  $pmCompaniesSP = "不動産管理会社向け";
  $contact = __("menu.contact", 'wp-next-landing-page');
  $signIn = __("menu.sign-in", 'wp-next-landing-page');
  $mobileSignIn = ($current_lang == "ja") ? "パソコン版WealthPark" : __("menu.sign-in", 'wp-next-landing-page');;
  $servicePageHere = "サービスページはこちら";
  $loginPageHere = "ログインページはこちら";
?>
<?php if (is_page('lp-product-us') || is_parent_slug() === 'lp-product-us') : ?>
  <!-- CORPORATE EN LP -->
  <header class="header--corporate header--common header--dark">
    <!-- DESKTOP -->
    <nav class="menu__navbar menu__navbar--pc">
      <div class="menu__navbar__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/app/logo_inverse.svg" alt="WealthPark" /></a>
      </div>
      <ul class="menu__list">
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $service; ?></a>      
          <ul class="menu__dropdown menu__dropdown--edge">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business" class="menu__dropdown-list-link">
                <?php echo $wpBusinessDesc ?>
                <small><?php echo $wpBusiness ?></small>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
                <a href="https://owner-app.wealth-park.com" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                  <?php echo $ownerAppDesc ?>
                  <small><?php echo $ownerAppTitle ?></small>
                </a>
              </li>
            <li class="menu__dropdown-list-item">
              <a href="https://wealthpark-ret.com/" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                <?php echo $wpAssetManagementDesc ?>
                <small><?php echo $wpAssetManagement ?></small>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $company; ?></a>
          <ul class="menu__dropdown menu__dropdown--edgex2">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>news/" class="menu__dropdown-list-link">
              <?php echo $news; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>corporate/company/" class="menu__dropdown-list-link">
                <?php echo $companyProfile; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>wealthpark-blog/" class="menu__dropdown-list-link">
                <?php echo $wpBlog; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/careers')); ?>" class="menu__dropdown-list-link">
                <?php echo $midRecruitment ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>corporate/contact/" class="menu__dropdown-list-link">
                <?php echo $contact ?>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu__list-item menu__first-level menu__list-item-btn">
          <a class="menu__list-link-btn menu__list-link-btn--white" href="https://owner.wealth-park.com/" target="_blank"><?php echo $signIn; ?></a>
        </li>
      </ul>
    </nav>
    <!-- MOBILE -->
    <nav class="menu__navbar menu__navbar--sp">
      <div class="menu__navbar--mobile">
        <div class="menu__navbar__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/app/logo_inverse.svg" alt="WealthPark" /></a>
        </div>
        <div class="menu__burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="menu__list-container">
        <ul class="menu__list--mobile">
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/en')); ?>"><?php echo $home; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $service; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business" class="menu__dropdown-list-link">
                  <?php echo $wpBusinessDesc ?>
                  <small><?php echo $wpBusiness ?></small>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="https://wealthpark-ret.com/" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                  <?php echo $wpAssetManagementDesc ?>
                  <small><?php echo $wpAssetManagement ?></small>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown menu__first-level--last">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $company; ?></a>
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>news/" class="menu__dropdown-list-link">
                <?php echo $news; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>corporate/company/" class="menu__dropdown-list-link">
                  <?php echo $companyProfile; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>wealthpark-blog/" class="menu__dropdown-list-link">
                  <?php echo $wpBlog; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/careers')); ?>" class="menu__dropdown-list-link">
                  <?php echo $midRecruitment ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>corporate/contact/" class="menu__dropdown-list-link">
                  <?php echo $contact ?>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu__list-item menu__first-level menu__list-item-btn">
            <a class="menu__list-link-btn menu__list-link-btn--white" href="https://owner.wealth-park.com/" target="_blank">
              <?php echo $signIn; ?>
            </a>
          </li>
          <li class="menu__list-item menu__first-level">
            <ul class="menu__sns--list">
              <li>
                <a href="<?php _e("footer.facebook-link", 'wp-next-landing-page'); ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/ico_facebook.svg" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/wealthpark/" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/ico_in.svg" alt="in" />
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCvTChmtXoEokx8vsWda8aNg" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/ico_youtube.svg" alt="youtube" />
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>
<?php else : ?>  
  <!-- CORPORATE ALL PAGES -->
  <header class="header--corporate header--common header--dark">
    <!-- DESKTOP -->
    <nav class="menu__navbar menu__navbar--pc">
      <div class="menu__navbar__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/app/logo_inverse.svg" alt="WealthPark" /></a>
      </div>
      <ul class="menu__list">
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $news; ?></a>
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>news/" class="menu__dropdown-list-link">
              <?php echo $news; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/business/release-note')); ?>" class="menu__dropdown-list-link">
                <?php echo $releaseNotes; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="https://prtimes.jp/main/html/searchrlp/company_id/40576" target="_blank" class="menu__dropdown-list-link menu__dropdown-list-link--external">
                <?php echo $pressRelease; ?>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $service; ?></a>      
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business" class="menu__dropdown-list-link">
                <?php echo $wpBusinessDesc ?>
                <small><?php echo $wpBusiness ?></small>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="https://owner-app.wealth-park.com" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                <?php echo $ownerAppDesc ?>
                <small><?php echo $ownerAppTitle ?></small>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="https://wealthpark-ret.com/" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                <?php echo $wpAssetManagementDesc ?>
                <small><?php echo $wpAssetManagement ?></small>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level">
          <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>corporate/company/"><?php echo $companyProfile; ?></a>
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $careers; ?></a>      
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/careers')); ?>" class="menu__dropdown-list-link">
                <?php echo $midRecruitment ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/career/new-graduates/')); ?>" class="menu__dropdown-list-link">
                <?php echo $newGrads ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/park')); ?>"class="menu__dropdown-list-link"> 
                <?php echo $park ?>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $articles; ?></a>
          <ul class="menu__dropdown menu__dropdown--edge">
            <li class="menu__dropdown-heading"><?php echo $ownedmedia; ?></li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>wealthpark-blog/" class="menu__dropdown-list-link">
                <?php echo $wpBlog; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="https://wealthpark-lab.com" target="_blank" class="menu__dropdown-list-link menu__dropdown-list-link--external">
                <?php echo $wpl; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/park')); ?>" class="menu__dropdown-list-link">
                <?php echo $park; ?>
              </a>
            </li>
            <li class="menu__dropdown__divider"></li>
            <li class="menu__dropdown-heading"><?php echo $specialFeature; ?></li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/seminar" class="menu__dropdown-list-link">
                <?php echo $eventReport; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>tag/keypersons-voice/" class="menu__dropdown-list-link">
                <?php echo $kpv; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/park_category/person/')); ?>" class="menu__dropdown-list-link">
                <?php echo $interviews; ?>
              </a>
            </li>
          </ul>
        </li>
        <?php if ($current_lang == "ja") : ?>
          <li class="menu__list-item menu__first-level menu__list-item-btn">
            <a class="menu__list-link-btn menu__list-link-btn--blue" href="<?php echo esc_url(home_url('/')); ?>business/"><?php echo $pmCompaniesPC; ?></a>
          </li>
        <?php else : ?>  
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>corporate/contact/"><?php _e("menu.contact", 'wp-next-landing-page'); ?></a>
          </li>
        <?php endif; ?>
        <li class="menu__list-item menu__first-level menu__list-item-btn">
          <a class="menu__list-link-btn menu__list-link-btn--white" href="https://owner.wealth-park.com/" target="_blank">
            <?php echo $signIn; ?>
          </a>
        </li>
      </ul>
    </nav>
    <!-- MOBILE -->
    <nav class="menu__navbar menu__navbar--sp">
      <div class="menu__navbar--mobile">
        <div class="menu__navbar__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/app/logo_inverse.svg" alt="WealthPark" /></a>
        </div>
        <div class="menu__burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="menu__list-container">
        <ul class="menu__list--mobile">
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>"><?php echo $home; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $news; ?></a>
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>news/" class="menu__dropdown-list-link">
                  <?php echo $news; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/business/release-note')); ?>" class="menu__dropdown-list-link">
                  <?php echo $releaseNotes; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="https://prtimes.jp/main/html/searchrlp/company_id/40576" target="_blank" class="menu__dropdown-list-link menu__dropdown-list-link--external">
                  <?php echo $pressRelease; ?>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $service; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business" class="menu__dropdown-list-link">
                  <?php echo $wpBusinessDesc ?>
                  <small><?php echo $wpBusiness ?></small>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="https://owner-app.wealth-park.com" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                  <?php echo $ownerAppDesc ?>
                  <small><?php echo $ownerAppTitle ?></small>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="https://wealthpark-ret.com/" class="menu__dropdown-list-link menu__dropdown-list-link--external" target="_blank">
                  <?php echo $wpAssetManagementDesc ?>
                  <small><?php echo $wpAssetManagement ?></small>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>corporate/company/"><?php echo $companyProfile; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $careers; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/careers')); ?>" class="menu__dropdown-list-link">
                  <?php echo $midRecruitment ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/career/new-graduates/')); ?>" class="menu__dropdown-list-link">
                  <?php echo $newGrads ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/park')); ?>"class="menu__dropdown-list-link"> 
                  <?php echo $park ?>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown menu__parent-dropdown--ownedmedia">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $articles; ?></a>
            <ul class="menu__dropdown menu__dropdown--edge">
              <li class="menu__dropdown-heading"><?php echo $ownedmedia; ?></li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>wealthpark-blog/" class="menu__dropdown-list-link">
                  <?php echo $wpBlog; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="https://wealthpark-lab.com" target="_blank" class="menu__dropdown-list-link menu__dropdown-list-link--external">
                  <?php echo $wpl; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/park')); ?>" class="menu__dropdown-list-link">
                  <?php echo $park; ?>
                </a>
              </li>
              <li class="menu__dropdown-heading"><?php echo $specialFeature; ?></li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/seminar" class="menu__dropdown-list-link">
                  <?php echo $eventReport; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>tag/keypersons-voice/" class="menu__dropdown-list-link">
                  <?php echo $kpv; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/park_category/person/')); ?>" class="menu__dropdown-list-link">
                  <?php echo $interviews; ?>
                </a>
              </li>
            </ul>
          </li>
          <?php if ($current_lang == "ja") : ?>
            <li class="menu__list-item menu__first-level menu__list-item-btn">
              <a class="menu__list-link-btn menu__list-link-btn--blue" href="<?php echo esc_url(home_url('/')); ?>business/">
                <?php echo $pmCompaniesSP; ?>
                <br>
                <span><?php echo $servicePageHere; ?></span>
              </a>
            </li>
          <?php else : ?>  
            <li class="menu__list-item menu__first-level menu__first-level--last">
              <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>corporate/contact/"><?php _e("menu.contact", 'wp-next-landing-page'); ?></a>
            </li>
          <?php endif; ?>
          <li class="menu__list-item menu__first-level menu__list-item-btn">
            <a class="menu__list-link-btn menu__list-link-btn--white" href="https://owner.wealth-park.com/" target="_blank">
              <?php echo $mobileSignIn; ?> <br>
              <?php if ($current_lang == "ja") : ?>
                <span><?php echo $loginPageHere; ?></span>
              <?php endif; ?>
            </a>
          </li>
          <li class="menu__list-item menu__first-level">
            <ul class="menu__sns--list">
              <li>
                <a href="<?php _e("footer.facebook-link", 'wp-next-landing-page'); ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/ico_facebook.svg" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/wealthpark/" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/ico_in.svg" alt="in" />
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCvTChmtXoEokx8vsWda8aNg" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/ico_youtube.svg" alt="youtube" />
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php include "breadcrumbs-corporate.php" ?>
<?php endif; ?>