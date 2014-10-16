$("#word").on("blur", function(){

var wordIn = $('#word').val();

var working = wordIn.toLowerCase();

var iCount=0, aCount=0, eCount=0, oCount=0, uCount=0; 

//can also use an array to track my letter counts

$('#output').empty();
var current = working.split("");
console.log(current);
for (var i=0; i<current.length; i++) {
	switch(current[i]) {
		case 'i': 
			iCount++;
			break;
		case 'o':
			oCount++;
			break;
		case 'a':
			aCount++;
			break;
		case 'e':
			eCount++;
			break;
		case 'u':
			uCount++;
			break;
		default:
			break;
		}
	}
$('#output').append("The word " + wordIn + " has the following statistics: \n");
$('#output').append(aCount + " a\n");
$('#output').append(eCount + " e\n");
$('#output').append(iCount + " i\n");
$('#output').append(oCount + " o\n");
$('#output').append(uCount + " u\n");

});
