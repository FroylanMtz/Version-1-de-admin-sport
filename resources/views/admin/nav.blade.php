                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
												<span class="heading"> Administrador</span>
                        <ul class="list-unstyled">
													  <li><a href="{{route('admin.dashboard')}}"><i class="la ti-home"></i><span>Inicio</span></a></li>									
                            <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-trophy"></i><span>Torneos</span></a>
                                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                                    <li><a href="{{route('admin.verTorneos')}}">Ver Torneos</a></li>
                                </ul>
                            </li>
                            <li><a href="#dropdown-table" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>Jugadores</span></a>
                                <ul id="dropdown-table" class="collapse list-unstyled pt-0">
                                    <li><a href="{{route('admin.verJugadores')}}">Ver jugadores</a></li>
                                </ul>
                            </li>
													  <li><a href="#dropdown-caus" aria-expanded="false" data-toggle="collapse"><i class="la la-flag-checkered"></i><span>Causales</span></a>
                            <ul id="dropdown-caus" class="collapse list-unstyled pt-0">
                                <li><a href="{{route('admin.causales')}}">Crear</a></li>
														    <li><a href="{{route('admin.showCausales')}}">Ver</a></li>				
                            </ul>		
                            </li>
														<li><a href="/admin"><i class="la ti-money"></i><span>Pagos</span></a></li>
                        </ul>
										
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar <--></-->