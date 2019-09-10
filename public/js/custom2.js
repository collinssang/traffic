var cordinates = {};
$(document).ready(function(){

$("#searchLink").click(function(e){
	e.preventDefault();
	setTimeout(function(){
		$("#searchPart").removeClass();
	},3000);
	$("#searchPart").addClass('here');
});
// $("#dis").click(function(){
// 	$("#linkss").hide();
// 	$("#iframe").slideDown(500);
// 	//show_popup('{{url('/post')}}')

// });
// $("#cancelBtns").click(function(){
// 	//alert("canceld");
// 	$("#iframe").hide();
// 	 $("#linkss").fadeIn();
// });
$('.type').change(function(){
	var type = $(this).val();
	if(type == 0){
		alert("Please select the Document Type");
		}
		});

$("#nextBtns").click(function(){
	
	
	var idno = $("#idno").val();
	var names = $("#names").val();
	var photo = $("#photo").val();
	if(idno != '' && photo != ''){
	$("#owners").hide();
	$("#founders").slideDown(300);
	}
	else{
		alert("Please Provide all the required details");
	}
});
$("#notMine").click(function(){
$("#searchResults").hide();
$("#confirm").hide();
$("#paySection").hide();
$("#ownerDetails").hide();
$("#searchDiv").slideDown(500);
});

$("#mine").click(function(){
$("#resultsTable").hide();
$("#searchDiv").hide();
$("#paySection").hide();
$("#ownerDetails").hide();
$("#confirm").slideDown(500);
});

$("#agreed").click(function(){
if($("#agree").is(':checked')){
var ids = $("#merge").val();
$("#hiddenId").val(ids);
$("#resultsTable").hide();
$("#searchDiv").hide();
$("#confirm").hide();
$("#ownerDetails").slideDown(500);
}else{
	$("#terms").addClass('error');
	alert('Please agree to the terms and conditions first');
}
});
$("#details").click(function(){
$("#resultsTable").hide();
$("#searchDiv").hide();
$("#confirm").hide();
$("#ownerDetails").hide();
$("#paySection").slideDown(500);
});

$("#cancelf").click(function(){
	//alert("canceld");
	$("#notfound").hide();
	$("#searchDiv").fadeIn(200);
});
	
});

