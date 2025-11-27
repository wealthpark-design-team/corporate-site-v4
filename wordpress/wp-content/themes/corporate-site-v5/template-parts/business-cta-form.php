<section class="customer-success__download form-section--salesforce">
  <div class="form-block form-block--column container__inner">
    <h3 class="customer-success__downloadTit customer-success__sectionRead">資料(PDF)のダウンロード</h3>
    <div class="form-block__item">
      <div class="form-block__checkbox">
        <a class="form-block__img" href="<?php echo esc_url(home_url('/business/download/form-001/')); ?>">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/download_pic1.png" alt="３分で分かるWealthParkビジネス">
        </a>
        <h3>
          <a href="<?php echo esc_url(home_url('/business/download/form-001/')); ?>">WealthParkビジネスサービス資料</a>
        </h3>
        <p class="form-block__txt">サービスの全体像やご提供方法、基本機能のご紹介など、WealthParkビジネスの基本情報を網羅しました！まずはこちらからご一読ください。</p>
        <div class="button">
          <a href="<?php echo esc_url(home_url('/business/download/form-001/')); ?>">ダウンロード</a>
        </div>
      </div>
      <hr class="visible-sp divider--hr divider--hr-full">
      <div class="form-block__checkbox form-block__checkbox--cta">
        <a class="form-block__img" href="<?php echo esc_url(home_url('/business/download/form-012/')); ?>">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/download_top_pic12.png" alt="不動産管理業向け電子帳簿保存法への対応ポイント">
        </a>
        <h3>
          <a href="<?php echo esc_url(home_url('/business/download/form-012/')); ?>">不動産管理業向け電子帳簿保存法への対応ポイント</a>
        </h3>
        <p class="form-block__txt">「電子帳簿保存法」の解説から、賃貸業務における「電子帳簿保存法」の注意点とポイントを網羅しております。是非、ご一読ください！</p>
        <div class="button">
          <a href="<?php echo esc_url(home_url('/business/download/form-012/')); ?>">ダウンロード</a>
        </div>
      </div>
      <hr class="visible-sp divider--hr divider--hr-full">
      <div class="form-block__checkbox form-block__checkbox--cta">
        <a class="form-block__img" href="<?php echo esc_url(home_url('/business/download/form-011/')); ?>">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/download_top_pic11.png" alt="賃貸住宅管理業法改正のポイントとデジタルの活用について">
        </a>
        <h3>
          <a href="<?php echo esc_url(home_url('/business/download/form-011/')); ?>">賃貸住宅管理業法改正のポイントとデジタルの活用について</a>
        </h3>
        <p class="form-block__txt">「賃貸住宅管理業法改正」について解説いたします。また、オーナーアプリWealthParkビジネスを使ったデジタル活用についてもご案内します。</p>
        <div class="button">
          <a href="<?php echo esc_url(home_url('/business/download/form-011/')); ?>">ダウンロード</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="customer-success__form form-section--salesforce">
  <div class="container__inner">
    <script>
      function check(){
        var a=document.search_form.q.value;
        if(a==""){
          return false;
        }else if(!a.match(/\S/g)){
          return false;
        }
      }
    </script>
    <h3 class="customer-success__formTit customer-success__sectionRead">ご相談はこちらから</h3>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <form action="https://p.wealth-park.com/l/884073/2021-09-20/78zs8" method="post" id="sf-form">

    <input type=hidden name="oid" value="00D2v000001XqKf">
    <input type=hidden name="retURL" value="https://wealth-park.com/ja/business-contact-completed/">
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="company">会社名</label>
      </div>
      <div class="form-block__item">
        <input id="company" maxlength="40" name="company" size="20" type="text" pattern=".*\S+.*" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="managed_units">お客様区分</label>
      </div>
      <div class="form-block__item form-block__item--col">
        <p>
        <label>
          <input name="managed_units" type="radio" value="管理会社（管理戸数1室～999室）" required/> 管理会社（管理戸数1室～999室）
        </label>
        </p>
        <p>
        <label>
          <input name="managed_units" type="radio" value="管理会社（管理戸数1,000室～9,999室）"/> 管理会社（管理戸数1,000室～9,999室）
        </label>
        </p>
        <p>
        <label>
          <input name="managed_units" type="radio" value="管理会社（管理戸数10,000室以上）"/> 管理会社（管理戸数10,000室以上）
        </label>
        </p>
        <p>
        <label>
          <input name="managed_units" type="radio" value="不動産オーナー"/> 不動産オーナー
        </label>
        </p>
        <p>
        <label>
          <input name="managed_units" type="radio" value="その他"/> その他
        </label>
        </p>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="last_name">姓</label>
      </div>
      <div class="form-block__item">
        <input id="last_name" maxlength="40" name="last_name" size="20" type="text" pattern=".*\S+.*" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="first_name">名</label>
      </div>
      <div class="form-block__item">
        <input id="first_name" maxlength="40" name="first_name" size="20" type="text" pattern=".*\S+.*" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="email">メール</label>
      </div>
      <div class="form-block__item">
        <input id="email" maxlength="80" name="email" size="20" type="email" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="phone">お電話番号</label>
      </div>
      <div class="form-block__item">
        <input id="phone" maxlength="12" name="phone" size="20" type="tel" pattern="[\d\-]*" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label>お問合わせ内容</label>
      </div>
      <div class="form-block__item">
        <textarea id="inquiry_content" name="inquiry_content" rows="25" type="text" wrap="soft" pattern=".*\S+.*" required></textarea>
      </div>
    </div>
    <div class="form-block--hidden">
      <label>フォームタイプ</label>
      <select id="00N2v00000THpvL" name="00N2v00000THpvL" title="フォームタイプ">
        <option value="">--なし--</option>
        <option value="PM用">PM用</option>
        <option value="その他" selected>その他</option>
      </select>
    </div>
    <div class="form-block">
      <!-- <input type="submit" name="submit" value="送信"> -->
    <button class="g-recaptcha" 
        data-sitekey="6LcWATYqAAAAAGl9ObJYc_JxIdmz9FsGNOh-Rh3m" 
        data-callback='onSubmit' 
        data-action='submit'>送信</button>
    </div>
    </form>
  </div>
</section>

<script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
   function onSubmit(token) {
     document.getElementById("sf-form").submit();
   }
 </script>