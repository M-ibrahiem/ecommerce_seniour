<!DOCTYPE html>
<!--
Template Name: Mintos - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Mintos I Statistics Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
    <link href="{{ asset('dash/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{ asset('dash/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dash/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dash/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block align-top" src="{{ asset('dash/dist/img/logo-light.png') }}" alt="brand" />
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show-on-hover active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dashboard
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item" href="dashboard1.html">CRM</a>
							<a class="dropdown-item" href="dashboard2.html">Project</a>
							<a class="dropdown-item active" href="dashboard3.html">Statistics</a>
							<a class="dropdown-item" href="dashboard4.html">classic</a>
							<a class="dropdown-item" href="dashboard5.html">Analytics</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show-on-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Application</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="chats.html">Chat</a>
                                    <a class="dropdown-item" href="calendar.html">Calendar</a>
                                    <a class="dropdown-item" href="email.html">Email</a>
                                    <a class="dropdown-item" href="file-manager.html">File Manager</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Authentication</a>
                                <div class="dropdown-menu open-right-side">
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Sign Up</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="signup.html">Cover</a>
                                            <a class="dropdown-item" href="signup-simple.html">Simple</a>
                                        </div>
                                    </div>
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Login</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="login.html">Cover</a>
                                            <a class="dropdown-item" href="login-simple.html">Simple</a>
                                        </div>
                                    </div>
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Recover Pwd</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                            <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="lock-screen.html">Lock Screen</a>
                                    <a class="dropdown-item" href="404.html">Error 404</a>
                                    <a class="dropdown-item" href="maintenance.html">Maintenance</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="profile.html">Profile</a>
                            <a class="dropdown-item" href="invoice.html">Invoice</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                            <a class="dropdown-item" href="activity.html">Activity</a>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show-on-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								User interface
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Components</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="alerts.html">Alerts</a>
                                    <a class="dropdown-item" href="avatar.html">Avatar</a>
                                    <a class="dropdown-item" href="badge.html">Badge</a>
                                    <a class="dropdown-item" href="buttons.html">Buttons</a>
                                    <a class="dropdown-item" href="cards.html">Cards</a>
                                    <a class="dropdown-item" href="carousel.html">Carousel</a>
                                    <a class="dropdown-item" href="collapse.html">Collapse</a>
                                    <a class="dropdown-item" href="dropdowns.html">Dropdown</a>
                                    <a class="dropdown-item" href="list-group.html">List Group</a>
                                    <a class="dropdown-item" href="modal.html">Modal</a>
                                    <a class="dropdown-item" href="nav.html">Nav</a>
                                    <a class="dropdown-item" href="navbar.html">Navbar</a>
                                    <a class="dropdown-item" href="nestable.html">Nestable</a>
                                    <a class="dropdown-item" href="pagination.html">Pagination</a>
                                    <a class="dropdown-item" href="popovers.html">Popovers</a>
                                    <a class="dropdown-item" href="progress.html">Progress</a>
                                    <a class="dropdown-item" href="tooltip.html">Tooltip</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Content</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="typography.html">Typography</a>
                                    <a class="dropdown-item" href="images.html">Images</a>
                                    <a class="dropdown-item" href="media-object.html">Media Object</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Utilities</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="background.html">Background</a>
                                    <a class="dropdown-item" href="border.html">Border</a>
                                    <a class="dropdown-item" href="colors.html">Colors</a>
                                    <a class="dropdown-item" href="embeds.html">Embeds</a>
                                    <a class="dropdown-item" href="icons.html">Icons</a>
                                    <a class="dropdown-item" href="shadow.html">Shadow</a>
                                    <a class="dropdown-item" href="sizing.html">Sizing</a>
                                    <a class="dropdown-item" href="spacing.html">Spacing</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Forms</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="form-element.html">Form Elements</a>
                                    <a class="dropdown-item" href="input-groups.html">Input Groups</a>
                                    <a class="dropdown-item" href="form-layout.html">Form Layout</a>
                                    <a class="dropdown-item" href="form-mask.html">Form Mask</a>
                                    <a class="dropdown-item" href="form-validation.html">Form Validation</a>
                                    <a class="dropdown-item" href="form-wizard.html">Form Wizard</a>
                                    <a class="dropdown-item" href="file-upload.html">File Upload</a>
                                    <a class="dropdown-item" href="editor.html">Editor</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Tables</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="basic-table.html">Basic Table</a>
                                    <a class="dropdown-item" href="data-table.html">Data Table</a>
                                    <a class="dropdown-item" href="responsive-table.html">Responsive Table</a>
                                    <a class="dropdown-item" href="editable-table.html">Editable Table</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Charts</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="line-charts.html">Line Chart</a>
                                    <a class="dropdown-item" href="area-charts.html">Area Chart</a>
                                    <a class="dropdown-item" href="bar-charts.html">Bar Chart</a>
                                    <a class="dropdown-item" href="pie-charts.html">Pie Chart</a>
                                    <a class="dropdown-item" href="realtime-charts.html">Realtime Chart</a>
                                    <a class="dropdown-item" href="mini-charts.html">Mini Chart</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Maps</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="google-map.html">Google Map</a>
                                    <a class="dropdown-item" href="vector-map.html">Vector Map</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="documentation.html" >Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log<span class="badge badge-success badge-sm badge-pill ml-10">v 1.0</span></a>
                    </li>
                </ul>
                <form class="navbar-search-alt">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="feather-icon"><i data-feather="search"></i></span></span>
                        </div>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('dash/dist/img/avatar1.jpg') }}" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('dash/dist/img/avatar2.jpg') }}" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Mintos head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{ asset('dash/dist/img/avatar12.jpg') }}" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <img class="brand-img d-inline-block align-top" src="{{ asset('dash/dist/img/logo-light.png') }}" alt="brand" />
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="dashboard1.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{ asset('dash/dist/img/layout1.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard2.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{ asset('dash/dist/img/layout2.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="javascript:void(0);" class="col-6 active mb-30">
                                <img class="rounded opacity-70" src="{{ asset('dash/dist/img/layout3.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard4.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="{{ asset('dash/dist/img/layout4.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard5.html" class="col-6">
                                <img class="rounded opacity-70" src="{{ asset('dash/dist/img/layout5.png') }}" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="{{ asset('dash/dist/img/logo-light.png') }}" alt="brand" />
            <img class="d-none" src="{{ asset('dash/dist/img/logo-dark.png') }}" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header">
                    <div>
						<h2 class="hk-pg-title font-weight-600 mb-10">Statistics</h2>
						<p>Earnings from subscriptions that stared in the period 1 - 31 December 2018<i class="ion ion-md-help-circle-outline ml-5" data-toggle="tooltip" data-placement="top" title="Need help about earning stats"></i></p>
                    </div>
					<div class="d-flex">
                        <div class="btn-group btn-group-sm" role="group">
							<button type="button" class="btn btn-outline-primary active">today</button>
							<button type="button" class="btn btn-outline-primary">week</button>
							<button type="button" class="btn btn-outline-primary">month</button>
							<button type="button" class="btn btn-outline-primary">quarter</button>
							<button type="button" class="btn btn-outline-primary">year</button>
						</div>
                    </div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<!-- Page Alerts -->
						<div class="alert alert-primary alert-wth-icon alert-dismissible fade show" role="alert">
							<span class="alert-icon-wrap"><i class="zmdi zmdi-help"></i></span> You're profile is waiting to be activated. Once done, you can request meetings with them.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<!-- /Page Alerts -->
						<div class="hk-row">
							<div class="col-md-4">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">budget</span>
												<span class="d-block display-6 font-weight-400 text-dark">$12,783</span>
											</div>
											<div>
												<div id="sparkline_4"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Total hours</span>
												<span class="d-block display-6 font-weight-400 text-dark">659</span>
											</div>
											<div>
												<div id="sparkline_5"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Progress</span>
												<span class="d-block display-6 font-weight-400 text-dark">91.42%</span>
											</div>
											<div>
												<span id="pie_chart_1" class="d-flex easy-pie-chart" data-percent="91">
													<span class="percent head-font">91</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						    <div class="card hk-dash-type-1 overflow-hide">
							<div class="card-header pa-0">
								<div class="nav nav-tabs nav-light nav-justified" id="dash-tab" role="tablist">
									<a class="d-flex align-items-center justify-content-center nav-item nav-link active" id="dash-tab-1" data-toggle="tab" href="#nav-dash-1" role="tab" aria-selected="true">
										<div class="d-flex">
											<div>
												<span class="d-block mb-5"><span class="display-4 counter-anim">16,843</span></span>
												<span class="d-block"><i class="zmdi zmdi-eye mr-10"></i>views</span>
											</div>
										</div>
									</a>
									<a class="d-flex align-items-center justify-content-center nav-item nav-link" id="dash-tab-2" data-toggle="tab" href="#nav-dash-2" role="tab" aria-selected="false">
										<div class="d-flex">
											<div>
												<span class="d-block mb-5"><span class="display-4 counter-anim">2457</span></span>
												<span class="d-block"><i class="zmdi zmdi-trending-up mr-10"></i>sales</span>
											</div>
										</div>
									</a>
									<a class="d-flex align-items-center justify-content-center nav-item nav-link" id="dash-tab-3" data-toggle="tab" href="#nav-dash-3" role="tab" aria-controls="nav-dash-3" aria-selected="false">
										<div class="d-flex">
											<div>
												<span class="d-block mb-5"><span class="display-4 counter-anim">12,726</span></span>
												<span class="d-block"><i class="zmdi zmdi-money mr-10"></i>total</span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-dash-1" role="tabpanel" aria-labelledby="dash-tab-1">
										<div id="e_chart_11" class="echart" style="height:310px;"></div>
									</div>
									<div class="tab-pane fade" id="nav-dash-2" role="tabpanel" aria-labelledby="dash-tab-2">
										<div id="e_chart_12" class="echart" style="height:310px;"></div>
									</div>
									<div class="tab-pane fade" id="nav-dash-3" role="tabpanel" aria-labelledby="dash-tab-3">
										<div id="e_chart_13" class="echart" style="height:310px;"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body pa-0">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-hover mb-0">
											<thead>
												<tr>
													<th>Data Range</th>
													<th>Visits</th>
													<th>Visitors</th>
													<th>Views</th>
													<th>Failure</th>
													<th>View depth</th>
													<th>Time on site</th>
													<th>% of New</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2000 - 4000</td>
													<td>
														<span class="d-block">3211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">86</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">1211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">1241</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">76</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">12:11</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">80%</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
												</tr>
												<tr>
													<td>3000 - 5000</td>
													<td>
														<span class="d-block">3211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-80" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">86</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">1211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">3211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-40" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">56</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-50" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">17:11</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">80%</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
												</tr>
												<tr>
													<td>7000 - 8000</td>
													<td>
														<span class="d-block">6211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-65" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">56</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">1211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">8211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-90" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">96</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-95" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">17:11</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">60%</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
												</tr>
												<tr>
													<td>8000 - 9000</td>
													<td>
														<span class="d-block">7211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">66</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">5211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">3211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">86</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">12:11</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">80%</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
												</tr>
												<tr>
													<td>9000 - 10000</td>
													<td>
														<span class="d-block">4211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">66</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">1251</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">3211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-40" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">86</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-20" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">19:11</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">80%</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
												</tr>
												<tr>
													<td>10000 - 15000</td>
													<td>
														<span class="d-block">9211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">74</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-30" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">1211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-90" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">4211</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">90</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-90" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">19:11</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
													<td>
														<span class="d-block">80%</span>
														<span class="d-block mt-5">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
			</div>
            <!-- /Container -->
			<!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dash/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dash/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('dash/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dash/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dash/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('dash/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('dash/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{ asset('dash/dist/js/toggle-data.js')}}"></script>

	<!-- Counter Animation JavaScript -->
	<script src="{{ asset('dash/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('dash/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

	<!-- Easy pie chart JS -->
    <script src="{{ asset('dash/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>

	<!-- Sparkline JavaScript -->
    <script src="{{ asset('dash/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

	<!-- Morris Charts JavaScript -->
    <script src="{{ asset('dash/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('dash/vendors/morris.js/morris.min.js')}}"></script>

	<!-- EChartJS JavaScript -->
    <script src="{{ asset('dash/vendors/echarts/dist/echarts-en.min.js')}}"></script>

	<!-- Peity JavaScript -->
    <script src="{{ asset('dash/vendors/peity/jquery.peity.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dash/dist/js/init.js')}}"></script>
	<script src="{{ asset('dash/dist/js/dashboard3-data.js')}}"></script>

</body>

</html>
