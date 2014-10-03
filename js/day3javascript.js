/* 1: Swap the first and last characters of a string and output the result

2: Given a string of length 5, output a substring with the last 3 characters

3: Given a string of various length capitalize the last 3 characters and output the new string

4: Given numbers a,b,c which of them is biggest? Output the result

5: Given 2 numbers, find the one closest to 10 Output the result

6: Given a number, whole, or floating. Round a number to the nearest whole number without using Math.round() and output the result

*/

// Problem 1

myString = "I have a dream";
first = myString[0]; last = myString[myString.length-1];
newString = myString.substr(1,myString.length-2);
console.log(last + newString + first);

//Problem 2

myString = "I hav";

console.log (myString.substr(2,3));

// Problem 3

myString = "Testing strings"

newString = myString.substr(myString.length-3, 3);
console.log(newString.toUpperCase());

// Problem 4

a=35, b=41, c=37;

if (a > b) {
	if (a > c) {
		console.log(a + '(a) is biggest.');
				}
	else console.log(c + '(c) is biggest.');
}
	else if (b > c) {
			console.log(b + '(b) is biggest.')
	}
	else console.log(c + '(c) is biggest.')

// problem 5 

var a=-5, b=25, dist1, dist2;

if (a < 10) {
	dist1 = 10 - a;
}
else dist1 = a - 10;

if (b < 10) {
	dist2 = 10 - b;
}
else dist2 = b - 10;

if (dist1 == dist2) 
console.log('They are equidistant from 10.') ;
else if (dist1 < dist2) 
	console.log(a + ' is closer to 10.');
else console.log(b + ' is closer to 10.');

//problem 6 

var num = 11.19567;
var number = num.toString();
var stuff;
//check to see if it's an integer already

if (number.indexOf(".") < 0) {
	console.log(number);
}
else {
	decimal = number.split('.');
		stuff = decimal[1].substr(0,1);

		console.log(stuff);

			if (stuff <= 5)
				console.log(decimal[0]);
			else console.log(parseInt(decimal[0]) + 1);
		}

