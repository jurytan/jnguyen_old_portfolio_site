// JavaScript Document
$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal({
		dismissible: true, // Modal can be dismissed by clicking outside of the modal
		opacity: .5, // Opacity of modal background
		in_duration: 300, // Transition in duration
		out_duration: 200, // Transition out duration
	});
	$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
	$('.scrollspy').scrollSpy();
	$('.parallax').parallax();
	$('.materialboxed').materialbox();
	$("#submit").click(function(e){
		if ($("#icon_prefix").val() == "058X098?0xG47dk") {
			$("#resultHeader").text('Congrats!');
			$("#resultText").text('You entered the right password! Smart one, aren\'t you?');
			$("#modal").css('background-color', '#2ecc71');
			$(".modal-footer").addClass("importantGreen");
		} else {
			$("#resultHeader").text('Sorry!');
			$("#resultText").text('You entered the wrong password, buddy. Try again!');
			$("#modal").css('background-color', '#e74c3c');
			$(".modal-footer").addClass("importantRed");
		}
	});
});
