$(document).ready(function(){
	$('.menu-btn').on('click', function(){
		$('nav ul.small').toggleClass('active')
		$('.menu-btn').toggleClass('active')
	})


	CoverAllP();
})
var bAfficher=true;

function IframeClick(id){
	document.getElementById(id).style.pointerEvents = "auto";
}

function CoverAllP(){
	var id="";
	for (var i = 1; i < 17; i++) {
		id="DescP"+i;
		if(document.getElementById(id) !== null){
			document.getElementById(id).style.display = "none";
		}
	}
}

$(document).click(function (e) {
	if(document.getElementById('maps') !== null){
	if (e.target.id != 'Cmaps') {
		document.getElementById('maps').style.pointerEvents = "none";
	}else {
		document.getElementById('maps').style.pointerEvents = "auto";
	}
}
});


$(document).ready(function(){
	$('.ItemMenu').on('click', function(){
		CoverAllP();
		var id = "DescP" + $(this).attr('id');
		document.getElementById(id).style.display = "block";
		fadeOutMenu();
	})
})



$(document).ready(function(){
	$('#btnMenu').on('click', function(){

		bAfficher = !bAfficher;
		if(bAfficher){
				$(".ItemMenu:hidden").fadeIn("fast");
		}
		else {
				$(".ItemMenu").fadeOut("fast");
		}

		console.log(bAfficher);
	})
})

function fadeOutMenu(){
	$(".ItemMenu").fadeOut("fast");
	bAfficher=false;
}
