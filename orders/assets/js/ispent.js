$(function() {

	$('#signup-form').submit(function(e){
		e.preventDefault(); 
		var username = $('#username');
		var email = $('#email');
		var email_string = $('#email').val();
		var password = $('#password');

		var result = validate(username, email_string, email, password);
		/*var validate_email = validate(email, email.attr('id'));
		var validate_password = validate(password, password.attr('id'));	*/

		if (result == true) {

			var value = $(this).serialize();		

			var url = 'http://localhost/ispent/index.php/dashboard/register';

			$.ajax({
		        type: 'POST',
		        url: url,
		        data: value, 
		        dataType: 'json'
		    }).done(function(response) {
		    	console.log(response);		    	
		    });
		};		
	});

	/*$('#login-form').submit(function(e){
		$('#login-error').text('');
		var email = $('#login-email').val();		
		var password = $('#login-password').val();

		var value = $(this).serialize();		

		var url = 'http://localhost/ispent/index.php/dashboard/login/';

		$.ajax({
	        type: 'POST',
	        url: url,
	        data: value, 
	        dataType: 'json'
	    }).done(function(response) {
	    	console.log(response);	
	    	if (response == "fail"){
	    		//console.log("great");
	    		$('#login-error').text('Incorrect Email or Password');
	    	};	    	
	    });
	})*/
})

function validate(username, email, e_id, password){
	var un_id = username.attr('id');
	var em_id = e_id.attr('id');
	var pw_id = password.attr('id');

	$('#'+un_id+'_error').text("");
	$('#'+em_id+'_error').text("");
	$('#'+pw_id+'_error').text("");

	var un, em, pw;

	if(username.val().length<3){
		$('#'+un_id+'_error').text("Username must have at least 3 characters");
		un = false;
	};	

    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    em = validateEmail(email); 

    if (em == false){
    	$('#'+em_id+'_error').text("Invalid Email");
    };   

    if(password.val().length<5){
    	$('#'+pw_id+'_error').text("Password must be at least 5 characters long");
		pw = false;
    };

    if(un == false || em == false || pw == false){
    	return false;
    }else{
    	return true;
    }
}

function validateEmail(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(sEmail)) {
		return true;
	}
	else {
		return false;
	}
}

/*$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});*/

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});