// financeFormSubmit.js
// Driver function that computes the monthly payment for the provided inputs

function financeFormSubmit() {
    var listPrice = document.getElementById("price").value;
    var tradeIn = document.getElementById("trade").value;
    var downPayment = document.getElementById("downpayment").value;
    var interestRate = document.getElementById("interestrate").value;
    var duration = document.querySelector('input[name="duration"]:checked').value;


    var interestRatePer = Number(interestRate) / 100;
    var totalPrice = listPrice - tradeIn - downPayment;
    var totalInterest = totalPrice * interestRatePer;
    var monthlyPayment = totalPrice / duration;
    var monthlyInterest = totalInterest / duration;
    var totalMonthlyPayment = monthlyPayment + monthlyInterest;

    if (totalPrice <= 0) {
        totalMonthlyPayment = 0;
    }

    var result = "Your estimated monthly payment is $" + totalMonthlyPayment.toFixed(2) + "!\n" + "Your total interest on this loan will be $" + totalInterest.toFixed(2) + "!\n";
    alert(result);
}