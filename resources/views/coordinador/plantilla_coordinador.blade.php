<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminSport</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>

					$(document).ready(() => {
						let url = location.href.replace(/\/$/, "");

						if (location.hash) {
							const hash = url.split("#");
							$('#myTab a[href="#'+hash[1]+'"]').tab("show");
							url = location.href.replace(/\/#/, "#");
							history.replaceState(null, null, url);
							setTimeout(() => {
								$(window).scrollTop(0);
							}, 400);
						} 

						$('a[data-toggle="tab"]').on("click", function() {
							let newUrl;
							const hash = $(this).attr("href");
							if(hash == "#home") {
								newUrl = url.split("#")[0];
							} else {
								newUrl = url.split("#")[0] + hash;
							}
							newUrl += "/";
							history.replaceState(null, null, newUrl);
						});
					});          
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/SportLogoSmartPhone.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon-16x16.png')}}">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/vendors/css/base/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/css/base/elisyam-1.5.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/owl.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/datatables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate/animate.min.css')}}">
			  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select/bootstrap-select.min.css')}}">
      
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{asset('/sweetalert2/sweetalert2.css')}}"></link>
		    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
        
        <!-- Jquery and Ajax -->
        <script src="{{asset('/jquery/jquery.js')}}"></script>
       <!-- <script src="{{asset('/js/html2canvas.js')}}"></script>
				<script src="{{asset('/js/jspdf.js')}}"></script>-->
			
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="db-default.html" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="assets/img/logo-big.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="assets/img/logo.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                            <!-- Search -->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                            <!-- End Search -->
                            <!-- Begin Notifications -->
                            <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu notification">
                                    <li>
                                        <div class="notifications-header">
                                            <div class="title">Notifications (4)</div>
                                            <div class="notifications-overlay"></div>
                                            <img src="assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New user registered
                                                </div>
                                                <span class="date">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-calendar-check-o"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New event added
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-history"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Server rebooted
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-twitter"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    You have 3 new followers
                                                </div>
                                                <span class="date">10 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Notifications -->
                            <!-- User -->
													
														<li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{asset('images/perfil.jpg')}}" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                        <img src="{{asset('images/perfil.jpg')}}" alt="..." class="rounded-circle">
                                    </li>
                                    <li>
                                        <a href="pages-profile.html" class="dropdown-item"> 
                                            Perfil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app-mail.html" class="dropdown-item"> 
                                            Mensajes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Coordinador/configuracion" class="dropdown-item no-padding-bottom"> 
                                            Configuracion
                                        </a>
                                    </li>
																	<li class="separator"></li>
																	  <li>
                                        <a href="/main/logout" class="dropdown-item"> 
                                            Cerrar Sesion
                                        </a>
                                    </li>
                                    <li class="separator"></li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                            <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
								@include('coordinador.nav')
								@yield('cuerpoDashboard')
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
			<script>
				$('#resultados_tabla_j_1').DataTable( {
								buttons: [
									'colvis',
									'excel',
									'print'
								]
						} );
					</script>
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="{{asset('assets/vendors/js/base/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/base/core.min.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Snippets -->
			  <script src="{{asset('assets/js/components/wizard/form-wizard.min.js')}}"></script><!--esta-->
        <!-- End Page Snippets -->
				<!-- SweetAlert2 -->
			 	<script src="{{asset('/sweetalert2/sweetalert2.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{asset('assets/js/components/validation/validation.min.js')}}"></script>      
      
      
      
        <!-- Begin Page Vendor Js -->
        <script src="{{asset('assets/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js')}}"></script><!--esta-->
        <script src="{{asset('assets/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/chart/chart.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/app/app.js')}}"></script>
 				<script src="{{asset('assets/vendors/js/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/vendors/js/datatables/buttons.print.min.js')}}"></script>
        <!-- End Page Vendor Js -->
				
        <!-- Begin Page Snippets -->
			
        <script src="{{asset('assets/js/components/tables/tables.js')}}"></script>
        <script src="{{asset('assets/js/dashboard/db-default.js')}}"></script>
			  <script src="{{asset('assets/js/components/notifications/notifications.min.js')}}"></script>
				<script src="{{asset('assets/vendors/js/bootstrap-select/bootstrap-select.min.js')}}"></script>
			
        <!-- End Page Snippets -->
	        <!-- Begin Vendor Js -->
        <!-- End Vendor Js -->
        <script src="{{asset('assets/vendors/js/noty/noty.min.js')}}"></script>
        <!-- End Page Vendor Js -->

    </body>
</html>