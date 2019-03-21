debugger
$(window).load(function(){
   
    $("#selector").addClass('is-active');
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
