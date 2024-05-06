// leaseFormSubmit.js
// Driver function that computes the monthly payment for the provided inputs

function leaseFormSubmit() {
    var listPrice = document.getElementById("price").value;
    var tradeIn = document.getElementById("trade").value;
    var downPayment = document.getElementById("downpayment").value;
    var residu = document.getElementById("residuperc").value;
    var moneyFactor = document.getElementById("moneyfactor").value;
    var duration = document.querySelector('input[name="duration"]:checked').value;

    var residuPerc = Number(residu) / 100;
    var moneyFactorPerc = Number(moneyFactor) / 100;
    var residValue = listPrice * residuPerc;
    var totalCost = listPrice - tradeIn - downPayment;
    var monthlyDeprec = (totalCost - residValue) / duration;
    var monthlyRentCharge = (totalCost + residValue) * moneyFactorPerc;
    totalMonthlyPayment = monthlyDeprec + monthlyRentCharge;

    if (totalCost <= 0) {
        totalMonthlyPayment = 0;
    }

    var result = "Your estimated monthly payment for this lease is $" + totalMonthlyPayment.toFixed(2) + "!\n";
    alert(result);
}