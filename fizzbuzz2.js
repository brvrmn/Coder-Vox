$("#number").on("blur", function() {

	for (var i=1; i<=$('#number').val(); i++) {
		$('#output').append(i + " ");
		if (i % 3 == 0) $('#output').append("Fizz");
		if (i % 5 == 0) $('#output').append("Buzz");
		$('#output').append("\n");

	}
});