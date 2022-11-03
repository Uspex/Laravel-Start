$(document).ready(function() {
    $('.image-upload').on('change', function () {
        preview(this);
    });

    $('.multiple_select').select2();

});



// Создание превью
function preview(image_upload) {

    let input = $(image_upload).find('input')[0];

    if (input.files && input.files[0]) {

        let img_preview = $(image_upload).find(".image-preview");

        let reader = new FileReader();
        reader.onload = function(e) {
            $(img_preview).css('background-image', 'url('+e.target.result +')');
            $(img_preview).hide();
            $(img_preview).fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
