<?php $current_lang = qtrans_getLanguage();
if ($current_lang == "en") { ?>
    <li><a target="_blank" href="https://itunes.apple.com/app/wealth-park-real-estate-investment/id1068127268" class="btn app-store"></a></li>
    <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner" class="btn google-play"></a></li>
<?php } elseif ($current_lang == "sc") { ?>
    <li><a target="_blank" href="https://itunes.apple.com/cn/app/wealth-park-real-estate-investment/id1068127268" class="btn app-store"></a></li>
    <li class="hover-dropdown">
        <span class="btn btn-hover android"></span>
        <ul class="hover-dropdown-list">
            <!-- <li><a target="_blank" href="https://shouji.baidu.com/software/25602928.html" class="btn baidu-store"></a></li> -->
            <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&hl=zh" class="btn google-play"></a></li>
        </ul>
    </li>
<?php } elseif ($current_lang == "tc") { ?>
    <li><a target="_blank" href="https://itunes.apple.com/tw/app/wealth-park-real-estate-investment/id1068127268" class="btn app-store"></a></li>
    <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&hl=zh-tw" class="btn google-play"></a></li>
<?php } elseif ($current_lang == "ja") { ?>
    <li><a target="_blank" href="https://itunes.apple.com/jp/app/wealth-park-real-estate-investment/id1068127268" class="btn app-store"></a></li>
    <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&hl=ja" class="btn google-play"></a></li>
<?php } ?>
