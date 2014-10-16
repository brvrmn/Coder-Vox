<!DOCTYPE html>
<html>
<head>
</head>
<body>
<input type="text" id="name" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
// replace content of text field with data from text file
$(function() {

// var msg = $.ajax({type: "GET", url: "../assets/newtext.txt", async: false}).responseText;
//$("#name").text(msg);

var text= $.get('../assets/newtext.txt', function(data){
$('#name').val(data);
});
});
</script>
</body>
</html>
