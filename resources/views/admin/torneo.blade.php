@extends('admin.plantilla_admin')
@section('cuerpoDashboard')
           <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Torneo</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
			                                <li class="breadcrumb-item active">Torneo</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Begin Invoice -->
                                <div class="invoice has-shadow">
                                    <!-- Begin Invoice COntainer -->
                                    <div class="invoice-container">
                                        <!-- Begin Invoice Top -->
	                                    <div class="invoice-top">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-xl-6 col-md-6 col-sm-6 col-6">
        	                                        <h1>{{$torneo->nombre}}</h1>
        	                                        <span>ID: {{$torneo->id}}</span>
                                                </div>
                                                
                                            </div>
	                                    </div>
                                        <!-- End Invoice Top -->
                                        <!-- Begin Invoice Header -->
                                        <div class="invoice-header">
                                        	<div class="row d-flex align-items-center">
	                                        	<div class="col-xl-2 col-md-2 col-sm-12 d-flex justify-content-xl-start justify-content-md-center justify-content-center mb-2">
		                                        	<div class="invoice-logo">
		                                                <img src="{{asset('assets/img/SportLogoSmartPhone.png')}}" alt="logo">
		                                            </div>
		                                        </div>
		                                        <div class="col-xl-5 col-md-5 col-sm-6 d-flex justify-content-xl-start justify-content-md-center justify-content-center mb-2">
		                                            <div class="details">
		                                            	<ul>																											
		                                                    <li class="company-name">{{$torneo->nombre}}</li>
																												<li>Coordinador: {{$coordinador->name}}</li>
		                                                    <li>Colonia: {{$torneo->calle}} {{$torneo->colonia}}</li>
		                                                    <li>Ciudad:{{$torneo->ciudad}} {{$torneo->estado}}</li>
																												<li>Email: {{$coordinador->email}}</li>		                                                    																														                                                    																												
		                                                </ul>
		                                            </div>
	                                            </div>
	                                            <div class="col-xl-5 col-md-5 col-sm-6 d-flex justify-content-xl-end justify-content-md-end justify-content-center mb-2">
	                                                <div class="client-details">
	                                                    <ul>
	                                                    	<li class="title">{{$torneo->categoria}}.</li>
		                                                    <li>{{$torneo->rama}}</li>
		                                                    <li>Inscripcion: {{$torneo->pago_inscripcion}}</li>
		                                                    <li>Arbitraje: {{$torneo->pago_arbitraje}}</li>
		                                                    <li>Numero de Equipos: {{$torneo->num_equipos}}</li>
		                                                    <li>Numero de vuelats: {{$torneo->num_vueltas}}</li>
	                                                    </ul>
																										<form action="/admin/updateSatusTorneo/{{$torneo->id}}" method="POST" enctype="multipart/form-data">
																											{{ csrf_field() }}
																											<div class="select">																																																						
                                                        <select name="estatus" id="estatus" class="custom-select form-control" required>
                                                            <option value="">{{$torneo->estatus}}</option>
																														@if($torneo->estatus == "Habilitado")
                                                              <option value="Jugandose">Jugandose</option>
                                                              <option value="Inhabilitado">Inhabilitado</option>
																														@elseif($torneo->estatus=="Inhabilitado")
                                                              <option value="Jugandose">Jugandose</option>
                                                              <option value="Habilitado">Habilitado</option>
                                                            @else
                                                              <option value="Habilitado">Habilitado</option>
                                                              <option value="Inhabilitado">Inhabilitado</option>
																														@endif
																												</select>		
																												<button class="btn btn-gradient-01" type="submit">Guardar</button>																												
																											</div>
																										</form>																											
	                                                </div>
	                                            </div>
                                            </div>
                                        </div>

																			
                                        <div class="invoice-date d-flex justify-content-xl-end justify-content-center">
                                            <span>Febuary 22, 2018</span>
                                        </div>

                                    </div>
                                    <!-- End Invoice Container -->

                                </div>
                                <!-- End Invoice -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Design By Saerox</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="changelog.html">Changelog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
@endsection