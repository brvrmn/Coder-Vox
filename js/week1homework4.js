// 1. Find the largest integer in an array and output the number

var myarray = [0,2,27,31,-5,19,78,-4];
var i, largest=myarray[0];
for (i=0; i < myarray.length; i++) {

if (myarray[i] > largest) {
	largest = myarray[i];

	}
}
console.log(largest);

// 2. Given an integer array, compute the sum of an integer array, output the sum

var myarray=[94,22,-4,19,-903];
var total=0;

for (var i=0; i<myarray.length; i++) {

total+=myarray[i];
console.log(total);
}

// 3. Given a string of various length, determine if it is a palindrome or not and output "Palindrome" or "Not a Palindrome" 

var input = "Ali babab ila";
// case shouldn't matter 
var teststring = input.toLowerCase();
var i=0,
	j=teststring.length-1;
palindrome=false;

// not sure why I thought that it must run at least once. Oh well. 

do {
	
	if (i < (teststring.length/2)) {

i++, j--;
}

else {
	palindrome=true;
	break;}

}
while (teststring[i] == teststring[j]);

if (palindrome) console.log("Palindrome.");
else console.log('Not a palindrome.');

// 4. Write a script that will determine if a number is prime or not.
var isprime=true, input=98, i=2, j=(input/2 - 1), multiple;

for (i=2; i<j; i++) {
	console.log(i);
	if (input % i === 0) {
		isprime=false;
		multiple=i;
		break;
	}
}
if (isprime) console.log ("It's prime.") ;
	else console.log(input + " is divisible by " + multiple);

/* 5. Using your prime script, find all the primes between 2 and 1000. Architect your script 
that you could find primes between 2 to 10,000, 100,000, 1 m  ..etc and so on with minimal changes. */

var input=1000;

var isPrime = function(num){
	var isprime, j=(num/2 - 1);
	// check if the number is prime
	for (var i=2; i<j; i++) {

		if (num % i === 0) {
			isprime=false;
			break;
		}
		else isprime=true;

	}	
if (isprime) console.log(num);

}

for (var q=2; q <= input; q++) {
isPrime(q);
}
