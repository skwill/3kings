$('#shopping-cart-trigger').click(function(){
	$('.shopping-cart').animate({'right':'0px'});
}); /* ('slide', {direction: 'left'}, 1000);*/

$('#close-cart').click(function(){
	$('.shopping-cart').animate({'right':'-1000px'});
})

$(".add-btn").click(function () {
	var name = $(this).attr('data-name');
	var price = $(this).attr('data-price');

	console.log(name+" $"+price);
  	$("#orders").append('<div class="holder"><p>'+name+': $'+price+'</p></div>');
});

$('#orders-form').submit(function(e){
	e.preventDefault();

	var name = $("#form-name").val();
	console.log(name);
})

/*$('.order-btn').click(function(){
	var phones = [];	
	var i = 0;

	$('#orders div').each(function() {
		phones[i] = $(this).text();
		i++;
	  //console.log($(this).text() );
	});
	
	for (var i = 0; i < phones.length; i ++) {
		console.log(phones[i]);
	};

	var pass_phone = JSON.stringify(phones);

	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/response.php",
        data: {activitiesArray : pass_phone}, 
        dataType: 'json'
    }).done(function(response) {
    	console.log('successfull'); 
    })	
});*/