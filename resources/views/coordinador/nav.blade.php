                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
												<span class="heading"> Coordinador</span>
                        <ul class="list-unstyled">
													  <li><a href="/"><i class="la ti-home"></i><span>Inicio</span></a></li>
													<!--
                            <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>Jugadores</span></a>
                                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                                    <li><a href="">Expulsados</a></li>
                                </ul>
                            </li>
													-->
													
                            <li><a href="#dropdown-table" aria-expanded="false" data-toggle="collapse"><i class="la la-trophy"></i><span>Torneos</span></a>
                                <ul id="dropdown-table" class="collapse list-unstyled pt-0">
                                    <li><a href="{{route('Coordinador.Torneo')}}">Crear</a></li>
																		<li><a href="#">Ver torneos</a></li>				
                                </ul>
                            </li>			
													
													
													  <li><a href="#dropdown-caus" aria-expanded="false" data-toggle="collapse"><i class="la la-group"></i><span>Equipos</span></a>
                            <ul id="dropdown-caus" class="collapse list-unstyled pt-0">
                                <li><a href="{{route('Coordinador.Equipo')}}">Crear</a></li>
                                <li><a href="#">Ver equipos</a></li>				
                            </ul>															
														</li>														
                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->