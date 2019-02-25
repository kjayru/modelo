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
			url:'/admin/catalogs/hijos/'+valor,
			type:'GET',
			dataType:'json',
			success:function(response){
				
			$.each(response,function(i,e){
				console.log(e.name);
				opcion+='<option value="'+e.id+'">'+e.name+'</option>';
			})
			
			$("#valortipo").html(opcion);
			}
		});

});