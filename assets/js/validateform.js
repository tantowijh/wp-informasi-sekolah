
var inputStateAlert = document.getElementById('stateError');
inputStateAlert.style.display = 'none';
var inputCityAlert = document.getElementById('cityError');
inputCityAlert.style.display = 'none';

function submitForm() {
    // Mengambil value dari inputState dan inputCity
    var inputStateValue = document.getElementById('inputState').value;
    var inputCityValue = document.getElementById('inputCity').value;

    // Mengecek apakah inputStateValue dan inputCityValue masih default
    if (inputStateValue === "Choose...") {
        inputStateAlert.style.display = 'block';
        return false;
    } else {
        inputStateAlert.style.display = 'none';
    }

    if (inputCityValue === "Choose...") {
        inputCityAlert.style.display = 'block';
        return false;
    } else {
        inputCityAlert.style.display = 'none';
    }
    return true;
}

function handleStateChange() {
    var inputStateValue = document.getElementById('inputState').value;                  
    if (inputStateValue === "Choose...") {
        inputStateAlert.style.display = 'block';                            
    } else {
        inputStateAlert.style.display = 'none';
    }
}

function handleCityChange() {
    var inputCityValue = document.getElementById('inputCity').value;
    if (inputCityValue === "Choose...") {
        inputCityAlert.style.display = 'block';                            
    } else {
        inputCityAlert.style.display = 'none';
    }
}