@extends('coordinador.plantilla_coordinador')
@section('cuerpoDashboard')
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Formulario de Prueba</h2>
	                              
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-12">
                                <!-- Form -->
                   
                              
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Envio de mensajes</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="/sms" method="POST">
                                           {{csrf_field()}}
                                          <!--
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Mensaje</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            -->
                                     
                                           
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Numero de telefono</label>
                                                <div class="col-lg-9">
                                                    
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="mobile" name="mobile">
                                                            <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-secondary">
                                                                    <i class="la la-phone"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                   </div>
                                                    

@endsection



