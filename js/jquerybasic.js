$("input").on("blur", function){

	if ($("input").length < 5)
		$("input").attr( "id", "#username.invalid" );
	else $("input").attr( "id", "#username.valid" );
}