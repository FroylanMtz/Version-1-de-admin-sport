@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')

								@if($errors->any())
								<h4>{{$errors->first()}}</h4>
								@endif

								@if (count($errors) > 0)
										<script>
												swal({
														"title":"Equipo guardado",
														"text":"Equipo guardado correctamente",
														"showConfirmButton":true
												});
										</script>
								@endif

                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Registro de equipo</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
			                                <li class="breadcrumb-item active">Registro de equipo</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Registro</h4>
                                    </div>
                                    <div class="widget-body">
																				@if (isset($id))
                                        <form action="{{route('Coordinador.crearEquipoWTorneo')}}" method="POST" enctype="multipart/form-data">
																														{{ csrf_field() }}
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="nombre" id="nombre">Nombre del equipo</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>
                                                </div>
                                            </div>
																				
																					  <input id="torneo" name="torneo" type="hidden" value="{{$id}}">
																					@else
																			 <form action="{{route('Coordinador.crearEquipo')}}" method="POST" enctype="multipart/form-data">
																														{{ csrf_field() }}
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="nombre" id="nombre">Nombre del equipo</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>
                                                </div>
                                            </div>
																					<div class="form-group row d-flex align-items-center mb-5">
                                              <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Torneo</label>
																							<div class="col-lg-5">
                                                    <div class="select">
                                                        <select name="torneo" id="torneo" class="custom-select form-control" required>
                                                            <option value="">Selecciona una opción</option>
																														@foreach($torneos as $torneos)
																														@if($torneos->estatus != "Jugandose")
                                                            <option value="{{$torneos->id}}">{{$torneos->nombre}}</option>
																														@endif
																														@endforeach
																												</select>	
                                                        <div class="invalid-feedback">
                                                            Por favor selecciona una opción
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>																					
																					@endif
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Foto</label>
                                                <div class="col-lg-5">
                                                    <input type="file" name="foto_equipo" class="form-control" placeholder="Enter your name">
                                                </div>
                                            </div>																					
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Guardar</button>
                                                <button class="btn btn-shadow" type="reset">Limpiar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->

                </div>
@endsection