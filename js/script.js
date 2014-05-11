$(document).ready(function() {

	$('li#mpp-param').click(function(event) {
		$(this).css('background', '#34495e url(images/todo/done.png) 92% center no-repeat');
		$('form#mpp').show();
		$('form#clan').hide();
		$('li#clan-param').css('background', '#34495e url(images/todo/todo.png) 92% center no-repeat');
	});

	$('li#clan-param').click(function(event) {
		$(this).css('background', '#34495e url(images/todo/done.png) 92% center no-repeat');
		$('form#mpp').hide();
		$('form#clan').show();
		$('li#mpp-param').css('background', '#34495e url(images/todo/todo.png) 92% center no-repeat');
	});
});