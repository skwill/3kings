$('#shopping-cart-trigger').click(function(){
	$('.shopping-cart').animate({'right':'0px'});
}); /* ('slide', {direction: 'left'}, 1000);*/

$('#close-cart').click(function(){
	$('.shopping-cart').animate({'right':'-1000px'});
})