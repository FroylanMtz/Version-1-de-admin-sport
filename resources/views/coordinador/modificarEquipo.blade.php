@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Actualizar equipo</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
			                                <li class="breadcrumb-item active">Actualizar de equipo</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
															@foreach($equipo as $equipo)											
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Registro</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form action="{{route('Coordinador.actualizarEquipo')}}" method="POST" enctype="multipart/form-data">
																														{{ csrf_field() }}
																					  <input id="equipoId" name="equipoId" type="hidden" value="{{$equipo->id}}">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="nombre" id="nombre">Nombre del equipo</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$equipo->nombre}}">
                                                </div>
                                            </div>																
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Foto</label>
                                                <div class="col-lg-5">
                                                    <input type="file" name="foto_equipo" id="foto_equipo" class="form-control" placeholder="Enter your name">
                                                </div>
                                            </div>																					
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Actualizar</button>
                                                <button class="btn btn-shadow" type="reset">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
															@endforeach
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->

                </div>
@endsection