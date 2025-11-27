<?php $cleaned_path = cleanPath();?>
<div class="container sub-footer">
  <div class="sub-footer__inner">
    <div class="sub-footer__sns">
      <ul class="sub-footer__sns--list">
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
    </div>
    <div class="sub-footer__language">
      <p class="language-icon"><i class="material-icons md-18">language</i>
        <!-- <?php _e("menu.language", 'wp-next-landing-page'); ?> -->
      </p>
      <form name="sort_form">
        <select class="language-selector lang-dropdown" name="sort" onchange="dropsort()">
          <option value="">Language</option>
          <option value="<?php echo "/en".$cleaned_path;?>">English</option>
          <option value="<?php echo "/ja".$cleaned_path;?>">日本語</option>
          <option value="<?php echo "/sc".$cleaned_path;?>">简体中文</option>
          <option value="<?php echo "/tc".$cleaned_path;?>">繁體中文</option>
        </select>
      </form>
    </div>
  </div>
</div>
