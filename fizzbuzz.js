function fizzBuzz(until) {
for (var i=1; i<= until; i++) {
	if ((i % 3 == 0) && (i % 5 == 0)) fizz_buzz();
	else if (i % 3 == 0) fizz();
	else if (i % 5 == 0) buzz();
	else none(i);
}
}
function fizz() {
	console.log("Fizz");
}
function buzz() {
	console.log("Buzz");
}
function fizz_buzz(){
	console.log("FizzBuzz");
}

function none(i) {
		console.log(i);
}

fizzBuzz(25);
