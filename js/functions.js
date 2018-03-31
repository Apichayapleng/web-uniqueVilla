$(window).scroll(function(){

  var wScroll= $(this).scrollTop();
  $('.logo').css({
    'transform' : 'translate(0px, '+ wScroll /3 +'%)'
  });
});

$("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
});