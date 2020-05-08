@extends('admin.plantilla_admin')
@section('cuerpoDashboard')
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Ver Causales</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="/admin"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Ver Causales</li>
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
                                        <h4>Causales</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>tipo</th>
                                                        <th>numero</th>
                                                        <th>descripcion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
																									@foreach ($causal as $causal)
                                                    <tr>
                                                        <td>{{$causal->tipo}}</td>
																												<td>{{$causal->numero}}</td>
																												<td>{{$causal->causal}}</td>
                                                        <td class="td-actions">
                                                            <a href="/torneo"><i class="la la-edit edit"></i></a>
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