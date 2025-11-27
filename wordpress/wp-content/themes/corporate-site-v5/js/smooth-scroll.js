document.addEventListener('DOMContentLoaded', function(){
    //ハッシュタグからscroll対象の要素を取得
    var hash = location.hash

    //対象要素の座標を取得する
    var targetElement = document.querySelector(hash)
    if (targetElement) {
        var y = targetElement.getBoundingClientRect().top + window.pageYOffset - 80
        //スクロールさせる
        scrollTo({
            top: y,
            left: 0,
            behavior: 'smooth',
        })
    }
})
