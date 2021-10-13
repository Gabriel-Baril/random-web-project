window.onload = function() {


	function loadData(){
		async function load(file,callback){
			await $.get(file,data => callback(data));
		}
	  load('data.json',data => {
			console.log('1 : ',data);
			var element = document.createElement("P");
			var text = document.createTextNode(JSON.stringify(data));
			element.appendChild(text);
			element.style.margin = 0;
			document.body.appendChild(element);
		});
		load('data2.json',data => console.log('2 : ',data));
	}
	loadData();
}

function Signal(detection,distance){
	this.detection = detection;
	this.distance = distance;
}

let needleAngle = 0;

function Radar(x,y,radius,data) {
	this.x = x;
	this.y = y;
	this.radius = radius;
	this.data = data;

  this.renderNeedle = function(){
		angleMode(DEGREES);
    stroke(255,0,0);
    strokeWeight(2);
    line(this.x,this.y,this.x + cos(needleAngle)*(this.radius/2 + 3),this.y + sin(needleAngle)*(this.radius/2 + 3));
	}

	this.render = function(){
		angleMode(DEGREES);
		fill(0);
		stroke(0);
		ellipse(this.x,this.y,this.radius,this.radius);
		strokeWeight(4);
		stroke(255);
		for(let i = 0;i < 359;i++){
			if(data[i].detection)
				line(this.x,this.y,this.x + cos(i)*(data[i].distance),this.y + sin(i)*(data[i].distance));
		}
	}
}

let dataRender;
let radius = 100;

function clicked() {
  needleAngle = 0;
}

function setup() {
  let canvas = createCanvas(300, 300);
  canvas.parent('container');
	let data = [];
	for(let i = 0;i < 359;i++){
		if(i < 70 || (i > 90 && i < 135) || (i > 170 && i < 200) || (i > 245 && i < 335))
			data.push(new Signal(true, radius));
		else
			data.push(new Signal(false, radius));
	}
	dataRender = new Radar(width/2,height/2,radius*2,data);
	console.log('BEFORE DATA');

	
	console.log('test');

	var element = document.createElement("IMG");
	element.src = 'test.png';
	document.body.appendChild(element);

	//var data = fs.readFileSync('data.json','utf8');
}

function draw() {
  background(150);
	dataRender.render();
  dataRender.renderNeedle();
  needleAngle+=5;
}
