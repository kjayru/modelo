$(window).load(function(){
	alert("abierto");
	 $("#selector").addClass('is-active');
});


$(document).on('change','.preimage',function(e){
	var output = $(this).parent().parent().children('.preview').children('img');
	
	
	output.attr('src',URL.createObjectURL(e.target.files[0]));
})


$(document).on('change','.preimages',function(e){
	var output = $(this).parent().parent().children('.preview');
	output.html('');
	let numfoto = e.target.files.length;
	for(let i=0; i< numfoto; i++){
	image = `<img src=${URL.createObjectURL(e.target.files[i])} width="100">`;
	output.append(image);
	}
})

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
	event.preventDefault();
	$(this).ekkoLightbox();
});

$(".btn-gal-delete").on('click',function(){
	var id = $(this).data('id');
	$("#deluser form").attr('action','/admin/galleries/'+id);
});

$("#scortslist").on('change',function(){
	let valor = $(this).val();
   
		let opcion = '';
		$.ajax({
			url:'/admin/galleries/getalldata/'+valor,
			type:'GET',
			dataType:'json',
			success:function(response){
				if(response){
					$.each(response,function(i,e){
					
						opcion+='';
					})
					
					$("#valortipo").html(opcion);
				}else{
					
				}
				
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
		url:"/getFiltro",
		type:"POST",
		dataType:"json",
		data:datasend,
		success:function(response){
			console.log(response)
		}
	});
});

