
<?php 
  $home = "WealthParkビジネス TOP";
  $features_price = "機能/価格";
  $features_top = "機能一覽 / 価格表(TOP)";
  $features_cashflow = "収支明細・報告書の電子化";
  $features_chat = "チャットコミュニケーション";
  $features_activity = "アクティビティ機能";
  $features_document_storage = "オーナーアプリでの情報共有";
  $features_multilang = "多言語対応";
  $features_security = "情報セキュリティ対策";
  $customer_success = "導入支援";
  $customer_success_about = "導入支援・サポートについて";
  $kaizen = "顧客課題解決主義";
  $promise = "管理会社様との約束";
  $case_study = "導入事例";
  $case_top = "導入事例一覽(TOP)";
  $case_study_more = "導入事例をみる";
  $pm_list = "導入企業をさがす";
  $help = "ヘルプ";
  $faq = "導入に関するよくある質問";
  $help_owner = '不動産オーナー向けサポート<br class="hidden-sp">センター';
  $help_releaseNotes = "プロダクト改善・新機能";
  $business_download = "資料";
  $documents_download = "資料ダウンロード";
  $seminar = "セミナー";
  $company_info = "企業情報";
  $company_profile = __("menu.company-profile", 'wp-next-landing-page');
  $company_top = "企業サイトTOP";
  $company = "会社概要";
  $news = __("menu.news", 'wp-next-landing-page');
  $articles = "記事";
  $company = __("menu.company", 'wp-next-landing-page');
  $careers = __("menu.careers", 'wp-next-landing-page');
  $contact = __("menu.contact", 'wp-next-landing-page');
  $signIn = __("menu.sign-in", 'wp-next-landing-page');
  $owner_sama = "オーナー様";
  $ownerApp = "オーナーアプリ";
  $owner_service = "オーナー様向けサービス";
  $pcwp = "パソコン版WealthPark";
  $support_center = "サポートセンター";
  $pm_search = "導入企業をさがす";
  $wp_about = "WealthParkについて";
  $tel ="03-6409-6860";
?>

<?php if (is_page('business/lp/product') || is_page('business/lp/promise')): ?>
  <header class="header--business header--common header--dark"> 
<?php else: ?>
  <header class="header--business header--common header--light"> 
<?php endif; ?>
    <!-- DESKTOP -->
    <nav class="menu__navbar menu__navbar--pc">
      <div class="menu__navbar__logo menu__navbar__logo--business">
        <a href="<?php echo esc_url(home_url('/business')); ?>">
          <?php if (is_page('business/lp/product') || is_page('business/lp/promise')): ?>
            <img src="<?=get_template_directory_uri()?>/app/img/business_logo_white.png" class="business-logo" alt="WealthPark Business" />
          <?php else: ?>
            <img src="<?=get_template_directory_uri()?>/app/img/business_logo_black.svg" class="business-logo" alt="WealthPark Business" />
          <?php endif; ?>
        </a>
      </div>
      <ul class="menu__list">
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $features_price; ?></a>
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/" class="menu__dropdown-list-link">
              <?php echo $features_top; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/cashflow/" class="menu__dropdown-list-link">
                <?php echo $features_cashflow; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/chat/" class="menu__dropdown-list-link">
                <?php echo $features_chat; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/workflow/" class="menu__dropdown-list-link">
                <?php echo $features_activity; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/document-storage/" class="menu__dropdown-list-link">
                <?php echo $features_document_storage; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/multiple-language/" class="menu__dropdown-list-link">
                <?php echo $features_multilang; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/features/security/" class="menu__dropdown-list-link">
                <?php echo $features_security; ?>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $customer_success; ?></a>      
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/customer-success/" class="menu__dropdown-list-link">
                <?php echo $customer_success_about; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/kaizen/" class="menu__dropdown-list-link">
                <?php echo $kaizen; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/lp/promise/" class="menu__dropdown-list-link">
                <?php echo $promise; ?>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $case_study; ?></a>      
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/case-study/" class="menu__dropdown-list-link">
                <?php echo $case_study_more; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/pm-list/" class="menu__dropdown-list-link">
                <?php echo $pm_list; ?>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $help; ?></a>      
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/faq/" class="menu__dropdown-list-link">
                <?php echo $faq; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>help_owner" class="menu__dropdown-list-link">
                <?php echo $help_owner; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>business/release-note" class="menu__dropdown-list-link">
                <?php echo $help_releaseNotes; ?>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level">
          <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>business/download/"><?php echo $business_download; ?></a>
        </li>
        <li class="menu__list-item menu__first-level">
          <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>business/seminar/"><?php echo $seminar; ?></a>
        </li>
        <li class="menu__list-item menu__first-level menu__parent-dropdown">
          <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $company_info; ?></a>      
          <ul class="menu__dropdown">
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="menu__dropdown-list-link" target="_blank">
                <?php echo $company_top; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>corporate/company/" class="menu__dropdown-list-link" target="_blank">
                <?php echo $company_profile; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>news/" class="menu__dropdown-list-link" target="_blank"> 
                <?php echo $news; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>wealthpark-blog/" class="menu__dropdown-list-link" target="_blank"> 
                <?php echo $articles; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>careers/" class="menu__dropdown-list-link" target="_blank"> 
                <?php echo $careers; ?>
              </a>
            </li>
            <li class="menu__dropdown-list-item">
              <a href="<?php echo esc_url(home_url('/')); ?>corporate/contact/" class="menu__dropdown-list-link" target="_blank"> 
                <?php echo $contact; ?>
              </a>
            </li>
          </ul> 
        </li>
        <li class="menu__list-item menu__first-level">
          <a class="menu__list-link" href="https://owner-app.wealth-park.com/" target="_blank" rel="noopener noreferrer"><?php echo $ownerApp; ?></a>
        </li>
        <li class="menu__list-item menu__first-level menu__list-item-btn">
          <a class="menu__list-link-btn menu__list-link-btn--black" href="<?php echo esc_url(home_url('/')); ?>business/contact/"><?php echo $contact; ?></a>
        </li>
      </ul>
    </nav>
<!-- MOBILE -->
    <nav class="menu__navbar menu__navbar--sp">
      <div class="menu__navbar--mobile">
        <div class="menu__navbar__logo menu__navbar__logo--business">
          <a href="<?php echo esc_url(home_url('/business')); ?>">
            <?php if (is_page('business/lp/product') || is_page('business/lp/promise')): ?>
              <img src="<?=get_template_directory_uri()?>/app/img/business_logo_white.png" class="business-logo" alt="WealthPark Business" />
            <?php else: ?>
              <img src="<?=get_template_directory_uri()?>/app/img/business_logo_black.svg" class="business-logo" alt="WealthPark Business" />
            <?php endif; ?>
          </a>
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
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>business/"><?php echo $home; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $features_price; ?></a>
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/" class="menu__dropdown-list-link">
                <?php echo $features_top; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/cashflow/" class="menu__dropdown-list-link">
                  <?php echo $features_cashflow; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/chat/" class="menu__dropdown-list-link">
                  <?php echo $features_chat; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/workflow/" class="menu__dropdown-list-link">
                  <?php echo $features_activity; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/document-storage/" class="menu__dropdown-list-link">
                  <?php echo $features_document_storage; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/multiple-language/" class="menu__dropdown-list-link">
                  <?php echo $features_multilang; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/features/security/" class="menu__dropdown-list-link">
                  <?php echo $features_security; ?>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $customer_success; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/customer-success/" class="menu__dropdown-list-link">
                  <?php echo $customer_success_about; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/kaizen/" class="menu__dropdown-list-link">
                  <?php echo $kaizen; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/lp/promise/" class="menu__dropdown-list-link">
                  <?php echo $promise; ?>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $case_study; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/case-study/" class="menu__dropdown-list-link">
                  <?php echo $case_study_more; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/pm-list/" class="menu__dropdown-list-link">
                  <?php echo $pm_list; ?>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $help; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/faq/" class="menu__dropdown-list-link">
                  <?php echo $faq; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>help_owner" class="menu__dropdown-list-link">
                  <?php echo $help_owner; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>business/release-note" class="menu__dropdown-list-link">
                  <?php echo $help_releaseNotes; ?>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>business/download/"><?php echo $business_download; ?></a>
          </li>
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="<?php echo esc_url(home_url('/')); ?>business/seminar/"><?php echo $seminar; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__parent-dropdown">
            <a class="menu__list-link menu__dropdown-toggle" href="javascript:void(0)"><?php echo $company_info; ?></a>      
            <ul class="menu__dropdown">
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="menu__dropdown-list-link" target="_blank">
                  <?php echo $company_top; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>corporate/company/" class="menu__dropdown-list-link" target="_blank">
                  <?php echo $company_profile; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>news/" class="menu__dropdown-list-link" target="_blank"> 
                  <?php echo $news; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>wealthpark-blog/" class="menu__dropdown-list-link" target="_blank"> 
                  <?php echo $articles; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>careers/" class="menu__dropdown-list-link" target="_blank"> 
                  <?php echo $careers; ?>
                </a>
              </li>
              <li class="menu__dropdown-list-item">
                <a href="<?php echo esc_url(home_url('/')); ?>corporate/contact/" class="menu__dropdown-list-link" target="_blank"> 
                  <?php echo $contact; ?>
                </a>
              </li>
            </ul> 
          </li>
          <li class="menu__list-item menu__first-level">
            <a class="menu__list-link" href="https://owner-app.wealth-park.com/" target="_blank" rel="noopener noreferrer"><?php echo $ownerApp; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__list-item-btn">
            <a class="menu__list-link-btn menu__list-link-btn--black" href="<?php echo esc_url(home_url('/')); ?>business/contact/"><?php echo $contact; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__list-item-btn">
            <a class="menu__list-link-btn menu__list-link-btn--black menu__list-link-btn--black-invert"href="<?php echo esc_url(home_url('/')); ?>business/download/form-001/" class="menu__dropdown-list-link"><?php echo $documents_download; ?></a>
          </li>
          <li class="menu__list-item menu__first-level menu__list-item--tel">
            <a class="menu__list-link" href="tel:<?php echo $tel; ?>">
              <?php if (is_page('business/lp/product') || is_page('business/lp/promise')): ?>
                <img src="<?php echo get_template_directory_uri() ?>/img/tel_white.svg" alt="telephone icon" />
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/img/tel.svg" alt="telephone icon" />
              <?php endif; ?>
              <?php echo $tel; ?>
            </a>
          </li>
          <li class="menu__list-item menu__first-level">
            <ul class="menu__sns--list">
              <?php if (is_page('business/lp/product') || is_page('business/lp/promise')): ?>
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
              <?php else: ?>
                <li>
                  <a href="<?php _e("footer.facebook-link", 'wp-next-landing-page'); ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/ico_facebook_black.svg" alt="facebook" />
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/company/wealthpark/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/ico_in_black.svg" alt="in" />
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCvTChmtXoEokx8vsWda8aNg" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/ico_youtube_black.svg" alt="youtube" />
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>

<?php include "breadcrumbs-business.php" ?>