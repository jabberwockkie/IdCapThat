<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>I'd Cap That | Hockey Cap Info</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="I'd Cap That">
	<meta name="author" content="Kevin &amp; Matt">

	<!-- CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
	<link href="assets/css/main.css" rel="stylesheet" >

	<!--[if lte IE 9]>
			<link href="assets/css/main-ie.min.css" rel="stylesheet" type="text/css" media="screen" />
			<link href="assets/css/main-ie-part2.min.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

</head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- TOP BAR -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 logo">
						<a href="index.html">
							<img src="assets/img/kingadmin-logo-white.png" alt="KingAdmin - Admin Dashboard" />
						</a>
						<h1 class="sr-only">KingAdmin Admin Dashboard</h1>
					</div>
					<!-- end logo -->
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-3">
								<!-- search box -->
								<div id="tour-searchbox" class="input-group searchbox">
									<input type="search" class="form-control" placeholder="enter keyword here...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
									</span>
								</div>
								<!-- end search box -->
							</div>
							<div class="col-md-9">
								<div class="top-bar-right">
									<!-- responsive menu bar icon -->
									<a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
									<!-- end responsive menu bar icon -->
									<button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour</button>
									<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>
									<div class="notifications">
										<ul>
											<!-- notification: inbox -->
											<li class="notification-item inbox">
												<div class="btn-group">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-envelope"></i>
														<span class="count">2</span>
														<span class="circle"></span>
													</a>

													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 2 unread messages</em>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left">
																		<img class="media-object" src="assets/img/user1.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Antonius</h5>
																		<p class="text">The problem just happened this morning. I can't see ...</p>
																		<span class="timestamp">4 minutes ago</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item unread clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left">
																		<img class="media-object" src="assets/img/user2.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Michael</h5>
																		<p class="text">Hey dude, cool theme!</p>
																		<span class="timestamp">2 hours ago</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item unread clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left">
																		<img class="media-object" src="assets/img/user3.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Stella</h5>
																		<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
																		<span class="timestamp">Oct 6</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left">
																		<img class="media-object" src="assets/img/user4.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Jane Doe</h5>
																		<p class="text"><i class="fa fa-reply"></i> Please check the status of your ...</p>
																		<span class="timestamp">Oct 2</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left">
																		<img class="media-object" src="assets/img/user5.png" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">John Simmons</h5>
																		<p class="text"><i class="fa fa-reply"></i> I've fixed the problem :)</p>
																		<span class="timestamp">Sep 12</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="notification-footer">
															<a href="#">View All Messages</a>
														</li>
													</ul>
												</div>
											</li>
											<!-- end notification: inbox -->

											<!-- notification: general -->
											<li class="notification-item general">
												<div class="btn-group">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-bell"></i>
														<span class="count">8</span>
														<span class="circle"></span>
													</a>
													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 8 notifications</em>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">1 minute ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-user green-font"></i>
																<span class="text">New registered user</span>
																<span class="timestamp">12 minutes ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">18 minutes ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-shopping-cart red-font"></i>
																<span class="text">4 new sales order</span>
																<span class="timestamp">4 hours ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-edit yellow-font"></i>
																<span class="text">3 product reviews awaiting moderation</span>
																<span class="timestamp">1 day ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">3 days ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">Oct 15</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-warning red-font"></i>
																<span class="text red-font">Low disk space!</span>
																<span class="timestamp">Oct 11</span>
															</a>
														</li>
														<li class="notification-footer">
															<a href="#">View All Notifications</a>
														</li>
													</ul>
												</div>
											</li>
											<!-- end notification: general -->
										</ul>
									</div>

									<!-- logged user and the menu -->
									<div class="logged-user">
										<div class="btn-group">
											<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="assets/img/user-avatar.png" alt="User Avatar" />
												<span class="name">Stacy Rose</span>
												<span class="caret"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<span class="text">Profile</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-cog"></i>
														<span class="text">Settings</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-power-off"></i>
														<span class="text">Logout</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- end logged user and the menu -->
								</div>
								<!-- /top-bar-right -->
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top -->

		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">

						<!-- main-nav -->
						<nav class="main-nav">

							<ul class="main-menu">
								<li class="active">
									<a href="index.html"><i class="fa fa-dashboard fa-fw"></i>
										<span class="text">Dashboard</span>
									</a>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i>
										<span class="text">Pages</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="page-profile.html">
												<span class="text">Profile</span>
											</a>
										</li>
										<li>
											<a href="page-invoice.html">
												<span class="text">Invoice</span>
											</a>
										</li>
										<li>
											<a href="page-knowledgebase.html">
												<span class="text">Knowledge Base</span>
											</a>
										</li>
										<li>
											<a href="page-inbox.html">
												<span class="text">Inbox</span>
											</a>
										</li>
										<li>
											<a href="page-new-message.html">
												<span class="text">New Message
													<span class="badge element-bg-color-blue">New</span>
												</span>
											</a>
										</li>
										<li>
											<a href="page-view-message.html">
												<span class="text">View Message
													<span class="badge element-bg-color-blue">New</span>
												</span>
											</a>
										</li>
										<li>
											<a href="page-search-result.html">
												<span class="text">Search Result
													<span class="badge element-bg-color-blue">New</span>
												</span>
											</a>
										</li>
										<li>
											<a href="page-submit-ticket.html">
												<span class="text">Submit Ticket
													<span class="badge element-bg-color-blue">New</span>
												</span>
											</a>
										</li>
										<li>
											<a href="page-register.html">
												<span class="text">Register</span>
											</a>
										</li>
										<li>
											<a href="page-login.html">
												<span class="text">Login</span>
											</a>
										</li>
										<li>
											<a href="page-404.html">
												<span class="text">404</span>
											</a>
										</li>
										<li>
											<a href="page-blank.html">
												<span class="text">Blank Page</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-bar-chart-o fw"></i>
										<span class="text">Charts &amp; Statistics</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="charts-statistics.html">
												<span class="text">Charts</span>
											</a>
										</li>
										<li>
											<a href="charts-statistics-interactive.html">
												<span class="text">Interactive Charts</span>
											</a>
										</li>
										<li>
											<a href="charts-statistics-real-time.html">
												<span class="text">Realtime Charts</span>
											</a>
										</li>
										<li>
											<a href="charts-d3charts.html">
												<span class="text">D3 Charts</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i>
										<span class="text">Forms</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="form-inplace-editing.html">
												<span class="text">In-place Editing</span>
											</a>
										</li>
										<li>
											<a href="form-elements.html">
												<span class="text">Form Elements
													<span class="badge element-bg-color-blue">Updated</span>
												</span>
											</a>
										</li>
										<li>
											<a href="form-layouts.html">
												<span class="text">Form Layouts</span>
											</a>
										</li>
										<li>
											<a href="form-bootstrap-elements.html">
												<span class="text">Bootstrap Elements</span>
											</a>
										</li>
										<li>
											<a href="form-validations.html">
												<span class="text">Validation</span>
											</a>
										</li>
										<li>
											<a href="form-file-upload.html">
												<span class="text">File Upload</span>
											</a>
										</li>
										<li>
											<a href="form-text-editor.html">
												<span class="text">Text Editor</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-list-alt fw"></i>
										<span class="text">UI Elements</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="ui-elements-general.html">
												<span class="text">General Elements</span>
											</a>
										</li>
										<li>
											<a href="ui-elements-tabs.html">
												<span class="text">Tabs
													<span class="badge element-bg-color-blue">New</span>
												</span>
											</a>
										</li>
										<li>
											<a href="ui-elements-buttons.html">
												<span class="text">Buttons</span>
											</a>
										</li>
										<li>
											<a href="ui-elements-icons.html">
												<span class="text">Icons
													<span class="badge element-bg-color-blue">Updated</span>
												</span>
											</a>
										</li>
										<li>
											<a href="ui-elements-flash-message.html">
												<span class="text">Flash Message</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="widgets.html"><i class="fa fa-puzzle-piece fa-fw"></i>
										<span class="text">Widgets</span>
									</a>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-gears fw"></i>
										<span class="text">Components</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="components-wizard.html">
												<span class="text">Wizard (with validation)</span>
											</a>
										</li>
										<li>
											<a href="components-calendar.html">
												<span class="text">Calendar</span>
											</a>
										</li>
										<li>
											<a href="components-maps.html">
												<span class="text">Maps
													<span class="badge element-bg-color-blue">Updated</span>
												</span>
											</a>
										</li>
										<li>
											<a href="components-gallery.html">
												<span class="text">Gallery</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-table fw"></i>
										<span class="text">Tables</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="tables-static-table.html">
												<span class="text">Static Table
													<span class="badge element-bg-color-blue">Updated</span>
												</span>
											</a>
										</li>
										<li>
											<a href="tables-dynamic-table.html">
												<span class="text">Dynamic Table
													<span class="badge element-bg-color-blue">Updated</span>
												</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="typography.html"><i class="fa fa-font fa-fw"></i>
										<span class="text">Typography</span>
									</a>
								</li>
							</ul>
						</nav>
						<!-- /main-nav -->

						<div class="sidebar-minified js-toggle-minified">
							<i class="fa fa-angle-left"></i>
						</div>

						<!-- sidebar content -->
						<div class="sidebar-content">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h5><i class="fa fa-lightbulb-o"></i> Tips</h5>
								</div>
								<div class="panel-body">
									<p>You can do live search to the widget at search box located at top bar. It's very useful if your dashboard is full of widget.</p>
								</div>
							</div>

							<h5 class="label label-default"><i class="fa fa-info-circle"></i> Server Info</h5>
							<ul class="list-unstyled list-info-sidebar bottom-30px">
								<li class="data-row">
									<div class="data-name">Disk Space Usage</div>
									<div class="data-value">
										274.43 / 2 GB
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
												<span class="sr-only">10%</span>
											</div>
										</div>
									</div>
								</li>
								<li class="data-row">
									<div class="data-name">Monthly Bandwidth Transfer</div>
									<div class="data-value">
										230 / 500 GB
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%">
												<span class="sr-only">46%</span>
											</div>
										</div>
									</div>
								</li>
								<li class="data-row">
									<span class="data-name">Database Disk Space</span>
									<span class="data-value">219.45 MB</span>
								</li>
								<li class="data-row">
									<span class="data-name">Operating System</span>
									<span class="data-value">Linux</span>
								</li>
								<li class="data-row">
									<span class="data-name">Apache Version</span>
									<span class="data-value">2.4.6</span>
								</li>
								<li class="data-row">
									<span class="data-name">PHP Version</span>
									<span class="data-value">5.3.27</span>
								</li>
								<li class="data-row">
									<span class="data-name">MySQL Version</span>
									<span class="data-value">5.5.34-cll</span>
								</li>
								<li class="data-row">
									<span class="data-name">Architecture</span>
									<span class="data-value">x86_64</span>
								</li>
							</ul>
						</div>
						<!-- end sidebar content -->
					</div>
					<!-- end left sidebar -->

					<!-- top general alert -->
					<div class="alert alert-danger top-general-alert">
						<span>If you
							<strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
						<button type="button" class="close">&times;</button>
					</div>
					<!-- end top general alert -->

					<!-- content-wrapper -->
					<div class="col-md-10 content-wrapper">
						<div class="row">
							<div class="col-md-4 ">
								<ul class="breadcrumb">
									<li><i class="fa fa-home"></i>
										<a href="#">Home</a>
									</li>
									<li class="active">Dashboard</li>
								</ul>
							</div>
							<div class="col-md-8 ">
								<div class="top-content">
									<ul class="list-inline mini-stat">
										<li>
											<h5>LIKES
												<span class="stat-value stat-color-orange"><i class="fa fa-plus-circle"></i> 81,450</span>
											</h5>
											<span id="mini-bar-chart1" class="mini-bar-chart"></span>
										</li>
										<li>
											<h5>SUBSCRIBERS
												<span class="stat-value stat-color-blue"><i class="fa fa-plus-circle"></i> 150,743</span>
											</h5>
											<span id="mini-bar-chart2" class="mini-bar-chart"></span>
										</li>
										<li>
											<h5>CUSTOMERS
												<span class="stat-value stat-color-seagreen"><i class="fa fa-plus-circle"></i> 43,748</span>
											</h5>
											<span id="mini-bar-chart3" class="mini-bar-chart"></span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- main -->
						<div class="content">
							<div class="main-header">
								<h2>DASHBOARD</h2>
								<em>the first priority information</em>
							</div>

							<div class="main-content">
								<div class="row">
									<div class="col-md-9">
										<!-- WIDGET NO HEADER -->
										<div class="widget widget-hide-header">
											<div class="widget-header hide">
												<h3>Summary Info</h3>
											</div>
											<div class="widget-content">
												<div class="row">
													<div class="col-md-3">
														<div class="easy-pie-chart green" data-percent="70">
															<span class="percent">70</span>
														</div>
														<p class="text-center">Task Completion</p>
													</div>
													<div class="col-md-3">
														<div class="easy-pie-chart red" data-percent="22">
															<span class="percent">22</span>
														</div>
														<p class="text-center">Overall Project Completion</p>
													</div>
													<div class="col-md-3">
														<div class="easy-pie-chart yellow" data-percent="65">
															<span class="percent">65</span>
														</div>
														<p class="text-center">Disk Space Used</p>
													</div>
													<div class="col-md-3">
														<div class="easy-pie-chart red" data-percent="87">
															<span class="percent">87</span>
														</div>
														<p class="text-center">Bandwidth Used</p>
													</div>
												</div>
											</div>
										</div>
										<!-- WIDGET NO HEADER -->
									</div>
									<div class="col-md-3">
										<!-- WIDGET REMINDER -->
										<div class="widget widget-hide-header widget-reminder">
											<div class="widget-header hide">
												<h3>Today's Reminder</h3>
											</div>
											<div class="widget-content">
												<div class="today-reminder">
													<h4 class="reminder-title">Project Meeting</h4>
													<p class="reminder-time"><i class="fa fa-clock-o"></i> 9:00 AM</p>
													<p class="reminder-place">War Room</p>
													<em class="reminder-notes">Bring weekly report summary</em>
													<i class="fa fa-bell"></i>
													<div class="btn-group btn-group-xs">
														<button type="button" class="btn btn-warning"><i class="fa fa-cloud-upload"></i> Sync</button>
														<div class="btn-group  btn-group-xs">
															<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Remind Me <span class="caret"></span></button>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="#">15 minutes later</a>
																</li>
																<li>
																	<a href="#">30 minutes later</a>
																</li>
																<li>
																	<a href="#">1 hour later</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END WIDGET REMINDER -->
									</div>
								</div>

								<!-- WIDGET MAIN CHART WITH TABBED CONTENT -->
								<div class="widget">
									<div class="widget-header">
										<h3><i class="fa fa-bar-chart-o"></i> Sales Stat</h3>
										<em>- Visits, Sales and Traffic Source</em> <button type="button" class="btn btn-link btn-help"><i class="fa fa-question-circle"></i></button>
										<div class="btn-group widget-header-toolbar">
											<a href="#" id="tour-focus" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
											<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
											<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
										</div>
									</div>
									<div class="widget-content">
										<!-- chart tab nav -->
										<div class="chart-nav">
											<strong>Select period:</strong>
											<ul id="sales-stat-tab">
												<li class="active">
													<a href="#week">Weekly</a>
												</li>
												<li>
													<a href="#month">Monthly</a>
												</li>
												<li>
													<a href="#year">Annually</a>
												</li>
											</ul>
										</div>
										<!-- end chart tab nav -->

										<!-- chart placeholder-->
										<div class="chart-content">
											<div class="demo-flot-chart sales-chart"></div>
										</div>
										<!-- end chart placeholder-->

										<hr class="separator">

										<!-- secondary stat -->
										<div class="secondary-stat">
											<div class="row">
												<div class="col-lg-4">
													<div id="secondary-stat-item1" class="secondary-stat-item big-number-stat clearfix">
														<div class="data">
															<span class="col-left big-number">260</span>
															<span class="col-right">
																<em>New Orders</em>
																<em>3% <i class="fa fa-caret-down"></i></em>
															</span>
														</div>
														<div id="spark-stat1" class="inlinesparkline">Loading...</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div id="secondary-stat-item2" class="secondary-stat-item big-number-stat clearfix">
														<p class="data">
															<span class="col-left big-number">$23,000</span>
															<span class="col-right">
																<em>Revenue</em>
																<em>5% <i class="fa fa-caret-up"></i></em>
															</span>
														</p>
														<div id="spark-stat2" class="inlinesparkline">Loading...</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div id="secondary-stat-item3" class="secondary-stat-item big-number-stat clearfix">
														<p class="data">
															<span class="col-left big-number">$47,000</span>
															<span class="col-right">
																<em>Total Sales</em>
																<em>7% <i class="fa fa-caret-up"></i></em>
															</span>
														</p>
														<div id="spark-stat3" class="inlinesparkline">Loading...</div>
													</div>
												</div>
											</div>
										</div>
										<!-- end secondary stat -->
									</div>
								</div>
								<!-- END WIDGET MAIN CHART WITH TABBED CONTENT -->

								<div class="row">
									<div class="col-md-6">
										<!-- WIDGET TABLE -->
										<div class="widget widget-table">
											<div class="widget-header">
												<h3><i class="fa fa-desktop"></i> Browser &amp; OS</h3>
												<div class="btn-group widget-header-toolbar">
													<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
													<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
													<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
												</div>
												<div class="btn-group widget-header-toolbar">
													<div class="control-inline toolbar-item-group">
														<span class="control-title">New Visits:</span>
														<div class="label label-success"><i class="fa fa-caret-up"></i> 3.5%</div>
													</div>
												</div>
											</div>
											<div class="widget-content">
												<table id="visit-stat-table" class="table table-sorting table-striped table-hover datatable">
													<thead>
														<tr>
															<th>Browser</th>
															<th>Operating System</th>
															<th>Visits</th>
															<th>New Visits</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Chrome</td>
															<td>Macintosh</td>
															<td>360</td>
															<td>82.78%</td>
														</tr>
														<tr>
															<td>Chrome</td>
															<td>Windows</td>
															<td>582</td>
															<td>87.24%</td>
														</tr>
														<tr>
															<td>Chrome</td>
															<td>Linux</td>
															<td>172</td>
															<td>45.21%</td>
														</tr>
														<tr>
															<td>Chrome</td>
															<td>iOS</td>
															<td>86</td>
															<td>35.23%</td>
														</tr>
														<tr>
															<td>Firefox</td>
															<td>Windows</td>
															<td>280</td>
															<td>63.12%</td>
														</tr>
														<tr>
															<td>Firefox</td>
															<td>Android</td>
															<td>236</td>
															<td>58.02%</td>
														</tr>
														<tr>
															<td>Internet Explorer</td>
															<td>Windows</td>
															<td>145</td>
															<td>45.23%</td>
														</tr>
														<tr>
															<td>Safari</td>
															<td>Macintosh</td>
															<td>103</td>
															<td>22.12%</td>
														</tr>
														<tr>
															<td>Safari</td>
															<td>iOS</td>
															<td>302</td>
															<td>56.98%</td>
														</tr>
														<tr>
															<td>Opera</td>
															<td>Windows</td>
															<td>328</td>
															<td>67.12%</td>
														</tr>
														<tr>
															<td>Opera</td>
															<td>Macintosh</td>
															<td>22</td>
															<td>87.21%</td>
														</tr>
														<tr>
															<td>Chrome</td>
															<td>iOS</td>
															<td>45</td>
															<td>23.21%</td>
														</tr>
														<tr>
															<td>Firefox</td>
															<td>Windows</td>
															<td>67</td>
															<td>27.11%</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!-- END WIDGET TABLE -->

										<!-- WIDGET DONUT AND PIE CHART -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-truck"></i> Traffic Source</h3>
												<em>- Visits based on source of traffic</em>
												<div class="btn-group widget-header-toolbar">
													<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
													<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
													<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
												</div>
											</div>
											<div class="widget-content">
												<div class="demo-flot-chart" id="demo-donut-chart"></div>
												<div class="panel panel-default panel-pie-chart">
													<div class="panel-heading">
														<h3 class="panel-title">Last Week Visits</h3>
													</div>
													<div class="panel-body">
														<ul class="list-inline">
															<li>
																<span id="mini-pie-chart1" class="mini-pie-chart"></span>
																<div>Mon</div>
															</li>
															<li>
																<span id="mini-pie-chart2" class="mini-pie-chart"></span>
																<div>Tue</div>
															</li>
															<li>
																<span id="mini-pie-chart3" class="mini-pie-chart"></span>
																<div>Wed</div>
															</li>
															<li>
																<span id="mini-pie-chart4" class="mini-pie-chart"></span>
																<div>Thu</div>
															</li>
															<li>
																<span id="mini-pie-chart5" class="mini-pie-chart"></span>
																<div>Fri</div>
															</li>
															<li>
																<span id="mini-pie-chart6" class="mini-pie-chart"></span>
																<div>Sat</div>
															</li>
															<li>
																<span id="mini-pie-chart7" class="mini-pie-chart"></span>
																<div>Sun</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- END WIDGET DONUT AND PIE CHART -->

									</div>
									<div class="col-md-6">
										<!-- WIDGET SALES MAP -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-globe"></i> US Sales Map</h3>
												<em>- US map with plottable latitude and longitude</em>
												<div class="btn-group widget-header-toolbar">
													<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
													<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
													<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
												</div>
											</div>
											<div class="widget-content">
												<div class="map-custom-width data-us-map">
													<div class="map"></div>
													<div class="plotLegend"></div>
												</div>
											</div>
										</div>
										<!-- END WIDGET SALES MAP -->

										<!-- WIDGET INLINE SPARKLINE -->
										<div class="widget widget-sparkline">
											<div class="widget-header">
												<h3><i class="fa fa-bar-chart-o"></i> Visits Stat</h3>
												<em>- Sparkline Charts With Random Data</em>
												<div class="btn-group widget-header-toolbar">
													<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
													<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
													<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
												</div>
											</div>
											<div class="widget-content">
												<div class="row first">
													<div class="col-md-6">
														<div class="sparkline-stat-item">
															<div class="info">
																<span>Visits</span>
																<strong>1,363</strong>
															</div>
															<span id="sparkline1" class="inlinesparkline">Loading...</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="sparkline-stat-item">
															<div class="info">
																<span>Unique Visitors</span>
																<strong>1,221</strong>
															</div>
															<span id="sparkline2" class="inlinesparkline">Loading...</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="sparkline-stat-item last">
															<div class="info">
																<span>Page Views</span>
																<strong>2,300</strong>
															</div>
															<span id="sparkline3" class="inlinesparkline">Loading...</span>
														</div>
													</div>

													<div class="col-md-6">
														<div class="sparkline-stat-item">
															<div class="info">
																<span>Pages/Visit</span>
																<strong>1.19</strong>
															</div>
															<span id="sparkline4" class="inlinesparkline">Loading...</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="sparkline-stat-item">
															<div class="info">
																<span>Avg. Visit Duration</span>
																<strong>00:00:30</strong>
															</div>
															<span id="sparkline5" class="inlinesparkline">Loading...</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="sparkline-stat-item last">
															<div class="info">
																<span>% New Visits</span>
																<strong>28.35%</strong>
															</div>
															<span id="sparkline6" class="inlinesparkline">Loading...</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END WIDGET INLINE SPARKLINE -->
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<!-- WIDGET TASKS -->
										<div class="widget">
											<div class="widget-header">
												<h3><i class="fa fa-tasks"></i> My Tasks</h3>
												<em>- Summary of Tasks</em>
												<div class="btn-group widget-header-toolbar">
													<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
													<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
													<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
												</div>
											</div>
											<div class="widget-content">
												<ul class="task-list">
													<li>
														<p>Updating Users Settings
															<span class="label label-danger">23%</span>
														</p>
														<div class="progress progress-xs">
															<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
																<span class="sr-only">23% Complete</span>
															</div>
														</div>
													</li>
													<li>
														<p>Load &amp; Stress Test
															<span class="label label-success">80%</span>
														</p>
														<div class="progress progress-xs">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
																<span class="sr-only">80% Complete</span>
															</div>
														</div>
													</li>
													<li>
														<p>Data Duplication Check
															<span class="label label-success">100%</span>
														</p>
														<div class="progress progress-xs">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
																<span class="sr-only">Success</span>
															</div>
														</div>
													</li>
													<li>
														<p>Server Check
															<span class="label label-warning">45%</span>
														</p>
														<div class="progress progress-xs">
															<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
																<span class="sr-only">45% Complete</span>
															</div>
														</div>
													</li>
													<li>
														<p>Mobile App Development
															<span class="label label-danger">10%</span>
														</p>
														<div class="progress progress-xs">
															<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
																<span class="sr-only">10% Complete</span>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- END WIDGET TASKS -->
									</div>
									<div class="col-md-8">
										<!-- WIDGET REAL-TIME CHART -->
										<div class="widget real-time-chart">
											<div class="widget-header">
												<h3><i class="fa fa-cogs"></i> CPU Load</h3>
												<em>- Realtime chart</em>
												<div class="btn-group widget-header-toolbar">
													<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
													<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
													<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
												</div>
											</div>
											<div class="widget-content">
												<div class="demo-flot-chart" id="demo-real-time-chart"></div>
											</div>
										</div>
										<!-- END WIDGET REAL-TIME CHART -->
									</div>
								</div>

								<!-- WIDGET TICKET TABLE -->
								<div class="widget widget-table">
									<div class="widget-header">
										<h3><i class="fa fa-group"></i> Support Tickets</h3>
										<em>- List of Support Tickets</em>
										<div class="btn-group widget-header-toolbar">
											<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
											<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
											<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
										</div>
										<div class="btn-group widget-header-toolbar">
											<div class="label label-danger"><i class="fa fa-warning"></i> 2 Critical Messages</div>
										</div>
									</div>
									<div class="widget-content">
										<table id="ticket-table" class="table table-sorting">
											<thead>
												<tr>
													<th>Number</th>
													<th>Date</th>
													<th>Category</th>
													<th>Name</th>
													<th>Title</th>
													<th>Priority</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="#">[#18765]</a>
													</td>
													<td>Nov 21, 2013 15:45</td>
													<td>Front-End Site</td>
													<td>Smith</td>
													<td>
														<a href="#">Product Review Problem</a>
													</td>
													<td>
														<span class="label label-high">#4 - High</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18766]</a>
													</td>
													<td>Nov 21, 2013 16:12</td>
													<td>Technical Support</td>
													<td>Sean</td>
													<td>
														<a href="#">Can't Download the Guide Doc</a>
													</td>
													<td>
														<span class="label label-medium">#5 - Medium</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18767]</a>
													</td>
													<td>Nov 21, 2013 16:43</td>
													<td>General Info</td>
													<td>Jane Doe</td>
													<td>
														<a href="#">Regarding Customer Support</a>
													</td>
													<td>
														<span class="label label-medium">#5 - Medium</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18768]</a>
													</td>
													<td>Nov 22, 2013 08:24</td>
													<td>General Info</td>
													<td>Smith</td>
													<td>
														<a href="#">Can't Change My Address</a>
													</td>
													<td>
														<span class="label label-urgent">#3 - Urgent</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18769]</a>
													</td>
													<td>Nov 22, 2013 08:30</td>
													<td>Sales</td>
													<td>Smith</td>
													<td>
														<a href="#">Review Tab Malfunction</a>
													</td>
													<td>
														<span class="label label-low">#6 - Low</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18770]</a>
													</td>
													<td>Nov 22, 2013 08:47</td>
													<td>Front-End Site</td>
													<td>John Doe</td>
													<td>
														<a href="#">Broken Link</a>
													</td>
													<td>
														<span class="label label-emergency">#2 - Emergency</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18771]</a>
													</td>
													<td>Nov 23, 2013 14:08</td>
													<td>Sales</td>
													<td>Jack</td>
													<td>
														<a href="#">Need Info About My Order Status</a>
													</td>
													<td>
														<span class="label label-critical">#1 - Critical</span>
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">[#18772]</a>
													</td>
													<td>Nov 23, 2013 17:45</td>
													<td>Techincal Support</td>
													<td>Darren</td>
													<td>
														<a href="#">Bouncing Email</a>
													</td>
													<td>
														<span class="label label-critical">#1 - Critical</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- END WIDGET TICKET TABLE -->

							</div>
							<!-- /main-content -->
						</div>
						<!-- /main -->
					</div>
					<!-- /content-wrapper -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="push-sticky-footer"></div>
	</div>
	<!-- /wrapper -->

	<!-- FOOTER -->
	<footer class="footer">
		&copy; 2015 <a href="http://twitter.com/jabberwokkie">Kevin</a> &amp; <a href="http://twitter.com/mattbtay">Matt</a>
	</footer>
	<!-- END FOOTER -->


	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.js"></script>
	<script src="assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="assets/js/king-common.min.js"></script>

	<script src="assets/js/plugins/stat/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/raphael/raphael-2.1.0.min.js"></script>
	<script src="assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
	<script src="assets/js/plugins/stat/flot/jquery.flot.resize.min.js"></script>
	<script src="assets/js/plugins/stat/flot/jquery.flot.time.min.js"></script>
	<script src="assets/js/plugins/stat/flot/jquery.flot.pie.min.js"></script>
	<script src="assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"></script>
	<script src="assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
	<script src="assets/js/plugins/jquery-mapael/jquery.mapael.js"></script>
	<script src="assets/js/plugins/raphael/maps/usa_states.js"></script>
	<script src="assets/js/king-chart-stat.min.js"></script>
	<script src="assets/js/king-table.min.js"></script>
	<script src="assets/js/king-components.min.js"></script>
</body>
</html>