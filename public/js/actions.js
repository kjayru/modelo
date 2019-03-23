
$(window).load(function(){
   
    $("#selector").addClass('is-active').show();
 });
 
$(document).ready(function(){


$("#form-selector").on('submit',function(e){
    e.preventDefault();
    
    let lugar = $("#select-region").val();
    
    window.location.href='/'+lugar;
});



  $("#lightgallery").lightGallery(); 
  
  $('.grid').isotope({
    
    itemSelector: '.grid-item',
    masonry: {
      columnWidth: 200
    }
  });

});



//filtros

$(".filtro").on('click',function(e){
	e.preventDefault();
	let lugar = $(this).data("lugar");
	let filtro = $(this).data("value");
	let token = $("#form-search input[name='_token']").val();

	let datasend = ({'lugar':lugar,'filtro':filtro,'_token':token,'_method':'POST'});
	$.ajax({
		url:"/getfiltro",
		type:"POST",
		dataType:"json",
		data:datasend,
		success:function(response){
			console.log(response)
		}
	});
});