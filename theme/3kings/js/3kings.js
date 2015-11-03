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
  	$("#orders").append('<div class="holder"><p><a class="remove">X Remove </a>  '+name+': $'+price+'</p></div>');
});

$('#orders-form').submit(function(e){
	e.preventDefault();
	
	$('.remove').css('display', 'none');

	var order = [];
	var name = $("#form-name").val();
	var email = $("#form-email").val();
	var phone = $("#form-phone").val();
	var i = 3;
	//strValue = strValue.replace('c','');
	order[0] = name;
	order[1] = email;
	order[2] = phone;

	$('#orders div').each(function() {
		order[i] = $(this).text().replace('X Remove','');
		i++;
	  //console.log($(this).text() );
	});
		
	var pass_order = JSON.stringify(order);

	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/response.php",
        data: {activitiesArray : pass_order}, 
        dataType: 'json'
    }).done(function(response) {
    	console.log('successfull'); 
    });	
});


$(function(){
	$('#orders').on("click", ".remove", function(){
		$(this).closest('div').remove();
	});
});	
/*$('.remove').click(function(){
	//.parent('div').remove();
	$(this).closest('div').remove();
})
*/
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