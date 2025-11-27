<div id="popup-banner-newgrads" style="display:none;">
  <div>
    <div id="popup-banner-newgrads__close"></div>
    <p class="popup-banner-newgrads__line1">
      <!-- 3/6(月) 12:30  -->
      <?= get_field('pop_up_date'); ?>
      <?= get_field('pop_up_time'); ?>
      会社説明会開催！
    </p>
    <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSfniAv9WBHgl2MBOr0FqekaU-5ymJzmziWWc3UkRgHnQH_P5A/viewform?usp=sf_link" target="_blank" class="popup-banner-newgrads__line2"> -->
    <a href="<?= get_field('pop_up_url'); ?>" target="_blank" class="popup-banner-newgrads__line2">
      お申し込みはこちらから
    </a><br>
    <span class="popup-banner-newgrads__line3">
      ※Click後Google Formに遷移します
    </span>
  </div>
</div>
<script type="text/javascript">
  let deleteBtn = document.getElementById('popup-banner-newgrads__close');
  //表示・非表示を切り替える要素を取得
  let target = document.getElementById('popup-banner-newgrads');
  //一度削除された時に再度表示しない
  // let closed_banner = false;

  // if(sessionStorage.getItem("closed_banner")){
  //   target.style.display='none';
  // }else{
  //   var timeoutInSeconds = 3;
  //   $(target).css({opacity:'0',display:'none'});
  //   setTimeout(function(){
  //   $(target).stop().animate({opacity:'1'}, 500);
  //   target.style.display='';
  //   }, timeoutInSeconds * 1000);
  // }

  var timeoutInSeconds = 3;
  $(target).css({opacity:'0',display:'none'});
  setTimeout(function(){
    $(target).stop().animate({opacity:'1'}, 500);
    target.style.display='';
  }, timeoutInSeconds * 1000);

  //styleのdisplayを変更する関数
  let changeElement = (el)=> {
    if(el.style.display==''){
      el.style.display='none';
    }else{
      el.style.display='';
    }
  }

  //上記関数をボタンクリック時に実行
  deleteBtn.addEventListener('click', ()=> {
    changeElement(target);
    sessionStorage.setItem("closed_banner", true);
  }, false);
</script>