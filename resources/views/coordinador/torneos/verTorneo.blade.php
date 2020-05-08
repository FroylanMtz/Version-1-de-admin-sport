@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Ver Torneos</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="/admin"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Ver Torneos</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Torneos</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Direccion</th>
                                                        <th>Categoria</th>
                                                        <th>Numero de Equipos</th>
                                                        <th><span style="width:100px;">Estatus</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
																									@foreach ($torneos as $torneos)
                                                    <tr>
                                                        <td>{{$torneos->nombre}}</td>
																												<td>{{$torneos->direccion}}</td>
																												<td>{{$torneos->categoria}}</td>
																												<td>{{$torneos->num_equipos}}</td>
                                                        <td><span style="width:100px;">
																													@if($torneos->estatus == 'Habilitado')
																													<span class="badge-text badge-text-small success">Habilitado</span>
																													@endif
																													@if($torneos->estatus == 'Inhabilitado')
																													<span class="badge-text badge-text-small success">Habilitado</span>
																													@endif																													
																													</span>
																												</td>
                                                        <td class="td-actions">
                                                            <a href="/configurarTorneo/{{$torneos->id}}"><i class="la la-edit edit"></i></a>
                                                        </td>
                                                    </tr>
																									@endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sorting -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <!-- End Offcanvas Sidebar -->
                </div>
@endsection