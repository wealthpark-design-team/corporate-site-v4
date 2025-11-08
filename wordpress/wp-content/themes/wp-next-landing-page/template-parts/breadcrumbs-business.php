<?php
  $URI = $_SERVER['REQUEST_URI'];
  $termName = $term->name;
  $slug = $term->slug;
  $title = str_replace('<br>','' ,get_the_title());
  $corpsite = 'WealthPark企業サイト';
  $businessSite = 'WealthParkビジネス';
  $featuresPrice = '機能/価格';
  $featuresPriceList = '機能一覧';
  $implementationSupport = '導入支援';
  $customerSuccess = '導入支援・サポート';
  $kaizen = '顧客課題解決主義';
  $promise = '管理会社様との約束';
  $caseStudy = '導入事例';
  $caseStudyMore = '導入事例をみる';
  $pmList = '導入企業をさがす';
  $help = 'ヘルプ';
  $supportCenter = '不動産オーナー向けサポートセンター';
  $download = 'お役立ち資料のダウンロード';
  $documentTitle = get_field("document_name");
  $roadToDX = "マンガでわかる！オーナーアプリで不動産管理DXへの道";
  $mangaForOwners = "【オーナー編】マンガでわかる！スマホで便利に賃貸経営!";
  $titleLink = '<li><a href=' . get_permalink() . '>' . $title . '</a></li>';
?>

<section class="breadcrumbs--global">
  <ul>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/img/corp-icon.svg" alt="icon">
      <a href="/"><?php echo $corpsite; ?></a>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/img/business-icon.svg" alt="icon">
      <a href="/business"><?php echo $businessSite; ?></a>
    </li>
    <?php
    if (is_page('features') || is_parent_slug() === 'features') {
      echo '<li>' . $featuresPrice . '</li>';
      echo '<li><a href="/business/features/">' . $featuresPriceList . '</a></li>';
      if (is_parent_slug() === 'features') {
        echo $titleLink;
      }
    }
    if (is_page('customer-success') || is_parent_slug() === 'kaizen' || is_page('kaizen') || is_page('promise')) {
      echo '<li>' . $implementationSupport . '</li>';
      if (is_page('customer-success')) {
        echo '<li><a href=' . get_permalink() . '>' . $customerSuccess . '</a></li>';
      } else if (is_page('kaizen') || is_parent_slug() === 'kaizen') {
        echo '<li><a href="/businesss/kaizen">' . $kaizen . '</a></li>';
        if (is_parent_slug() === 'kaizen') {
          echo $titleLink;
        }
      } else if (is_page('promise')) {
        echo '<li><a href=' . get_permalink() . '>' . $promise . '</a></li>';
      }
    }
    if (is_singular('case_study') || is_post_type_archive('case_study')) {
      echo '<li>' . $caseStudy . '</li>';
      echo '<li><a href="/business/case-study/">' . $caseStudyMore . '</a></li>';
      if (is_single()) {
        echo $titleLink;
      }
    }
    if (is_tax('features')) {
      echo '<li><a href="/business/case-study/">' . $caseStudy . '</a></li>';
      echo '<li><a href="/business/case-study/features/' . $slug . '">' . $termName . '</a></li>';
    }
    if (is_post_type_archive('wpb_pm_list') || is_tax('wpb_area')) {
      echo '<li>' . $caseStudy . '</li>';
      echo '<li><a href="/business/pm-list/">' . $pmList . '</a></li>';
      if (is_tax('wpb_area')) {
        echo '<li><a href="/wpb_area/' . $slug . '">' . $termName . '</a></li>';
      }
    }
    if (is_post_type_archive("help_wpb") || is_singular('help_wpb') || is_page('faq') || is_page('release-note') || is_tax('help_topics')) {
      echo '<li>' . $help . '</li>';
      if (is_page('faq') || is_page('release-note')) {
        echo $titleLink;
      } else if (is_post_type_archive("help_wpb") || is_singular('help_wpb')) {
        echo '<li><a href="/help_owner/">' . $supportCenter . '</a></li>';
        if (is_single()) {
          echo $titleLink;
        }
      } else if (is_tax('help_topics')) {
        echo '<li><a href="/help_owner/">' . $supportCenter . '</a></li>';
        echo '<li><a href="/help/topics/' . $slug . '">' . $termName . '</a></li>';
      }
    } 
    if (is_page('business/download') || is_parent_slug() === 'download') {
      echo '<li><a href="/business/download/">' . $download . '</a></li>';
      if(is_parent_slug() === 'download') {
        if (strpos($URI, "completed") !== false){
          echo "<li>資料請求フォーム送信完了</li>";
        }
        else {
          echo '<li><a href=' . get_permalink() . '>' . $documentTitle . '</a></li>';
        }
      }
    }
    if (is_parent_slug() === 'lp') {
      if(is_page('business/lp/road-to-dx')) {
        echo '<li><a href="/business/lp/road-to-dx/">' . $roadToDX . '</a></li>';
      }else if(is_page('business/lp/manga-for-owners')) {
        echo '<li><a href="/business/lp/manga-for-owners/">' . $mangaForOwners . '</a></li>';
      }
    }
    if (is_page('business/seminar')) {
      echo '<li><a href=' . get_permalink() . '>' . $title . '</a></li>';
    }
    if (is_page('business/contact')) {
      echo '<li><a href=' . get_permalink() . '>お問い合わせ</a></li>';
    }
    ?>
  </ul>
</section>




