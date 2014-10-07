/* function askQuestion() {
	var ans1 = prompt("How many moons does Earth have?");
	var ans2 = prompt("How many moons does Saturn have?");
	var ans3 = prompt("How many moons does Venus have?");
	var correct = 0;
	if (ans1 == 1) correct++;
	if (ans2 == 31) correct++;
	if (ans3 == 0) correct++;

	document.write("You got " + correct + " of 3 correct answers.");
}
*/ 

var quiz = [["How many moons does Earth have?", 1],
			["How many moons does Saturn have?", 62],
			["How many moons does Venus have?", 0],
			["How many moons does the Sun have?", 0]];

function askQuestion() {

var correct=0, answer;
for (var i=0; i<quiz.length; i++ ){
	answer=prompt(quiz[i][0]);
	if (answer==(quiz[i][1])) correct++;
}

document.write("You got " + correct + " of " + quiz.length + " correct answers.");

}

