$(document).ready(function(){	
	$("#documentsForm").submit(function(event){
		submitForm();
		return false;
	});
});

function submitForm(){
    $.ajax({
       type: "POST",
       url: "savedocuments.php",
       cache:false,
       data: $('form#documentsForm').serialize(),
       success: function(response){
           $("#documents").html(response)
           $("#documents-modal").modal('hide');
       },
       error: function(){
           alert("Error");
       }
   });
}

function selectProvinsi(selc) {
    alert(selc.options[selc.selectedIndex].text);
}
  
function selectPerusahaan(sel) {
    alert(sel.options[sel.selectedIndex].text);
}