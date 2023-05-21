
    var minusBtn = document.querySelector(".minus-btn");
    var plusBtn = document.querySelector(".plus-btn");
    var quantityInput = document.querySelector("#number");

    minusBtn.addEventListener("click", function(e) {
    e.preventDefault();
    var currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
    });

    plusBtn.addEventListener("click", function(e) {
    e.preventDefault();
    var currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
    });