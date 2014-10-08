		function TV(make, model, screenSize, resolution,volumeLevel)
			{
			this.make = make;
			this.model = model;
			this.screenSize = screenSize;
			this.resolution = resolution;
			this.isOn = false;
			this.volumeLevel = volumeLevel;
			this.currentChannel = "3";
			this.changeChannel = function(channel){
				if(this.isOn)
					this.currentChannel = channel;
			};
			this.changeVolume = function(volume){
				if(this.isOn)
					if(volume >= 0 && volume <= 100)
						this.volumeLevel = volume;
			};
			this.power = function(){
				this.isOn = !this.isOn;
			};
	}

var samsung = new TV('Samsung', 'CN-1500', 37, '1080P');
var TVarray = [samsung];

	function addIt() {
		var newTV = new TV(document.getElementById("make").value,document.getElementById("model").value,
					document.getElementById("screenSize").value, document.getElementById("resolution").value, 
					document.getElementById("volumeLevel").value);


	TVarray[TVarray.length] = newTV;


	}