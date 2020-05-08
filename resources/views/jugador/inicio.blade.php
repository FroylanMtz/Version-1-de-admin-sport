@extends('jugador.plantilla_jugador')
	@section('cuerpoDashboard')
       <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
					<div class="jumbotron jumbotron-fluid"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                                <ul>
                                                    <li>
                                                        <div class="counter">8234</div>
                                                        <div class="heading">Followers</div>
                                                    </li>
                                                    <li>
                                                        <div class="counter">357</div>
                                                        <div class="heading">Likes</div>
                                                    </li>
                                                    <li>
                                                        <div class="counter">23</div>
                                                        <div class="heading">Products</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                    <img class="rounded-circle" src="assets/img/avatar/avatar-01.jpg" alt="...">
                                                </div>
                                                <div class="infos">
                                                    <h2>David Green</h2>
                                                    <div class="location">Las Vegas, Nevada, U.S.</div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                    <a class="btn btn-gradient-01" href="#"><i class="la la-check"></i>Follow</a>
                                                    <div class="actions dark">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="#" class="dropdown-item"> 
                                                                    Report
                                                                </a>
                                                                <a href="#" class="dropdown-item"> 
                                                                    Block
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="head-nav nav nav-tabs justify-content-center">
                                            <li><a class="active" href="db-social.html">Timeline</a></li>
                                            <li><a href="pages-about.html">About</a></li>
                                            <li><a href="pages-friends.html">Friends</a></li>
                                            <li><a href="javascript:void(0);">Photos</a></li>
                                            <li><a href="javascript:void(0);">Videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row">
                                    <div class="col-xl-3 column">
                                        <!-- Begin About -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5>About Me</h5>
                                            </div>
                                            <div class="widget-body">
                                                <p>
                                                    Hi, I'm David lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet in sem sed condimentum. Nullam vehicula iaculis orci ac facilisis.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End About -->
                                        <!-- Begin Twitter Feed -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5>Twitter Feed</h5>
                                            </div>
                                            <div class="widget-body p-0">
                                                <ul class="list-group w-100">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <div class="media-body align-self-center">
                                                                <div class="text-dark pb-2">
                                                                    <i class="ion-social-twitter align-middle text-twitter pr-2"></i>@dgreen_elisyam
                                                                </div>
                                                                <p>
                                                                    Suspendisse libero sapien, ultrices nec nibh sit amet, egestas accumsan nisl <a href="#" class="text-twitter">#Elisyam</a>
                                                                </p>
                                                                <small>1 hour ago</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <div class="media-body align-self-center">
                                                                <div class="text-dark pb-2">
                                                                    <i class="ion-social-twitter align-middle text-twitter pr-2"></i>@dgreen_elisyam
                                                                </div>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a imperdiet ipsum, sit amet hendrerit diam. Nam bibendum nec magna sed tincidunt.
                                                                    <a href="#" class="text-twitter">#Saerox</a>
                                                                </p>
                                                                <small>2 hours ago</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Twitter Feed -->
                                        <!-- Begin Blog Posts -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5>Blog Posts</h5>
                                            </div>
                                            <div class="widget-body p-0">
                                                <ul class="list-group w-100">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <div class="media-body align-self-center">
                                                                <h3 class="mb-3">Blog Post Title</h3>
                                                                <p>
                                                                    Curabitur iaculis consectetur enim vel dignissim. Ut ac mi dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer lobortis justo erat, ac faucibus risus laoreet semper. 
                                                                </p>
                                                                <small>1 hour ago</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <div class="media-body align-self-center">
                                                                <h3 class="mb-3">Another Blog Post Title</h3>
                                                                <p>
                                                                    Curabitur iaculis consectetur enim vel dignissim. Ut ac mi dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer lobortis justo erat, ac faucibus risus laoreet semper. 
                                                                </p>
                                                                <small>1 day ago</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Blog Posts -->
                                    </div>
                                    <!-- End Col -->
                                    <!-- Begin Timeline -->
                                    <div class="col-xl-6">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                                <div class="user-image">
                                                    <img class="rounded-circle" src="assets/img/avatar/avatar-01.jpg" alt="...">
                                                </div>
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">David Green</span>
                                                    </div>
                                                    <div class="time">25 min ago</div>
                                                </div>
                                                <div class="widget-options">
                                                    <div class="dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                            <i class="la la-ellipsis-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item"> 
                                                                <i class="la la-edit"></i>Edit Post
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item"> 
                                                                <i class="la la-trash"></i>Delete Post
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item"> 
                                                                <i class="la la-bell-slash"></i>Disable Notifications
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item faq"> 
                                                                <i class="la la-question-circle"></i>FAQ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                            <div class="widget-body">
                                                <p>
                                                    Nullam aliquam felis ut elit rutrum mattis. Curabitur arcu eros, imperdiet id gravida sit amet, pulvinar non ex. Cras ac ligula eget sapien suscipit luctus non a risus. Curabitur iaculis consectetur enim vel dignissim. Ut ac mi dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer lobortis justo erat, ac faucibus risus laoreet semper. Aenean et sollicitudin ante, vel finibus velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                </p>
                                            </div>
                                            <!-- End Widget Body -->
                                            <!-- Begin Widget Footer -->
                                            <div class="widget-footer d-flex align-items-center">
                                                <div class="col-xl-8 col-md-8 col-7 no-padding d-flex justify-content-start">
                                                    <div class="users-like">
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-01.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a class="view-more" href="javascript:void(0);">
                                                            +4
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-5 no-padding d-flex justify-content-end">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-comment"></i><span class="numb">12</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-heart-o"></i><span class="numb">30</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Footer -->
                                            <!-- Begin Comments -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <img class="rounded-circle" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Megan Duncan</span>
                                                        </div>
                                                        <div class="time">10 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a imperdiet ipsum, sit amet hendrerit diam. Nam bibendum nec magna sed tincidunt.
                                                    </p>
                                                </div>
                                                <div class="comments-footer d-flex align-items-center">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-flag"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <span class="rep">Reply</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Comments -->
                                            <!-- Begin Reply -->
                                            <div class="reply">
                                                <div class="reply-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <img class="rounded-circle" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Brandon Smith</span>
                                                        </div>
                                                        <div class="time">12 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="reply-body">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a imperdiet ipsum, sit amet hendrerit diam. Nam bibendum nec magna sed tincidunt.
                                                    </p>
                                                </div>
                                                <div class="reply-footer d-flex align-items-center">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-flag"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <span class="rep">Reply</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reply">
                                                <div class="reply-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <img class="rounded-circle" src="assets/img/avatar/avatar-06.jpg" alt="...">
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Beverly Oliver</span>
                                                        </div>
                                                        <div class="time">20 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="reply-body">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a imperdiet ipsum, sit amet hendrerit diam. Nam bibendum nec magna sed tincidunt.
                                                    </p>
                                                </div>
                                                <div class="reply-footer d-flex align-items-center">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-flag"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <span class="rep">Reply</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Reply -->
                                            <!-- Begin Publisher -->
                                            <div class="publisher publisher-multi">
                                                <textarea class="publisher-input" rows="3" placeholder="Add Comment"></textarea>
                                                <div class="publisher-bottom d-flex justify-content-end">
                                                    <a class="publisher-btn" href="javascript:void(0);"><i class="la la-smile-o"></i></a>
                                                    <a class="publisher-btn" href="javascript:void(0);"><i class="la la-camera"></i></a>
                                                    <button class="btn btn-gradient-01">Post Comment</button>
                                                </div>
                                            </div>
                                            <!-- End Publisher -->
                                        </div>
                                        <!-- End Widget -->
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                                <div class="user-image">
                                                    <img class="rounded-circle" src="assets/img/avatar/avatar-01.jpg" alt="...">
                                                </div>
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">David Green</span> shared an image
                                                    </div>
                                                    <div class="time">42 min ago</div>
                                                </div>
                                                <div class="widget-options">
                                                    <div class="dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                            <i class="la la-ellipsis-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item"> 
                                                                <i class="la la-edit"></i>Edit Post
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item"> 
                                                                <i class="la la-trash"></i>Delete Post
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item"> 
                                                                <i class="la la-bell-slash"></i>Disable Notifications
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item faq"> 
                                                                <i class="la la-question-circle"></i>FAQ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                            <div class="widget-body">
                                                <div class="content-img">
                                                    <a href="javascript:void(0);">
                                                        <img src="assets/img/background/01.jpg" class="img-fluid rounded" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Widget Body -->
                                            <!-- Begin Widget Footer -->
                                            <div class="widget-footer d-flex align-items-center">
                                                <div class="col no-padding d-flex justify-content-start">
                                                    <div class="users-like">
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-05.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-04.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col no-padding d-flex justify-content-end">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-comment"></i><span class="numb">38</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-heart-o"></i><span class="numb">94</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Footer -->
                                            <!-- Begin Comments -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <img class="rounded-circle" src="assets/img/avatar/avatar-03.jpg" alt="...">
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Louis Henry</span>
                                                        </div>
                                                        <div class="time">2 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        Donec nisi ipsum, porta a diam quis, luctus euismod sapien. Donec eu iaculis tortor, ut molestie velit. Praesent in pulvinar nulla, tincidunt suscipit ante.
                                                    </p>
                                                </div>
                                                <div class="comments-footer d-flex align-items-center">
                                                    <div class="meta">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="la la-flag"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <span class="rep">Reply</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Comments -->
                                            <!-- Begin Publisher -->
                                            <div class="publisher publisher-multi">
                                                <textarea class="publisher-input" rows="3" placeholder="Add Comment"></textarea>
                                                <div class="publisher-bottom d-flex justify-content-end">
                                                    <a class="publisher-btn" href="javascript:void(0);"><i class="la la-smile-o"></i></a>
                                                    <a class="publisher-btn" href="javascript:void(0);"><i class="la la-camera"></i></a>
                                                    <button class="btn btn-gradient-01">Post Comment</button>
                                                </div>
                                            </div>
                                            <!-- End Publisher -->
                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->
                                    <!-- Begin Column -->
                                    <div class="col-xl-3 column">
                                        <!-- Begin Badge -->
                                        <div class="widget has-shadow">
                                            <div class="new-badge text-center">
                                                <div class="badge-img">
                                                    <i class="ion-fireball"></i>
                                                </div>
                                                <div class="title">
                                                    <div class="heading">Congratulations</div>
                                                    <div class="text">You've got a new badge</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Badge -->
                                        <!-- Begin Friends -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5>Friends (104)</h5>
                                            </div>
                                            <div class="widget-body">
                                                <div class="friends-list">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-01.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-05.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                    </div>
                                                        <div class="margin-top-20 d-flex justify-content-between">
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-04.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <img src="assets/img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
                                                        </a>
                                                        <a class="view-more" href="javascript:void(0);">
                                                            +93
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Friends -->
                                        <!-- Begin Photos -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h5>Last Photos</h5>
                                            </div>
                                            <div class="widget-body p-3">
                                                <div class="row m-0">
                                                    <div class="col-xl-6 col-md-6 col-6 p-0">
                                                        <a href="javascript:void(0);">
                                                            <img class="img-fluid rounded border border-white" src="assets/img/background/01.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-6 p-0">
                                                        <a href="javascript:void(0);">
                                                            <img class="img-fluid rounded border border-white" src="assets/img/background/02.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-6 p-0">
                                                        <a href="javascript:void(0);">
                                                            <img class="img-fluid rounded border border-white" src="assets/img/background/03.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-6 p-0">
                                                        <a href="javascript:void(0);">
                                                            <img class="img-fluid rounded border border-white" src="assets/img/background/04.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-6 p-0">
                                                        <a href="javascript:void(0);">
                                                            <img class="img-fluid rounded border border-white" src="assets/img/background/05.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-6 p-0">
                                                        <a href="javascript:void(0);">
                                                            <img class="img-fluid rounded border border-white" src="assets/img/background/06.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Photos -->
                                        <!-- Begin Social Network -->
                                        <div class="widget no-bg text-center">
                                            <ul class="social-network">
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-facebook" title="Facebook">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-twitter" title="Twitter">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-youtube" title="Youtube">
                                                        <i class="ion-social-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="ico-linkedin" title="Linkedin">
                                                        <i class="ion-social-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Social Networks -->
                                    </div>
                                    <!-- End Column -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
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
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    <div class="off-sidebar from-right">
                        <div class="off-sidebar-container">
                            <header class="off-sidebar-header">
                                <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                                    <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                                    <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                                </ul>
                                <a href="#off-canvas" class="off-sidebar-close"></a>
                            </header>
                            <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                                <div class="tab-content">
                                    <!-- Begin Messenger -->
                                    <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                                        <!-- Begin Chat Message -->
                                        <span class="date">Today</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        Hi David, what's up?
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Hi Brandon, fine and you?
                                                   </p>
                                                    <p>
                                                       I'm working on the next update of Elisyam
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        I can't wait to see
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       I'm almost done
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date">Yesterday</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        I updated the server tonight
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Didn't you have any problems?
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        No!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Great!
                                                   </p>
                                                    <p>
                                                       See you later!
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Chat Message -->
                                        <!-- Begin Message Form -->
                                        <div class="enter-message">
                                            <div class="enter-message-form">
                                                <input type="text" placeholder="Enter your message..."/>
                                            </div>
                                            <div class="enter-message-button">
                                                <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Message Form -->
                                    </div>
                                    <!-- End Messenger -->
                                    <!-- Begin Today -->
                                    <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                                        <!-- Begin Today Stats -->
                                        <div class="sidebar-heading pt-0">Today</div>
                                        <div class="today-stats mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="la la-users"></i>
                                                    <div class="counter">264</div>
                                                    <div class="heading">Clients</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-cart-arrow-down"></i>
                                                    <div class="counter">360</div>
                                                    <div class="heading">Sales</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-money"></i>
                                                    <div class="counter">$ 4,565</div>
                                                    <div class="heading">Earnings</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Today Stats -->
                                        <!-- Begin Friends -->
                                        <div class="sidebar-heading">Friends</div>
                                        <div class="quick-friends mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Brandon Smith</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Louis Henry</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Nathan Hunter</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Megan Duncan</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Beverly Oliver</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Friends -->
                                        <!-- Begin Settings -->
                                        <div class="sidebar-heading">Settings</div>
                                        <div class="quick-settings mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Email</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox">
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Chat Message Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Settings -->
                                    </div>
                                    <!-- End Today -->
                                </div>
                            </div>
                            <!-- End Offcanvas Container -->
                        </div>
                        <!-- End Offsidebar Container -->
                    </div>
                    <!-- End Offcanvas Sidebar -->
                </div>
	@endsection