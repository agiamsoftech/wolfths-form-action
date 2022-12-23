<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include_once dirname(__FILE__).'/DB/DBMain.php';
$dbFunc = new DBMain();
date_default_timezone_set("Asia/Kolkata");
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lab Test</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<style>
    select[data-fouc]:not([aria-hidden=false]) {
        height: calc(1.5715em + .875rem + 2px);
        opacity: 1 !important;
    }
    .text-right {
        text-align: right;
    }
    .m-r-10 {
        margin-right: 10px;
    }
</style>
	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-light navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-transmission"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="https://iamsoftech.in/uploads/iamsoftechlogo.PNG" class="d-none d-sm-block" alt="Iamsoftech" style="height: 2.125rem;">
				<img src="https://iamsoftech.in/uploads/iamsoftechlogo.PNG" class="d-sm-none" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-lg-none ml-3">Git updates</span>
						<span class="badge badge-warning badge-pill ml-auto ml-lg-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-lg-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-body"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-outline-primary rounded-pill border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-outline-warning rounded-pill border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-outline-info rounded-pill border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-outline-success rounded-pill border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn btn-outline-primary rounded-pill border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer">
							<a href="#" class="text-body mr-auto">All updates</a>
							<div>
								<a href="#" class="text-body" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-body ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge badge-success my-3 my-lg-0 ml-lg-3">Online</span>

			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-lg-none ml-3">Messages</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-body"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success-100"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger-100"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success-100"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-100"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-secondary"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer">
							<a href="#" class="text-body mr-auto">All users</a>
							<a href="#" class="text-body"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
			<li class="nav-item nav-item-dropdown-lg dropdown">
				<a href="#" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="dropdown">
					<i class="icon-bubbles4"></i>
					<span class="badge badge-warning badge-pill ml-auto ml-lg-0">2</span>
				</a>
				
				<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-350">
					<div class="dropdown-content-header">
						<span class="font-weight-semibold">Messages</span>
						<a href="#" class="text-body"><i class="icon-compose"></i></a>
					</div>

					<div class="dropdown-content-body dropdown-scrollable">
						<ul class="media-list">
							<li class="media">
								<div class="mr-3 position-relative">
									<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
								</div>

								<div class="media-body">
									<div class="media-title">
										<a href="#">
											<span class="font-weight-semibold">James Alexander</span>
											<span class="text-muted float-right font-size-sm">04:58</span>
										</a>
									</div>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="mr-3 position-relative">
									<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
								</div>

								<div class="media-body">
									<div class="media-title">
										<a href="#">
											<span class="font-weight-semibold">Margo Baker</span>
											<span class="text-muted float-right font-size-sm">12:16</span>
										</a>
									</div>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
								</div>
								<div class="media-body">
									<div class="media-title">
										<a href="#">
											<span class="font-weight-semibold">Jeremy Victorino</span>
											<span class="text-muted float-right font-size-sm">22:48</span>
										</a>
									</div>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
								</div>
								<div class="media-body">
									<div class="media-title">
										<a href="#">
											<span class="font-weight-semibold">Beatrix Diaz</span>
											<span class="text-muted float-right font-size-sm">Tue</span>
										</a>
									</div>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
								</div>
								<div class="media-body">
									<div class="media-title">
										<a href="#">
											<span class="font-weight-semibold">Richard Vango</span>
											<span class="text-muted float-right font-size-sm">Mon</span>
										</a>
									</div>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>
					</div>

					<div class="dropdown-content-footer border-top-0 p-0">
						<a href="#" class="btn btn-light btn-block rounded-top-0">View more</a>
					</div>
				</div>
			</li>

			<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
				<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
					<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-pill" height="34" alt="">
					<span class="d-none d-lg-inline-block ml-2">Victoria</span>
				</a>

				<div class="dropdown-menu dropdown-menu-right">
					<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
					<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
					<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-primary badge-pill ml-auto">58</span></a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
					<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
				</div>
			</li>
		</ul>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php include_once "leftmenu.php";?>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content header-elements-lg-inline">
						<div class="page-title d-flex">
							<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Lab</span> - Test</h4>
							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>

						<div class="header-elements d-none mb-3 mb-lg-0">
							<div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_vertical">Add New <i class="icon-play3 ml-2"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content pt-0">

					<!-- Scrollable datatable -->
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Lab Test</h5>
						</div>

						<table class="table datatable-scroll-y" width="100%">
							<thead>
								<tr>
                                    <th>Test Code</th>
									<th>Lab Test</th>
									<th>Cities</th>
									<th>Test Preparation</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($dbFunc->partner->fetch("lab_tests", array("status"=> 1)) as $data) {?>							
								<tr>
									<td><?php echo $data['test_code'];?></td>
									<td><?php echo $data['lab_test'];?></td>
									<td><?php echo $data['cities'];?></td>
									<td><?php echo $data['test_preparation'];?></td>
									<td><span class="badge badge-info">Pending</span></td>
									<td class="text-center">
                                        <i class="fa fa-trash m-r-10" style="font-size:23px;color:red"></i>
                                        <i class="fa fa-pencil" style="font-size:23px;color:#00acc1;"></i>
									</td>
								</tr>
                                <?php }?>

							</tbody>
						</table>
					</div>
					<!-- /scrollable datatable -->

                    <!-- Vertical form modal -->
					<div id="modal_form_vertical" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add New Test</h5>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<form action="#">
									<div class="modal-body">

                                        <div class="alert alert-info alert-dismissible alert-styled-left border-top-0 border-bottom-0 border-right-0" style="display:none;" id="msg">
                                            <span class="font-weight-semibold">Here we go!</span> Saved Successfully...
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                        </div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Test Code</label>
													<input type="text" placeholder="Test Code" class="form-control" id="t_code" name="t_code">
												</div>												
											</div>
										</div>
                                        <div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Test Name</label>
													<input type="text" placeholder="Test Name" class="form-control" id="t_name" name="t_name">
												</div>												
											</div>
										</div>
                                        <div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Test Preparation</label>
													<input type="text" placeholder="Test Preparation" class="form-control" id="t_pre" name="t_pre">
												</div>												
											</div>
										</div>	
                                        									

										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Select City</label>
                                                    <select data-placeholder="Select City" class="form-control select-clear" id="city" name="city" data-fouc>
                                                        <option>Select City</option>
                                                        <?php foreach($dbFunc->partner->fetch("cities", array(1 => 1)) as $data) {?>
                                                        <option value="<?php echo $data['city'];?>"><?php echo $data['city'];?></option>
                                                        <?php }?>
                                                    </select>
												</div>												
											</div>
										</div>

                                        <div class="form-group" id="mini_body" style="display:none;">
											<div class="row">
												<div class="col-sm-4">
													<label>City</label>
													<p id="show_city"></p>
												</div>

												<div class="col-sm-4">
													<label>Amount</label>
													<input type="text" placeholder="1031" class="form-control" id="t_amount" name="t_amount">
												</div>

												<div class="col-sm-4 text-right">
													<label>Action</label><br>
													<button type="button" class="btn bg-transparent text-pink-100 border-pink ml-1"><i class="icon-trash mr-2"></i> Delete</button>
												</div>
											</div>
										</div>
										
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary" onclick="kidSubmitForm()" id="publish_btn" disabled>Publish</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<?php include "footer.php"; ?>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
<script>

function kidSubmitForm()
{
    var filter = /^\d*(?:\.\d{1,2})?$/;
    var t_code = $('#t_code').val();
    var t_name = $('#t_name').val();
    var t_pre = $('#t_pre').val();
    var city = $('#city').val();
    var t_amount = $('#t_amount').val();

    if(t_code==''){
        alert("Please Enter Test Code.");
        return false;
    }
    if (filter.test(t_code) == false) {
        alert('Not a valid number');
        return false;
    }
    
    if(t_name=="" ){
        alert("Please enter Test Name.");
        return false;
    }
    
    if(t_pre=="" ){
        alert("Please enter Test Preparation");
        return false;
    }

    if(t_amount=="" ){
        alert("Please enter Amount");
        return false;
    }
    if (filter.test(t_amount) == false) {
        alert('Not a valid Amount');
        return false;
    }
    
      
    
    $.ajax({
        url: "submittestform.php",
        type: "GET",
        data: {t_code : t_code, t_name : t_name, t_pre : t_pre, city : city, t_amount : t_amount},        
                        
        success:function(data){

            $('#msg').fadeIn(1000);
            
            setInterval(function(){ 
                location.reload();
            },2000);           
            
        } 

    });
}

$("#city").change(function(){

    var city = $('#city').val();
    $('#show_city').text(city);
    $('#mini_body').show();
    $('#publish_btn').prop('disabled', false);

});
</script>

</body>
</html>
