function imageRot(){
	document.getElementById("image").src="images/imgres.jpg";
}
function imageRotBack(){
	document.getElementById("image").src="images/peony.jpg";
}
document.getElementById("image").addEventListener("mouseover", imageRot);
document.getElementById("image").addEventListener("mouseout", imageRotBack);

