// JavaScript Document
$.validator.setDefaults({
   highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }, 
});

	$(function(){
			$('.additional,.notification,.progress').hide();  
			$('.contactForm').validate({
					rules:{
						phone:{
							required:true,
							digits:true,
							minlength:10,
							maxlength:12
						},
						fname:{
							required:true,
							minlength:3
						},
						email:{
							required:true,
							
						},
						requirement:{
							required:true,
							minlength:20,								
						}
					},
					messages: {
    					phone: {
        					required: "Please enter your Phone number",
        					digits:"Phone number should not contain alphabets",
        					minlength:"Phone number should have atleast 10 digits",
        					maxlength:"Phone number should not exceed 12 digits with country code",
    					},
    					fname: {
        					required: "Please enter your Name",
        					minlength:"Name should have atleast 3 letters",
        					
    					},
    					email: {
        					required: "Please enter your email address",
        					email: "Please enter valid email address"
    					},
    					requirement: {
        					required: "Please enter your requirement",
        					minlength:"Please elobratre your requirement atleast with 20 charecters",
        					
        					
    					}
					},
					submitHandler: function(form,event) {
						event.preventDefault();
						$('.notification',form).hide(100); 
						$('.progress',form).show(100); 
						$.ajax({
							url: "php/ajaxrequest.php",
							type: "POST",
							data:  $(form).serialize(),
							error: function(){}, 
							success: function(data){
								$('.progress',form).hide(100);
								$('.notification',form).show(100).html(data);
								$('.additional',form).hide(100);
								$(form)[0].reset();
								//$(form).valid();
							}, 	  	        
						
						});
   
 						 }
					});
					
					
			$('.email').on('keyup blur keypress',function(){ 
				
				if($(this).valid() && $(this).parents('.contactForm').find('.requirement').valid()){
					$(this).parents('.contactForm').find('.additional').show(200);
				}
			});

	 });


