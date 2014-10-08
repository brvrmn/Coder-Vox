function TV(make, model, inches, screen, 3d) {

	this.make = make;
	this.model = model;
	this.size = inches;
	this.screentype = screen;
	this.3d = 3d;

}

var myTV = new TV("LG","342",60,"Plasma",false);
console.log(myTV);