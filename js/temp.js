function convertToC(temp) {
	return (temp-32)*5/9;
}
function convertToF(temp) {
	var tempOut = ((temp * 9/5) + 32);
	return tempOut;
}

function convertC() {

	var tempIn = document.getElementById("fromC").value;
	var result = convertToF(tempIn).toFixed(1);

document.getElementById("result").value = result;
document.getElementById("result").style.color = "red";
}

function convertF() {

	var tempIn = document.getElementById("fromF").value;
	var result = convertToC(tempIn).toFixed(1);
//	var output=document.getElementById("result");
// document.getElementById("result").value = convertToC(tempIn);
document.getElementById("result").value = result;
document.getElementById("result").style.color = "blue";
}