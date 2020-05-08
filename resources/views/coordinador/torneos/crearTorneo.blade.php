@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')

									<div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Crear Torneo</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                            <li class="breadcrumb-item active">Crear torneos</li>
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
                                        <div class="row flex-row justify-content-center">
                                            <div class="col-xl-10">
                                                <div id="rootwizard">
                                                    
                                                        <!--AQUI COMIENZA EL FORM 1-->
																								
                                                   
                                                        <div class="tab-pane" id="tab1">
																													 <form action="{{route('Coordinador.CrearTorneo')}}" method="POST" enctype="multipart/form-data">
																														{{ csrf_field() }}
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Informacion del torneo</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Nombre<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" placeholder="Ingrese Nombre" required  id="nombre" name="nombre" class="form-control">
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Categoria<span class="text-danger ml-2">*</span></label>
                                                                    <select name="categoria" id="categoria" class="custom-select form-control">                                                                       
                                                                        <option value="Infantil">Infantil</option>
                                                                        <option value="Juvenil">Juvenil</option>
                                                                        <option value="Libre">Libre</option>   
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-5">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Numero de equipos<span class="text-danger ml-2">*</span></label>
                                                                    <input type="number" name="num_equipos" min="6"  id="num_equipos" required  class="form-control">
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Numero de vueltas</label>
                                                                    <input type="number" name="num_vueltas" min="1" required class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Direccion</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Calle<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" name="calle" required class="form-control">
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Colonia</label>
                                                                    <input type="text" name="colonia" required class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label">Ciudad<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" name="ciudad" required class="form-control">
                                                                </div>
                                                                <div class="col-xl-4 mb-5">
                                                                    <label class="form-control-label">Estado<span class="text-danger ml-2">*</span></label>
                                                                    <input type="text" name="estado" required class="form-control">
                                                                </div>
                                                            </div>
																													</div>
                                                        <div class="tab-pane" id="tab2">
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Informacion del torneo</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Rama<span class="text-danger ml-2">*</span></label>
                                                                    <select name="rama" required class="custom-select form-control">
                                                                        <option value="Varonil">Varonil</option>
                                                                        <option value="Femenil">Femenil</option>
                                                                        <option value="Otra">Otra</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-12">
                                                                    <label class="form-control-label">Descpricion</label>
                                                                    <input type="text" required name="descripcion" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Montos del torneo</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Inscripcion<span class="text-danger ml-2">*</span></label>
                                                                    <input type="number" min="0" max="10000000"  required name="pago_inscripcion" class="form-control">
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Arbitraje<span class="text-danger ml-2">*</span></label>
                                                                    <input type="number"  min="0" max="10000000" required name="pago_arbitraje"   class="form-control">
                                                                </div>
                                                            </div>
																														<div class="form-group row mb-3">
                                                                <div class="col-xl-12">
                                                                    <label class="form-control-label">Imagen</label>
																														        <input type=file size=60 name="file" class="form-control">
                                                                </div>
                                                            </div>
                                                            <ul class="pager wizard text-right">
                                                                <li class="next d-inline-block">
                                                                    <button class="btn btn-gradient-01" type="submit">Guardar</button>
                                                                </li>
                                                            </ul>
																													   
																													</form>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                   

                    <!-- End Offcanvas Sidebar -->
                </div>
                                                    

@endsection
