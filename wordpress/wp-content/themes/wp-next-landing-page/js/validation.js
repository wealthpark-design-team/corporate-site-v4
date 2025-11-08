// $(function () {
//     $('input:submit[class="form-block__submit"]').on('click',function () {

//         //エラーの初期化
//         $("p.form-block__error").remove();
//         $(".form-block").removeClass("form-block__error");

//         $(":text,textarea").filter(".form-block__validate").each(function () {

//             //必須項目のチェック
//             $(this).filter(".form-block__required").each(function () {
//                 if ($(this).val() == "") {
//                     $(this).parent().prepend("<p class='form-block__error'>必須項目です</p>")
//                 }
//             })

//             //数値のチェック
//             $(this).filter(".form-block__number").each(function () {
//                 if (isNaN($(this).val())) {
//                     $(this).parent().prepend("<p class='form-block__error'>数値のみ入力可能です</p>")
//                 }
//             })

//             //メールアドレスのチェック
//             $(this).filter(".form-block__mail").each(function () {
//                 if ($(this).val() && !$(this).val().match(/.+@.+\..+/g)) {
//                     $(this).parent().prepend("<p class='form-block__error'>メールアドレスの形式が異なります</p>")
//                 }
//             })

//             //メールアドレス確認のチェック
//             // $(this).filter(".mail_check").each(function () {
//             //     if ($(this).val() && $(this).val() != $("input[name=" + $(this).attr("name").replace(/^(.+)_check$/, "$1") + "]").val()) {
//             //         $(this).parent().prepend("<p class='form-block__error'>メールアドレスと内容が異なります</p>")
//             //     }
//             // })

//         })

//         //ラジオボタンのチェック
//         // $(":radio").filter(".validate").each(function () {
//         //     $(this).filter(".required").each(function () {
//         //         if ($("input[name=" + $(this).attr("name") + "]:checked").size() == 0) {
//         //             $(this).parent().prepend("<p class='form-block__error'>選択してください</p>")
//         //         }
//         //     })
//         // })

//         //チェックボックスのチェック
//         $(".form-block--column .form-block__item").each(function () {
//             if ($(":checkbox:checked", this).size() == 0) {
//                 $(this).prepend("<p class='form-block__error'>選択してください</p>")
//             }
//         })

//         // その他項目のチェック
//         // $(".validate.add_text").each(function () {
//         //     if ($(this).attr("checked") == true && $("input[name=" + $(this).attr("name").replace(/^(.+)$/, "$1_text") + "]").val() == "") {
//         //         $(this).parent().prepend("<p class='form-block__error'>その他の項目を入力してください。</p>")
//         //     }
//         // })

//         //エラーの際の処理
//         if ($("p.form-block__error").size() > 0) {
//             $('html,body').animate({ scrollTop: $("p.form-block__error:first").offset().top - 40 }, 'slow');
//             $("p.form-block__error").parent().addClass("form-block__error");
//             return false;
//         }
//     })
// })