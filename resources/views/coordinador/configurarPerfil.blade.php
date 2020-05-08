@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">Editar datos del usuario</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active">Configuración de usuario</li>
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
                            <h4>Editar datos de usuario</h4>
                        </div>
                        <div class="widget-body">
														
													@if (count($errors) > 0)
													<script>


															swal({
																	"title":"Datos guardados",
																	"text":"Datos guardados",
																	"showConfirmButton":true
															});
													</script>
											@endif
													
                            <form action="{{route('Coordinador.update')}}" method="POST" enctype="multipart/form-data">
                                 
																{{ csrf_field() }}
																
															<div class="form-group row d-flex align-items-center mb-5">
																<label class="col-lg-4 form-control-label d-flex justify-content-lg-end" >Imagen: </label>
																	<div class="col-lg-5">
																			<input type="file" name="foto_user" id="foto_user" size="60" name="file" class="form-control">
																	</div>
															</div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="correo" id="correo">Correo: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['email']}}" name="correo" id="correo" placeholder="Ingresa tu correo" disabled>
                                    </div>
                                </div>
															
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" >Nombre: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['name']}}" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
                                    </div>
                                </div>

															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="calle" id="calle">Calle: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['calle']}}" name="calle" id="calle" placeholder="Calle">
                                    </div>
                                </div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="colonia" id="colonia">Colonia: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['colonia']}}" name="colonia" id="colonia" placeholder="Ingresa tu colonia">
                                    </div>
                                </div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="ciudad" id="ciudad">Ciudad: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['ciudad']}}" name="ciudad" id="ciudad" placeholder="Ingresa tu ciudad">
                                    </div>
                                </div>
															
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="estado" id="estado">Estado: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['estado']}}" name="estado" id="estado" placeholder="Ingresa tu estado">
                                    </div>
                                </div>
															
																<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="pais" id="pais">Pais: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['pais']}}" name="pais" id="pais" placeholder="Ingresa tu pais">
                                    </div>
                                </div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="nacionalidad" id="nacionalidad">Nacionalidad: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['nacionalidad']}}" name="nacionalidad" id="nacionalidad" placeholder="Ingresa tu nacionalidad">
                                    </div>
                                </div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="dia_nacimiento" id="dia_nacimiento">Fecha Nacimiento: </label>
                                    <div class="col-lg-1">
                                        <input type="text" class="form-control" value="{{$usuario['dia_nacimiento']}}" name="dia" id="dia" placeholder="Dia">
                                    </div>
																
																	<div class="col-lg-1">
                                        <input type="text" class="form-control" value="{{$usuario['mes_nacimiento']}}" name="mes" id="mes" placeholder="Mes">
                                    </div>
																
																<div class="col-lg-1">
                                        <input type="text" class="form-control" value="{{$usuario['año_nacimiento']}}" name="año" id="año" placeholder="Año">
                                    </div>
                                </div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="sexo" id="sexo">Sexo: </label>
                                    <div class="col-lg-5">
                                        <!--<input type="text" class="form-control" value="{{$usuario['sexo']}}" name="sexo" id="sexo" placeholder="Hombre/Mujer">-->
                                  		
																			<select class="form-control" name="sexo" id="sexo" >
																				@if($usuario['sexo'] == 'hombre')
																					<option value="hombre" selected>Hombre</option>
																					<option value="mujer">Mujer</option>
																				@else
																					<option value="hombre">Hombre</option>
																					<option value="mujer" selected>Mujer</option>
																				@endif
																			</select>
																			
																		</div>
                                </div>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="curp" id="curp">Curp: </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="{{$usuario['curp']}}" name="curp" id="curp" placeholder="Ingresa tu curp">
                                    </div>
                                </div>
															
															<div class="text-center">
																	<button class="btn btn-gradient-01" type="submit">Guardar datos</button>
																	<button class="btn btn-shadow" type="reset">Limpiar</button>
															</div>
															
															<hr>
															
															<!--<center> Si deseas cambiar tu contraseña colocala sobre los siguientes campos </center>
															
															<div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end" name="correo" id="correo">Contraseña: </label>
                                    <div class="col-lg-5">
                                        <input type="password" class="form-control" name="correo" id="correo" placeholder="Ingresa contraseña">
                                    </div>
                                </div>
															
															<div class="text-center">
																	<button class="btn btn-gradient-01" type="submit">Guardar datos</button>
																	<button class="btn btn-shadow" type="reset">Limpiar</button>
															</div> -->
                                
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