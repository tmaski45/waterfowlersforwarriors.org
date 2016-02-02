$("document").ready(function() {
	
	$('#mailForm').submit(function(e) { 
		e.preventDefault();	 
		var name = $('#name').val(), email = $('#email').val(), message = $('#message').val(), phone = $('#phone').val(), valid = true;
		
		resetAlerts();
		
		if(message == "") {
			alertDanger("Message is a required field."); 
			valid = false;
		}
		
		if(valid) {
			send(message, phone, email, name);
			$('#message, #phone, #email, #name').val("");
		}
	});  
});

function send(message, phone, email, name) {
	var btn = $("button[type='submit']");
	var origText = '<i class="fa fa-check"></i>&nbsp;Send';
	var sendingText = "<i class='fa fa-spinner fa-spin'></i>&nbspSending";
	
	$.ajax({
		url: "/contact/",
		data: {phone: phone, message: message, email: email, name: name},
		dataType: "json",
		type: "POST",
		success: function(result) {
			$(".alert").fadeOut();
			
			if(result.status) {
				alertSuccess(result.message);
			}
			else { 
				alertDanger(result.message);
			}
		},
		error: function(error) { },
		beforeSend: function() {
			btn.attr("disabled", "disabled").empty().append(sendingText);
		},
		complete: function() {
			btn.attr("disabled", false).empty().append(origText);
		}
	});
}

function alertSuccess(text) {
	var success = $('<div class="alert alert-success" style="display:none;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="alert-text"></span></div>');
	
	success.find(".alert-text").text(text).end().prependTo("#mailForm").fadeIn();
}
function alertDanger(text) { 
	var fail = $('<div class="alert alert-danger" style="display:none;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class="fa fa-exclamation-triangle"></i>&nbsp;<span class="alert-text"></span></div>');
	
	fail.find(".alert-text").text(text).end().prependTo("#mailForm").fadeIn();
}
function resetAlerts() {
	$(".alert").remove();	
}