// scroll

var posY  = 0;
var jarak = 20;

function smoothScroll(id){
	var target = document.getElementById(id).offsetTop; //jarak antara atas dan div

	var scrollAnimate = setTimeout(function(){

		smoothScroll(id);
	}, 5) //function waktu

	posY = posY + jarak;


	// berhenti pada bagian tertentu
	if(posY >= target){
		clearTimeout(scrollAnimate);
		posY = 0;
	}else{
		window.scroll(0, posY) // x dan y
	}

	return false;

}