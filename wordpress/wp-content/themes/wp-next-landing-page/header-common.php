<?php $current_lang = qtrans_getLanguage(); ?>
<?php if (is_page('asset-management') || 
is_parent_slug() === 'asset-management' || 
is_post_type_archive("help_wpam") || 
is_tax('help_am_topics') || 
is_singular("help_wpam") || 
is_page('uk') || 
is_parent_slug() === 'uk'): ?>
  <!-- ASSET MANAGEMENT NAV -->
  <?php include "template-parts/header-asset-management.php"?>
<?php elseif (is_page('business') || 
is_page('business-dev') || 
is_parent_slug() === 'business' || 
is_page('features') || 
is_parent_slug() === 'features' || 
is_parent_slug() === 'lp' || 
is_parent_slug() === 'vision' || 
is_parent_slug() === 'kaizen' || 
is_page('business/lp/road-to-dx') || 
is_page('case') || 
is_parent_slug() === 'case' || 
is_page('business/download') || 
is_page('business/download/contact-001_completed') || 
is_page('business/contact') || 
is_page('business/contact/completed') || 
is_page('faq') || 
is_singular("case_study") || 
is_post_type_archive("case_study") || 
is_post_type_archive("help_wpb") || 
is_post_type_archive("wpb_pm_list") || 
is_tax('wpb_area') || 
is_tax('help_topics') || 
is_tax('features') || 
is_singular("help_wpb") || 
is_page(array("form-001","form-002","form-003","form-004","form-005","form-006","form-007","form-008","form-009","form-010","form-011","form-012","form-wpl-001","form-wpl-002","form-001-completed", "form-002-completed","form-003-completed","form-004-completed","form-005-completed","form-006-completed","form-007-completed","form-008-completed","form-009-completed","form-010-completed","form-011-completed","form-012-completed","form-wpl-001-completed", "form-wpl-002-completed"))):  ?>
  <!-- BUSINESS NAV -->
  <?php include "template-parts/header-business.php"?>
<?php else: ?>
  <!-- CORPORATE NAV -->
  <?php include "template-parts/header-corporate.php" ?>
<?php endif; ?>

