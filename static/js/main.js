function dropdownList(){
	if($(window).width() <= 900){
		$('.sidebar ul').hide();
	} else {
		$('.sidebar ul').show();
	}	
	$('h3 i').removeClass('active');
}

dropdownList();

$(window).resize(function(){

	dropdownList();
})


$('h3').on('click', function(){

	$('.sidebar ul').slideToggle();
	$('h3 i').toggleClass('active');

})