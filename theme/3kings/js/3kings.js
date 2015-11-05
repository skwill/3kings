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
  	$("#orders").append('<div class="holder col-sm-12"><p><a class="remove">X</a>  '+name+': $'+price+'</p></div>');
});

$('#orders-form').submit(function(e){
	e.preventDefault();
	
	//$('.remove').css('display', 'none');

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
		order[i] = $(this).text().replace('X ','');
		i++;
	  //console.log($(this).text() );
	});
		
	var pass_order = JSON.stringify(order);

	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/submit.php",
        data: {activitiesArray : pass_order}, 
        dataType: 'json'
    }).done(function(response) {

    	$('#orders div').remove();
    	$("#form-name").val('');
    	$("#form-email").val('');
    	$("#form-phone").val('');

    	console.log(response); 
    	var message = $('#response-message h2');
    	if (response == "success"){    		
    		message.text('Your transaction was successful!');
    		$('#response-message').fadeIn().delay(4000).fadeOut('slow');//.css('display', 'block');
    	};
    	if (response == "fail"){
    		message.text('There was an error with your transaction. Please try again or contact us at');
    		$('#response-message').fadeIn().delay(4000).fadeOut('slow');//.css('display', 'block');
    	};
    });	
});


$(function(){
	$('#orders').on("click", ".remove", function(){
		$(this).closest('div').remove();
	});
});