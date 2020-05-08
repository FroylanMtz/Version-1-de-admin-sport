@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Estadisticas</h2>
																	<div>
	                                 	<div class="page-header-tools">
																			@foreach($torneos as $torneo)
																			@if($torneo->estatus!="Jugandose")
																			<a class="btn btn-gradient-01" href="/crearEquipo/{{$id}}">Crear Equipo</a>
																			@endif
																			@endforeach
	                                	</div>
	                                </div>
	                                <div>
																	<!---	
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="/admin"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Estadisticas</li>
			                            </ul>-->
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                                                <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Basic Tabs -->
                                <div class="widget has-shadow">
                                    <div class="widget-body sliding-tabs">
                                        <ul class="nav nav-tabs" id="example-one" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true" >Posiciones</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false" >Partidos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Resultados</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="base-tab-1">
	<!--PRIMER PESTANA--> 
                                    					 <div class="widget-body">

															<div>
																<h1 class="page-header-title"> Tabla general </h1>
																

																<div class="page-header-tools float-right">
																	<a class="btn btn-gradient-01" href="{{route('coordinador.jornada.pdftabla',['id'=>$torneos[0]->id ])}}">Descargar</a>
																	<!--<button class="btn btn-gradient-01" onclick="">Descargar</button>-->
																</div>
																<hr>
															</div>

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
														<th>Logo</th>
                                                        <th>Nombre</th>
														<th>PJ</th>	
                                                        <th>JG</th>
                                                        <th>JP</th>
														<th>JE</th>
                                                        <th>GF</th>
                                                        <th>GC</th>
														<th>P</th>
														<th>Administrar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													@foreach($equipos as $equipo)
                                                    <tr>
																											
																												<td>
																													<div class="cover-image mx-auto">
                                                       			<img src="{{asset('/equipos_imagenes').'/'. $equipo->foto }}" alt="..." width="50px" class="rounded-circle mx-auto">
                                                    			</div>
																												</td>
                                                        
																												<td>
																													
																													
																													
																														<span class="text-primary">{{$equipo->nombre}}</span>
																													</td>
																												<td>{{$equipo->juegos_jugados}}</td>
                                                        <td>{{$equipo->juegos_ganados}}</td>
                                                        <td>{{$equipo->juegos_perdidos}}</td>
																												<td>{{$equipo->juegos_empatados}}</td>
                                                        <td>{{$equipo->goles_favor}}</td>                                                        
                                                        <td>{{$equipo->goles_contra}}</td>
																												<td>{{3*$equipo->juegos_ganados + $equipo->juegos_empatados }}</td>
                                                        <td class="td-actions">
                                                            <a href="/modificarEquipo/{{$equipo->id}}"><i class="la la-edit edit"></i></a>
                                                            <a href="/borrarEquipo/{{$equipo->id}}/torneo/{{$id}}"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
																									@endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
																							
																		<!--FIN PRIMER PESTANA-->																							
                                    </div>
																					 	
																				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="base-tab-2">

																				
																				@for ($i = 0; $i < ($numeroJornadas * $totalVueltas); $i++)
																				 						
																				 	<div class="widget widget-15 has-shadow">
																						<div class="widget-body">
																							
																							<div class="tab-content">

																								

																								<div class="widget-body">
																									
																									<div>
																										<h1 class="page-header-title">Jornada {{ $i+1 }}</h1>
																										

																										<div class="page-header-tools float-right">
																											<a class="btn btn-gradient-01" href="{{route('coordinador.jornada.pdf',['id'=>$torneos[0]->id,'num_jornada'=>$i+1])}}">Descargar</a>
																											<!--<button class="btn btn-gradient-01" onclick="print_pdf_jornada({{$i+1}})">Descargar</button>-->
																										</div>
																										<hr>
																									</div>

																									<div class="table-responsive">
																											<table class="table mb-0">
																													<thead>
																															<tr>
																																	<th>Local</th>
																																	<th>R1</th>
																																	<th></th>
																																	<th>R2</th>
																																	<th>Visita</th>
																																	<th>Estatus</th>
																																	<th>Opciones</th>
																															</tr>
																													</thead>
																												
																													<tbody>
																														@if (count($errors) > 0)
																																<script>
																																	
																																	
																																		swal({
																																				"timer":1800,
																																				"title":"Error al guardar",
																																				"text":"Debes llenar todos los campos",
																																				"showConfirmButton":false
																																		});
																																</script>
																														@endif
																														
																														@foreach($jornadas[$i] as $jornada)
																																	@if($jornada->local == NUll || $jornada->visitante == NUll)

																																	@else
																																	 <form action="/guardarResultado" method="POST" enctype="multipart/form-data">
																																				{{ csrf_field() }}
																																	<tr>
																																		@foreach($equipos as $equipo)

																																			@if($jornada->local == $equipo->id)
																																				<td><span class="text-primary"> {{$equipo->nombre}}  </span></td>
																																			@endif

																																		@endforeach

																																		<input id="id_enfrentamiento" name="id_enfrentamiento" type="hidden" value="{{ $jornada->id }}">
																																		<input id="id_torneo" name="id_torneo" type="hidden" value="{{ $id }}">

																																		
																																		<td><span><input type="number" min="0" name="goles_local_txt" value="{{$jornada->resultado_1}}"></span></td>
																																		<td><span >VS</span></td>
																																		<td><span ><input type="number" min="0" name="goles_visitante_txt" value="{{$jornada->resultado_2}}"></span></td>
																																		@foreach($equipos as $equipo)@if($jornada->visitante == $equipo->id)<td><span class="text-primary"> {{$equipo->nombre}}  </span></td>@endif @endforeach
																																		@if($jornada->estatus== 'Jugado')<td><span class="badge-text badge-text-small success"> {{$jornada->estatus}} </span></td>@endif
																																		@if($jornada->estatus== 'Pendiente')<td><span class="badge-text badge-text-small info"> {{$jornada->estatus}} </span></td>@endif
																																		<td class="td-actions">
																																		<!--<a class="btn btn-outline-success mr-1 mb-2" href="/guardarResultado">Guardar</a>	-->
																																		@if($jornada->estatus != 'Jugado')
																																			<input  class="btn btn-outline-success mr-1 mb-2"  type="submit" value="Guardar">
                                                                    @else
																																			<input id="opcion" name="opcion"  type="hidden" value="editar" />
																																			<input id="goles_local_anterior" name="goles_local_anterior" type="hidden" value="{{$jornada->resultado_1}}" />																																			
																																			<input id="goles_visitante_anterior" name="goles_visitante_anterior" type="hidden" value="{{$jornada->resultado_2}}" />                                                                      
																																			<input  class="btn btn-outline-danger mr-1 mb-2"  type="submit" value="Modificar">
                                                                    @endif
																																		</td>
																																	</tr>
																																	</form>

																																	@endif
																																
																															
																														@endforeach
																													</tbody>
																												
																											</table>
																									</div>
																							</div>

																							</div>
																							</div>
																					</div>
																					
																				@endfor
																					
																					
																			 <!--2da PESTANA--> 
                                    		
																							
	<!--FIN 2da PESTANA-->													                                                
                                            </div>
                                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="base-tab-3">
                                            <!--INICIO TABLA POSICIONES-->
																				
																				
																							
                                        @for ($i = 0; $i < $numeroJornadas; $i++)
																				 						
																				 	<div class="widget widget-15 has-shadow">
																						<div class="widget-body">
																							
																							<div class="tab-content">
																								<div class="widget-body">
																								<div class="row">
																									<div class="page-header">
																										<div class="d-flex align-items-center">
																											<h1 class="page-header-title">Jornada {{ $i+1 }}</h1>
																											<div>
																												<div class="page-header-tools">
																													
																												</div>
																											</div>
																											</div>
																										</div>
																									</div>
																									<div class="table-responsive" id="c_resultados_tabla_j_{{$i+1}}">
																											<table class="table mb-0" id="resultados_tabla_j_{{$i+1}}">
																													<thead>
																															<tr>
																																	<th>Local</th>
																																	<th>R1</th>
																																	<th></th>
																																	<th>R2</th>
																																	<th>Visita</th>
																																	<th>Estatus</th>
																															</tr>
																													</thead>
																												
																													<tbody
																																 
																														@foreach($jornadas[$i] as $jornada)
																																	@if($jornada->local == NUll || $jornada->visitante == NUll)
																																	@else
																														     @if($jornada->estatus== 'Jugado')
																				                           <tr>
																																		@foreach($equipos as $equipo)
																																			@if($jornada->local == $equipo->id)
																																				<td><span class="text-primary"> {{$equipo->nombre}}  </span></td>
																																			@endif

																																		@endforeach

																																		 <td><span><h2>{{$jornada->resultado_1}}</h2></span></td>
																																		<td><span >VS</span></td>
																																		<td><span ><h2>{{$jornada->resultado_2}}</h2></span></td>
																																		@foreach($equipos as $equipo)@if($jornada->visitante == $equipo->id)<td><span class="text-primary"> {{$equipo->nombre}}  </span></td>@endif @endforeach
																																		@if($jornada->estatus== 'Jugado')<td><span class="badge-text badge-text-small success"> {{$jornada->estatus}} </span></td>@endif
																																		@if($jornada->estatus== 'Pendiente')<td><span class="badge-text badge-text-small info"> {{$jornada->estatus}} </span></td>@endif
																																		<td class="td-actions">
																																		<!--<a class="btn btn-outline-success mr-1 mb-2" href="/guardarResultado">Guardar</a>	-->
																																	
																																		</td>
																																	
                                                                     </tr>
																																	@endif
																																	@endif
																																
																															
																														@endforeach
																													</tbody>
																												
																											</table>
																									</div>
																							</div>

																							</div>
																							</div>
																					</div>
																					
																				@endfor
																	</div>
																			
																						<!--FIN TABLA POSICIONES-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Basic Tabs -->
                            </div>
                        </div>
                        <!-- End Row -->
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
               
  
                    <!-- End Offcanvas Sidebar -->
                </div>
				<script>
						$('#resultados_tabla_j_1').DataTable( {
								buttons: [
									'colvis',
									'excel',
									'print'
								]
						} );
					
						$('#resultados_tabla_j_2').DataTable( {
								buttons: [
										'excelHtml5'
								]
						} );
					</script>
@endsection