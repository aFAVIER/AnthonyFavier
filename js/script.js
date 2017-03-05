/*
var taille=1;

if (taille!=0) {
	$('#menu_hamburger').click(function(){
		$('#header_name').css('visibility', 'hidden');
		taille = 0;
	});
}else{
	$('#menu_hamburger').click(function(){
		$('#header_name').css('visibility', 'initial');

		taille = 1;
	});
}
*/


$('#menu_hamburger').click(function(){
	$('#header_name').slideUp('slow', function(){

	});
});