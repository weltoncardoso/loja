
var slideItem = 0;
window.onload = function(){

	setInterval(passarSlide, 7000);

	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slide");
	console.log(objs);
		for(var i = 0; i < objs.length; i++) {
		objs[i].style.width = slidewidth+"px";	
}
}

	function passarSlide() {
		var slidewidth = document.getElementById("slideshow").offsetWidth;
 		if (slideItem >= 5) {
 			slideItem = 0;
 		}else {
 			slideItem++;
 		}
 		document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-" +(slidewidth * slideItem)+"px";
	}
	function mudarSlidde(pos) {
		slideItem = pos;
		var slidewidth = document.getElementById("slideshow").offsetWidth;
 		document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-" +(slidewidth * slideItem)+"px";
	}
