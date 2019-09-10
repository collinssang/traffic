$(document).ready(function(){
$(".postItem").submit(function(e){
	e.preventDefault(); 
	e.stopPropagation();
	var idno = $("#idno").val();	
	var names = $("#names").val(); 	
	var photo = $("#photo").val(); 
	var tel = $("#tel").val(); 
	var loc = $("#loc").val(); 
	var formData = new FormData(this);
	if(idno != '' && photo != '' && tel != '' && loc != ''){ 
		var method = $(".postItem").attr('method'); 
		var action = $(".postItem").attr('action'); 
		var dataType = 'html'; 
		//var p = $(".postItem").find('input#photo').val();
		//var data = $(".postItem").serialize();
		//
		setTimeout(function(){
		 $.ajax({ 
		 	url:action,
		 	type:method,
		 	async: false,
		 	contentType: false,
            cache: false,
            processData:false, 
		 	data:formData,
		 	// dataType:dataType, 
		 	success:function(response){
		 	$('#response').addClass('no_error').fadeIn(3000);
			$("#response").html(response).fadeIn(3000,function(){
                    $(this).hide();
                    $('.postItem')[0].reset();
                    window.location.reload();
                });
			$("#postBtn").val("SUBMIT");
			}, error:function(response){
			$('#response').addClass('error').fadeIn(3000);
			$("#response").html(response).fadeIn(3000,function(){
                    $(this).hide();
                    $('.postItem')[0].reset();
                    window.location.reload();
                });
			$("#postBtn").val("SUBMIT");
			} 
			});
		},3000);
		 $("#postBtn").val("Saving...");
		}else{ 
			alert("Sorry All Fields must be filled for easy Finding of the Doc"); 
		}
});

$("#searchForm").submit(function(e){
	e.preventDefault();
	setTimeout(function(){
		$("#searchBtn").val("SEARCH");
	},3000);
	// merge
	$("#searchBtn").val("Posting...");
	var method = $("#searchForm").attr('method');
	var url = $("#searchForm").attr('action');
	var data = $("#searchForm").serialize();
	var dataType = "json";
	var ids = $("#merge").val();

//	alert(url);
	$.ajax({
		url:url,
		type:method,
		dataType:dataType,
		data:data,

		success: function(data){
			//$("input['id5']").val(ids);
			if(data.error == 'notFound'){
				setTimeout(function(){
					$('.response').hide();
					$('#searchForm')[0].reset();

				},5000);
				$('.response').addClass('error').fadeIn();
				$(".response").html("Sorry Data not Saved successfully").fadeIn();
			}else{
			setTimeout(function(){
				$(".response").hide();
				$('#searchForm')[0].reset();
			},4000);
			$('.response').addClass('no_error').fadeIn();
			$(".response").html("Data Saved Successfully. Thanks").fadeIn();
			// window.location.replace(url);
		}
		
		},error:function(response){
			setTimeout(function(){
				$(".response").hide();
			},4000);
			$('.response').addClass('error').fadeIn();
			$(".response").html('Error occured try refreshing the page. or contact customer care').fadeIn();
		}
	});

  });

$("#searching").submit(function(e){
	e.preventDefault();
	var data = $(this).serialize();
	var url = $(this).attr('action');
	var method = $(this).attr('method');
	var dataType = 'html';
	$.ajax({
		url:url,
		type:method,
		data:data,
		dataType:dataType,
		success: function(response){
			if(response.success == 'error'){
				$(".not").addClass('error').fadeIn();
				$(".not").html("Error: problem occured please try again").fadeIn(3000,function(){
				$(this).hide();
				});
			}else{
			$(".not").addClass('no_error').fadeIn(3000,function(){
				$(this).hide();
				$('#searching')[0].reset();
			});
			$(".not").html("Thanks, details safed successfully. We shall Contact You once found").fadeIn(5000,function(){
				$(this).hide();
			});
		}
		},error: function(response){
			$(".not").addClass('error').fadeIn(3000,function(){
			$(this).hide();
			});
			$(".not").html("Error: problem occured please try again").fadeIn(3000,function(){
				$(this).hide();
				});
		}
	});
});

$(".payForm").submit(function(e){
	e.preventDefault();
	//var url = 'http://www.repo.smartchip.co.ke/smartchip/api/Route/list';
	//var method = 'GET';
	var dataType = 'json';
	var data = $(this).serialize();
	var url = $(this).attr('action');
	var method = $(this).attr('method');
	$.ajax({
		url:url,
		type:method,
		dataType:dataType,
		data:data,
		success: function(response){
			if(response.error){
				$('.pay').addClass('error').fadeIn(3000, function(){
					$(this).hide();
					window.location.reload();
				});
				$('.pay').html(response.error).fadeIn(3000,function(){
					$(this).hide();
					$('.payForm')[0].reset();
					window.location.reload();
				});

			}else{
				$('.pay').addClass('no_error').fadeIn(3000, function(){
					$(this).hide();
					window.location.reload();
				});
				$('.pay').html("success. You shall receive an email of your document's location").fadeIn(3000,function(){
					$('.payForm')[0].reset();
					window.location.reload();

				});
			}

		},error: function(response){
			$('.pay').addClass('error').fadeIn(3000, function(){
				$(this).hide();
				window.location.reload();
			});
			$('.pay').html("Error occured, please contact for assistance").fadeIn(3000, function(){
				$(this).hide();
				$('.payForm')[0].reset();
				window.location.reload();
			});
		}
		
	});
});

$("#contact-form").submit(function(e){
	e.preventDefault();
	var dataType = 'json';
	var data = $(this).serialize();
	var method = $(this).attr('method');
	var url = $(this).attr('action');
	$.ajax({
		url:url,
		type:method,
		data:data,
		dataType:dataType,
		success: function(response){
				$('.messageSent').addClass('no_error').fadeIn(3000,function(){
					$(this).hide();
					$('#contact-form')[0].reset();
				});
				$('.messageSent').html("Message has been sent successfully").fadeIn(3000,function(){
					$('#contact-form')[0].reset();
					$(this).hide();
				});
			

		},error: function(response){
				$('.messageSent').addClass('no_error').fadeIn(3000,function(){
					$(this).hide();
					$('#contact-form')[0].reset();
				});
				$('.messageSent').html("Message has been sent successfully").fadeIn(3000,function(){
					$(this).hide();
					$('#contact-form')[0].reset();
				});
		}
	});
});

$('#updatePay').click(function(e){
	e.preventDefault();
	var data = $(this).attr('val');
	var url = $(this).attr('href');
	var method = 'POST';
	$.ajax({
		url:url,
		data:{updatePay:data},
		type:method,
		dataType:'json',
		success: function(response){
			if (response.success) {
				alert(response.success);
			}else{
				alert(response.error);
			}
		}
	});
});

$(".lodin").submit(function(e){
	e.preventDefault();
	var method = $(this).attr('method');
	var url = $(this).attr('action');
	var data = $(this).serialize();
	var dataType = 'json';
	var url2 = $(".lodin").attr('url2');
	$.ajax({
		url:url,
		type:method,
		data:data,
		dataType:dataType,
		success: function(response){
			if(response.error){
				alert(response.error);
			}else{
			alert(response.success);
			setTimeout(function(){window.location.replace(url2);},3000);
			
			}
		},error: function(response){
			alert(response.error);
		}
	});
});

});