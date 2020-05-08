@extends('admin.plantilla_admin')
@section('cuerpoDashboard')
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Registro de Causales</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
			                                <li class="breadcrumb-item active">Registro de Causales</li>
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
                                        <form class="needs-validation" novalidate method="POST" action="{{route('admin.registrarCausales')}}">
																						{{ csrf_field() }}
																					  <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tipo</label>
                                                <div class="col-lg-5">
                                                    <div class="select">
                                                        <select name="tipo" class="custom-select form-control" required>
                                                            <option value="Amonestacion">Amonestacion</option>
																														<option value="Expulsion">Expulsion</option>
																												</select>	
                                                        <div class="invalid-feedback">
                                                            Por favor selecciona una opción
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>																					
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Numero</label>
                                                <div class="col-lg-5">
                                                    <input type="number" name="numero" class="form-control" placeholder="#">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Descripción</label>
                                                <div class="col-lg-5">
                                                    <input name="causal" type="text" class="form-control" min="0">
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

                    <!-- End Offcanvas Sidebar -->
                </div>
@endsection