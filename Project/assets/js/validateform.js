
var inputStateAlert = document.getElementById('stateError');
inputStateAlert.style.display = 'none';
var inputCityAlert = document.getElementById('cityError');
inputCityAlert.style.display = 'none';

function submitForm() {
    // Get the selected value from the inputState dropdown
    var inputStateValue = document.getElementById('inputState').value;
    var inputCityValue = document.getElementById('inputCity').value;

    // Check if the selected value is the default/placeholder value
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