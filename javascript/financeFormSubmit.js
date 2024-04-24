// financeFormSubmit.js
// Driver function that computes the monthly payment for the provided inputs

function financeFormSubmit() {
    var listPrice = document.getElementById("price").value;
    var tradeIn = document.getElementById("trade").value;
    var downPayment = document.getElementById("downpayment").value;
    var duration = document.querySelector('input[name="duration"]:checked').value;

    var totalPrice = listPrice - tradeIn - downPayment;
    var monthlyPayment = totalPrice / duration;
    var monthlyPaymentRound = monthlyPayment.toFixed(2);

    if (totalPrice <= 0) {
        monthlyPaymentRound = 0;
    }

    var result = "Your estimated monthly payment is $" + monthlyPaymentRound + "!\n";
    alert(result);
}