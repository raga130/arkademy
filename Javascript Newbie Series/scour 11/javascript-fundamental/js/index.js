var txtNumber = 12.356;

//toString
document.getElementById('name').innerHTML = txtNumber.toString();

//toFixed
document.getElementById('name').innerHTML = txtNumber.toFixed();

document.getElementById('name').innerHTML = txtNumber.toFixed(2);

//GLOBAL METHOD
var txtNumber = "12.356";
document.getElementById('name').innerHTML = typeof Number(txtNumber);

document.getElementById('name').innerHTML = parseInt(txtNumber);