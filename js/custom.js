
$(window).on("load", function(){
	
	$(window).resize(function() {
		winW  = $(window).width();
		winH  = $(window).height();
	if(winW > 380){
		$("#wrap").css("width", 375);
	}
	if(winH < 500){
		$("#wrap").css("height",600);
	}
		
	});

});


// $("#dropbtn").mouseout(function(){
//     $("#dropdown-content").hide();
// });

$("#dropbtn").click(function(){
    $("#dropdown-content").show();
});