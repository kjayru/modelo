$("#scortslist").on('change',function(){
	let valor = $(this).val();
    let iname = $('#scortslist option:selected').text();
    
    $(".scort_title").html(iname);

        let opcion = '';
        $(".btn-new-gallery").show();
        $("#fr-galeria-crear input[name='scort_id']").val(valor);
		$.ajax({
			url:'/admin/galleries/getalldata/'+valor,
			type:'GET',
			dataType:'json',
			success:function(response){
                   
                if(Object.keys(response).length > 0){
                   
                    $.each(response,function(i,e){
                            opcion+=`<tr>
                            <td>${i+1}</td>
                            <td class="text-center">
                                <a href="/storage/${ e.photo }" data-toggle="lightbox" >
                                <img src="/storage/galeria/thumb/${ e.thumb }" width="100">
                                </a>
                            </td>
                            <td width="120">${e.created_at }</td>
                        
                            <td width="20">
                                
                                <div class="form-group">
                                    <span class="switch switch-sm">
                                    <input data-id="${e.id}" data-status="${e.status}" type="checkbox"`;
                                    if(e.status == 2){
                                    opcion+=`checked`;
                                    }
                                    opcion+=` class="switch estado-galeria" id="switch-sm-${i+1}">
                                    <label for="switch-sm-${i+1}"></label>
                                    </span>
                                </div>
                                
                            </td>
                            <td width="10">                       
                                    <a href="#" data-id="${e.id}" data-status="${e.status}" data-toggle="modal" data-target="#deluser" class="btn btn-danger btn-gal-delete">Borrar</a>
                            </td>
                        </tr>`;
                        
                    });

                }else{
                    
                    opcion+='<tr><td class="text-center" colspan="5">NO TIENE RESULTADOS</td></tr>';
                }
				
				$(".tb-galeriabody").html(opcion);
			}
		});

});
//

$("#scortsvideo").on('change',function(){
	let valor = $(this).val();
    let iname = $('#scortsvideo option:selected').text();
    
    $(".scort_title").html(iname);

        let opcion = '';
        $(".btn-video-crear").show();
        $("#fr-video-crear input[name='scort_id']").val(valor);
		$.ajax({
			url:'/admin/galleries/getalldata/'+valor,
			type:'GET',
			dataType:'json',
			success:function(response){
                   
                if(Object.keys(response).length > 0){
                   
                    $.each(response,function(i,e){
                            opcion+=`<tr>
                            <td>${i+1}</td>
                            <td class="text-center">
                                <a href="/storage/${ e.photo }" data-toggle="lightbox" >
                                <img src="/storage/galeria/thumb/${ e.thumb }" width="100">
                                </a>
                            </td>
                            <td width="120">${e.created_at }</td>
                        
                            <td width="20">
                                
                                <div class="form-group">
                                    <span class="switch switch-sm">
                                    <input data-id="${e.id}" data-status="${e.status}" type="checkbox"`;
                                    if(e.status == 2){
                                    opcion+=`checked`;
                                    }
                                    opcion+=` class="switch estado-galeria" id="switch-sm-${i+1}">
                                    <label for="switch-sm-${i+1}"></label>
                                    </span>
                                </div>
                                
                            </td>
                            <td width="10">                       
                                    <a href="#" data-id="${e.id}" data-status="${e.status}" data-toggle="modal" data-target="#deluser" class="btn btn-danger btn-gal-delete">Borrar</a>
                            </td>
                        </tr>`;
                        
                    });

                }else{
                    
                    opcion+='<tr><td class="text-center" colspan="5">NO TIENE RESULTADOS</td></tr>';
                }
				
				$(".tb-galeriabody").html(opcion);
			}
		});
});

$(document).on('change','.estado-galeria',function(){
    let id = $(this).data('id');
    let status = $(this).data('status');
    let token = $(".deleterole input[name='_token']").val();
    let estado ='';
    if(status == 2){
        estado = 1;
    }
    if(status == 1){
        estado = 2;
    }
    var datasend = ({'_token':token,'_method':'PUT','id':id,'status':estado});

    $.ajax({
        url:'/admin/galleries/'+id,
        type:'POST',
        dataType:'json',
        data: datasend,
        success:function(response){
            console.log(response);
        }
    });
});

//video
 
 $(document).on('change','.estado-video',function(){
    let id = $(this).data('id');
    let status = $(this).data('status');
    let token = $(".deleterole input[name='_token']").val();
    let estado ='';
    if(status == 2){
        estado = 1;
    }
    if(status == 1){
        estado = 2;
    }
    var datasend = ({'_token':token,'_method':'PUT','id':id,'status':estado});

    $.ajax({
        url:'/admin/videos/'+id,
        type:'POST',
        dataType:'json',
        data: datasend,
        success:function(response){
            console.log(response);
        }
    });
});

//estado-region

$(document).on('change','.estado-region',function(){
    let id = $(this).data('id');
    let status = $(this).data('status');
    let token =  $('meta[name="csrf-token"]').attr('content');
    let estado ='';
    if(status == 2){
        estado = 1;
    }
    if(status == 1){
        estado = 2;
    }
    var datasend = ({'_token':token,'_method':'PUT','id':id,'status':estado});

    $.ajax({
        url:'/admin/configurations/updateRegion/'+id,
        type:'POST',
        dataType:'json',
        data: datasend,
        success:function(response){
            console.log(response);
        }
    });
});

//estado-caracter

$(document).on('change','.estado-caracter',function(){
    let id = $(this).data('id');
    let status = $(this).data('status');
    let token =  $('meta[name="csrf-token"]').attr('content');
    let estado ='';
    if(status == 2){
        estado = 1;
    }
    if(status == 1){
        estado = 2;
    }
    var datasend = ({'_token':token,'_method':'PUT','id':id,'status':estado});

    $.ajax({
        url:'/admin/configurations/updateCaracter/'+id,
        type:'POST',
        dataType:'json',
        data: datasend,
        success:function(response){
            console.log(response);
        }
    });
});

//estado-region

$(document).on('change','.estado-servicio',function(){
    let id = $(this).data('id');
    let status = $(this).data('status');
    let token = $('meta[name="csrf-token"]').attr('content');
    let estado ='';
    if(status == 2){
        estado = 1;
    }
    if(status == 1){
        estado = 2;
    }
    var datasend = ({'_token':token,'_method':'PUT','id':id,'status':estado});

    $.ajax({
        url:'/admin/configurations/updateServicio/'+id,
        type:'POST',
        dataType:'json',
        data: datasend,
        success:function(response){
            console.log(response);
        }
    });
});

$(document).on('click','.btn-gal-delete',function(){
    let id = $(this).data('id');
    let url = "/admin/galleries/"+id;
    $(".deletegal").attr('action',url);
    $("#id").val(id);
   
});
//btn-new-caracter
$(".btn-new-caracter").on('click',function(){
    $("#modal-nuevo .modal-title").html("Nueva Caracteristica");
    $("#modal-nuevo form").attr('action','/admin/characteristics/store');
});
$(".btn-new-servicio").on('click',function(){
    $("#modal-nuevo .modal-title").html("Nuevo Servicio");
    $("#modal-nuevo form").attr('action','/admin/services/store');
});


$(".btn-servicio-edit").on('click',function(e){
	e.preventDefault();
	let id = $(this).data('id');
	let token = $("#form-search input[name='_token']").val();
	let datasend = ({'_token':token,'id':id,':method':'GET'});
	$.ajax({
		url:"/admin/services/"+id,
		type:"GET",
		dataType:"json",
		success:function(response){
            console.log(response)
            $("#fr-editar input[name='id']").val(response.id);
            $("#fr-editar input[name='name']").val(response.name);
            
            $("#modal-editar").modal('show');
            $("#modal-editar .modal-title").html("Editar Servicio");
            $("#fr-editar").attr("action","/admin/services/"+id);
		}
	});
});


$(".btn-caracter-edit").on('click',function(e){
	e.preventDefault();
	let id = $(this).data('id');
	let token = $("#form-search input[name='_token']").val();
	let datasend = ({'_token':token,'id':id,':method':'GET'});
	$.ajax({
		url:"/admin/characteristics/"+id,
		type:"GET",
		dataType:"json",
		success:function(response){
            console.log(response)
            $("#fr-editar input[name='id']").val(response.id);
            $("#fr-editar input[name='name']").val(response.name);
            
            $("#modal-editar").modal('show');
            $("#modal-editar .modal-title").html("Editar Caracteristica");
            $("#fr-editar").attr("action","/admin/characteristics/"+id);
		}
	});
});


$(document).on('click','.btn-servicio-delete',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    let url = "/admin/services/"+id;
    $(".deleteconf").attr('action',url);
    $("#id").val(id);  
    
});

$(document).on('click','.btn-caracter-delete',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    let url = "/admin/characteristics/"+id;
    $(".deleteconf").attr('action',url);
    $("#id").val(id);  
   
});

$(document).on('change','.preimage',function(e){
    var output = $(this).parent().children('.preview').children('img');
    console.log(output);
    output.attr('src',URL.createObjectURL(e.target.files[0]));
})


$(document).on('click','.btn-delete-mivideo',function(){
    let id = $(this).data('id');
    let url = "/admin/mivideo/"+id;
    $(".deletegal").attr('action',url);
    $("#id").val(id);
   
});


$(".btn-edit-region").on('click',function(e){
	e.preventDefault();
	let id = $(this).data('id');
	let token = $('meta[name="csrf-token"]').attr('content');
	let datasend = ({'_token':token,'id':id,':method':'GET'});
	$.ajax({
		url:"/admin/configurations/region/"+id,
		type:"GET",
		dataType:"json",
		success:function(response){
            
            $("#fr-editar input[name='id']").val(response.id);
            $("#fr-editar input[name='name']").val(response.name);
            
            $("#modal-editar").modal('show');
            $("#modal-editar .modal-title").html("Editar Región");
            $("#fr-editar").attr("action","/admin/configurations/region/"+id);
		}
	});
});