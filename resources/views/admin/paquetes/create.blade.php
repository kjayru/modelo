@extends('layouts.admin.master')
@section('content')
<section class="content-header">
            <h1>
                Paquetes
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="/admin/packages">Paquetes</a></li>
                <li class="active">Crear Paquete</li>
                
            </ol>
       

                @if(session('info'))
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    {{ session('info')}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

</section>              
<section class="content"> 
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">CREAR </h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <div class="box box-info">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('packages.store')}}" method="POST">
                                     @method('POST')
                                    @include('admin.paquetes.partial.form')

                            <!-- /.box  -footer -->
                            </form>
                        </div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
</section>
@endsection
