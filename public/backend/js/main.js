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
        url:'/admin/configurations/updateServicio/'+id,
        type:'POST',
        dataType:'json',
        data: datasend,
        success:function(response){
            console.log(response);
        }
    });
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
