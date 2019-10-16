$(document).ready(function() {

    $("#payment-button-amount").attr("disabled", true);
    $('#cc-vote').change(function(e) {
        e.preventDefault();
        var voteVal = $("#cc-vote").val();
        $("#amount").val(voteVal * 100);
        $('#payment-button-amount').html("Pay ₦" + voteVal);
    });


    // $("#payment-button-amount").attr("disabled", true)
});