//click botón atrás
$(function() {
	$('#atras').click(function(){
		parent.history.back();
		return false;
	});
});