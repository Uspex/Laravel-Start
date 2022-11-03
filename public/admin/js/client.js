$(document).ready(function() {
    $('.change_amount_offer').on('click', function () {
        changeAmountOffer(this)
    });

    $('.multiple_select').select2();

});



// Изменим сумму пополнения
function changeAmountOffer(data_this) {
    let amount = $(data_this).attr('data-amount');
    $('#input_amount').val(amount);
}
