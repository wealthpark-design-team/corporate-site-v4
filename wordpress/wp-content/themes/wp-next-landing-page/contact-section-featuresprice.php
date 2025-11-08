<aside class="p-fp__contact contact-section">
  <div class="p-fp__contactInner contact__inner">
    <div class="p-fp__contact--blue button--blue">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/business-contact/">
      <?php if(is_page('features') || is_parent_slug() === 'features'): ?>
        料金について問合せる
      <?php else: ?>
        お問合せ
      <?php endif; ?>
      </a>
    </div>
    <div class="p-fp__contact--white button--blue">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/business-download-contact/">資料請求</a>
    </div>
    <div class="phone">
      <i class="material-icons md-18">phone</i> <a href="tel:0366942621">03-6694-2621</a>
    </div>
  </div>
</aside>
