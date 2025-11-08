<section class="container partnerships">
  <div class="container__inner partnerships__inner">
    <div class="title-box">
    <?php if ($current_lang == "ja") { ?>
      <p class="title">パートナー</p>
      <p class="txt">※五十音順</p>                        
    <?php } else { ?>
      <p class="title">Partnerships</p>
      <p class="txt">*Alphabetical Order</p>
    <?php } ?>
    </div>
    <?php _e("app.partnership_logo", 'wp-next-landing-page'); ?>
  </div>
  <div class="container__inner partnerships__inner">
    <div class="title-box">
    <?php if ($current_lang == "ja") { ?>
      <p class="title">掲載メディア</p>
      <p class="txt">※五十音順</p>                        
    <?php } else { ?>
      <p class="title">Media</p>
      <p class="txt">*Alphabetical Order</p>
    <?php } ?>
    </div>
    <?php _e("logo.media", 'wp-next-landing-page'); ?>
  </div>
</section>