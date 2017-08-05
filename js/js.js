$('document').ready(function(){

	var pathstring = window.location.pathname;

	if(pathstring.search('ajax') != -1){
		$('.links').removeClass('active');
		$('#ajax').addClass('active');
	}
	else if(pathstring.search('internal') != -1){
		$('.links').removeClass('active');
		$('#internal').addClass('active');
	}else{
		$('.links').removeClass('active');
		$('#home').addClass('active');
	}

});