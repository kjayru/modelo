
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
	var htm="";
	$.ajax({
		url:"/getfiltro",
		type:"POST",
		dataType:"json",
		data:datasend,
		success:function(response){
			$.each(response,function(i,e){
				htm +=`<article data-order="${e.id}" class="article-escort grid-item isotope-item is-big is-load">
			<figure>
					<div class="inner">
							<div class="girl bg">
									<a href="${lugar}/${e.id}/${e.name}" target="_top" class="image background-image-loaded image-loaded" `;
									if(e.id){
										htm +=`style="background-image:( '/assets/no-foto.jpg')">`;
									
								}else{ 
									htm +=`style="background-image:(/storage/galeria/thumb/${e.galleries[0].thumb }')">`;
									
									}
									
								htm+=	`<picture>`;
										if(e.id){
											htm+=	`<img role="image" src="/assets/no-foto.jpg" class="img-responsive" alt="${e.name}">`;
										}else{
											htm+=	`<img role="image" src="/storage/galeria/thumb/${ e.galleries[0].thumb }}" alt="${e.name}">`;
										}
									htm+=	`</picture></a> <i aria-hidden="true" class="fa fa-video-camera video"></i></div>
							<figcaption>
									<p></p>
											<p>
													<a href="#">
															<i aria-hidden="true" class="fa fa-circle" style="display: none;"></i>
															<span>
																	<span class="brown">${ e.name }</span> 
																	<span class="brown number">${ e.edad },</span>
																	Escort Gold de Apariencia ${e.etnia}, Ubicada en ${e.name }. Servicio de 1:00 hora por 
																	<span class="brown number">${e.costohora }</span>
															</span>
													</a>
											</p>
									<p></p>
							</figcaption>
					</div>
			</figure>
	</article>`;
			})
			

		}
	});
});

$(".cities-mov").click(function(){
	$(this).toggleClass('open-menu-cities');
});