$(function(){

	$('.menu-list').hide();

	$('#menu-button').click( function() {
		$(".menu-list").fadeToggle();
		//$('.menu-button').addClass("opened");
	});

	console.log( "ready!" );


	$('.slider').click( function() {
		alert("hihi"); 
	});

});
