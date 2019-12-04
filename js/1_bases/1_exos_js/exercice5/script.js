document.querySelector("h1").onmouseenter = function(){
	this.style.color = "red";
	this.style.marginLeft = "48%";
	this.style.marginRight = "48%";
};

document.querySelector("h1").onmouseleave = function(){
	this.style.color = "black";
	this.style.marginLeft = "48%";
	this.style.marginRight = "48%";
};