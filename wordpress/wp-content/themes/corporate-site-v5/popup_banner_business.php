<div id="popup-banner" style="display:none;">
  <a href="https://wealth-park.com/business/download/form-001/" onclick="ga('send', 'event', 'click', 'https://wealth-park.com/business/download/form-001/');">
    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpb/popup_banner_002.jpg" class="popup-banner_img" alt="WealthPark導入事例集 - 管理業務のDXストーリー">
    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpb/popup_banner--sp_002.jpg" class="popup-banner_img--sp" alt="WealthPark導入事例集 - 管理業務のDXストーリー">
  </a>
  <div id="popup-banner_delete"></div>
</div>
<script type="text/javascript">
  let deleteBtn = document.getElementById('popup-banner_delete');
  //表示・非表示を切り替える要素を取得
  let target = document.getElementById('popup-banner');
  //一度削除された時に再度表示しない
  // let deleted_banner = false;

  if(sessionStorage.getItem("deleted_banner")){
    target.style.display='none';
  }else{
    var timeoutInSeconds = 7;
    $(target).css({opacity:'0',display:'none'});
    setTimeout(function(){
    $(target).stop().animate({opacity:'1'}, 500);
    target.style.display='';
    }, timeoutInSeconds * 1000);
  }

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
    sessionStorage.setItem("deleted_banner", true);
  }, false);
</script>
