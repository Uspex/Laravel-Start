/**

1. Add your custom JavaScript code below
2. Place the this code in your template:



*/

//скопируем ссылку в буфер
$("body").on('click', '.btn_partner_promo a', function(e) {
    e.preventDefault();

    let tmp = $("<textarea>");
    $("body").append(tmp);
    tmp.val($(this).attr('href')).select();
    document.execCommand("copy");
    tmp.remove();

    $(this).addClass("success");
    setTimeout(function() {
        $(this).removeClass("success");
    }, 2000);
});
