
$(window).on("load", function(){


	$(window).resize(function() {
		winW  = $(window).width();
		winH  = $(window).height();

 
	if(winW){
		$("#wrap").css("width", 375);
	}
	if(winH){
		$("#wrap").css("height", 600);
	}
		
    });

});

$("#innerC").css("height", 430);


$("#dropbtn").click(function(){
    $("#dropdown-content").show();
});

// function submitForm(){
// 	document.getElementsById("wallUpload").submit();
// 	alert ("Form Submitted");
// }