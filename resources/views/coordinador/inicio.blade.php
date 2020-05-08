@extends('coordinador.plantilla_coordinador')
	@section('cuerpoDashboard')
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Inicio</h2>
	                                <div>
	                                <div class="page-header-tools">
	                                    <a class="btn btn-gradient-01" href="{{route('Coordinador.Torneo')}}">Crear Torneo </a>
	                                </div>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <!-- Begin Facebook -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class="ion-trophy text-facebook"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">Torneos</div>
                                                <div class="number" id="num_torneos">{{$NumTorneos}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Facebook -->
                            <!-- Begin Twitter -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class="ion-clock text-twitter"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="title text-twitter">Juegos Pendientes</div>
                                                <div class="number">5</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Twitter -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class="ion-cash text-linkedin"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="title text-linkedin">Mensualidad</div>
                                                <div class="number">{{$NumTorneos*120}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
															<?php $i = 0; ?>
															@foreach($torneos as $torneos)
																		<div class="col-xl-3 col-md-4 col-sm-6 col-remove">
                                        <!-- Begin Card -->
																			
                                        <div class="widget-image has-shadow" id="torneo_card_{{$torneos->id}}">
                                            <div class="group-card">
                                                <!-- Begin Widget Body -->
                                                <div class="widget-body">
                                                    <div class="quick-actions">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i class="la la-circle-o-notch"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button id="torneo_eliminar_{{$torneos->id}}" onclick="delete_torneo('{{$torneos->id}}')" class="dropdown-item remove"> 
                                                                    <i class="la la-trash"></i>Eliminar
                                                                </button>
                                                                <a href="{{route('coordinador.torneo.edit',['id'=>$torneos->id])}}" class="dropdown-item"> 
                                                                    <i class="la la-edit"></i>Editar
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cover-image mx-auto">
                                                        <img src="{{asset('/torneos_imagenes').'/'. $torneos->foto }}" alt="..." class="rounded-circle mx-auto">
                                                    </div>
                                                    <h4 class="name"><a href="#">{{$torneos->nombre}}</a></h4>
                                                    <div class="category">{{$torneos->categoria}}</div>
                                                    <div class="stats text-center">
                                                        <span><i class="ion-trophy"></i></span>
                                                        <span class="counter"> {{$NumeroEquipos[$i]}} / {{$torneos->num_equipos}}</span> 
                                                        <span class="text">Equipos</span>
                                                    </div>
                                                    
                                                    <div class="text-center mt-5 pb-3">
                                                        
																												
																											
																												@if($torneos->estatus!="Inhabilitado" )
                                                          <a href="{{route('coordinador.torneo.gestionar_equipos',['id'=>$torneos->id])}}" class="btn btn-secondary ripple">Ver</a>
																							
																													<br/>
																													<hr/>
                                                          @if($NumeroEquipos[$i] > 4 && $torneos->estatus!="Jugandose")
																													  <h6>Estatus del torneo: <b style="color: blue;"> Abierto </b> </h6> 
																													  <a href="/admin/crearCalendario/{{$torneos->id}}" class="btn btn-warning ripple">Cerrar torneo</a>
                                                          @elseif($torneos->estatus=="Jugandose")
                                                             <h6>Estatus del torneo: <b style="color: green;"> Jugandose </b> </h6>
                                                          @else 
                                                            <h6>Estatus del torneo: <b style="color: blue;"> Abierto </b> </h6> 
                                                          @endif
																												@else
																													<br/>
																													<hr/>
																													<h6>Estatus del torneo: <b style="color: red;"> Inhabilitado </b> </h6>
																												
																												@endif
																											
																										</div>
                                                </div>
                                                <!-- End Widget Body -->
                                            </div>
                                        </div>
                                        <!-- End Card -->
																			
                                    </div>
													<?php $i++; ?>
											@endforeach													
                            <!-- End Linkedin -->
                        </div>
                        <!-- End Row -->
											
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                
                    <!-- End Page Footer -->

                </div>
                <!-- End Content -->
								<script>
									function delete_torneo(id_torneo){
										//console.log("entre_"+id_torneo);
											$.ajax({
												url: 'http://157.245.3.193/coordinador/torneo/delete/'+id_torneo,
												method: 'get',
												dataType: 'json',
												contentType:'application/javascript',
												success: function(result) {
													//console.log("si funcionó");
													$('#torneo_card_'+id_torneo).hide();
													document.getElementById('num_torneos').innerHTML = {{$NumTorneos}}-1;
													//window.location.reload();
												},     
												error:function(XMLHttpRequest, textStatus, errorThrown) {                
														/*alert("some error");*/                
														console.log("hubo error"); 
														console.log(XMLHttpRequest);
														console.log(textStatus);
														console.log(errorThrown);          	
												}    	
											});
									}
								</script>
	@endsection