$('#new-orders-button').click(function(){

	$('#orders-pane').find('div').remove();

	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/orders/app/getNewOrders",
        //data: {activitiesArray : pass_order}, 
        dataType: 'json'
    }).done(function(response) {    	
    	$.each(response, function(){
			$.each(this, function(){
				$('#orders-title').text(this.status+" Orders");
				$('#orders-pane').append('<div class="row"> <div class="col-sm-2">'+this.datecreated+'</div>'+'<div class="col-sm-8">'+this.customer_order+'</div>'+'<div class="col-sm-2"><i class="fa fa-check" data-id="'+this.id+'"></i><i class="fa fa-remove" data-id="'+this.id+'"></i></div></div>');
				//console.log(this.id);
			});   		
		});   
    });	
});

$('#old-orders-button').click(function(){

	$('#orders-pane').find('div').remove();

	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/orders/app/getOldOrders",
        //data: {activitiesArray : pass_order}, 
        dataType: 'json'
    }).done(function(response) {    	
    	$.each(response, function(){
			$.each(this, function(){
				$('#orders-title').text("Fulfilled Orders");
				$('#orders-pane').append('<div class="row"> <div class="col-sm-2">'+this.datecreated+'</div>'+'<div class="col-sm-8">'+this.customer_order+'</div>'+'<div class="col-sm-2"><i class="fa fa-check" data-id="'+this.id+'"></i><i class="fa fa-remove" data-id="'+this.id+'"></i><i class="fa fa-undo" data-id="'+this.id+'"></i></div></div>');
				//console.log(this.id);
			});   		
		});   
    });	
}); 

$('#orders-pane').on("click", ".fa-check", function(){
	//$(this).closest('.row').remove();
	
	var order_line = $(this);

	var id = $(this).attr('data-id');
	//console.log(id);
	//$(this).closest('.row').remove();
	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/orders/app/fulfill/"+id,
        //data: {activitiesArray : pass_order}, 
        dataType: 'json'
    }).done(function(response) {    	
    	console.log(response);

    	if (response == 'success'){
    		order_line.closest('.row').remove();
    		console.log('Order Fulfilled');
    	}else{
    		console.log('Error Processing Order');
    	};
    });
})

$('#orders-pane').on("click", ".fa-remove", function(){
	$(this).closest('.row').remove();
})

$('#orders-pane').on("click", ".fa-undo", function(){
	$(this).closest('.row').remove();

	var order_line = $(this);

	var id = $(this).attr('data-id');
	//console.log(id);
	//$(this).closest('.row').remove();
	$.ajax({
        type: 'POST',
        url: "http://localhost/3k/orders/app/undo/"+id,
        //data: {activitiesArray : pass_order}, 
        dataType: 'json'
    }).done(function(response) {    	
    	console.log(response);

    	if (response == 'success'){
    		order_line.closest('.row').remove();
    		console.log('Order Reversed');
    	}else{
    		console.log('Error Reversing Order');
    	};
    });
})