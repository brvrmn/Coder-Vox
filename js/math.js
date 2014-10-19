function getArea(length, width) {
return length * width;
}

function getVolume(length, width, height) {
return length * width * height;
}

var numbers = [5,11,-9,24,76,-124,55];

function mean(my_array) {
	var sum=0, total=0;
	for (var i=0; i< my_array.length; i++) {
		sum += my_array[i];
	}
	total = sum / my_array.length;
	return total;
}

var average = mean(numbers);
console.log(average);