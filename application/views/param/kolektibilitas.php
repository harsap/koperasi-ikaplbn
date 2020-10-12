<?php
/*
 * Aplikasi AKSIOMA (Aplikasi Keuangan Mikro Masyarakat Ekonomi Syariah) ver. 1.0
 * Copyright (c) 2014
 *
 * file   : param/kolektibilitas.php
 * author : Edi Suwoto S.Komp
 * email  : edi.suwoto@gmail.com
 */
/*----------------------------------------------------------*/
?>
 <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>BMT</title>
    <link rel="icon" href="<?php echo base_url(); ?>/assets/images/favicon.jpg" type="image/jpg" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<link href="<?php echo base_url(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/css/themes/default.css" rel="stylesheet" id="style_color" />
	<link href="<?php echo base_url(); ?>/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>/assets/plugins/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url(); ?>/assets/plugins/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>	
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->	
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>		
	<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>/assets/plugins/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/respond.js"></script>	
	<![endif]-->	
	<script src="<?php echo base_url(); ?>/assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>	
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery.blockui.js" type="text/javascript"></script>	
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>	
	<script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery.peity.min.js" type="text/javascript"></script>	
	<script src="<?php echo base_url(); ?>/assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>	
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jq/jquery.jclock.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   
    <script src="<?php echo base_url(); ?>/assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/assets/scripts/form-components.js"></script> 
	<script>
		jQuery(document).ready(function() {		
			App.init(); // initlayout and core plugins
			FormComponents.init();
		});
	</script>
    <?php $this -> load -> view( 'header' );?>
    <link rel="stylesheet" href="assets/css/autocomplete.css" type="text/css" media="screen" />
    <script type="text/javascript" src="assets/js/param/kolektibilitas.js"></script>
    <script type="text/javascript" src="assets/js/jq/jquery.autocomplete.js"></script>
    
</head>
<body class="fixed-top">
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="."><img src="assets/img/logoc.png" alt="MES"/></a>
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          			
				<div class="top-nav">
					<span class="jclock"></span>				
					<ul class="nav pull-right" id="top_menu">
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="profile" class="logut"><i class="icon-user"></i> Profile</a></li>
								<li><a href="auth/logout" class="logut"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="container" class="row-fluid">
		<div id="sidebar" class="nav-collapse collapse">
			<div class="sidebar-toggler hidden-phone"></div>     	
			<?php foreach($menunya as $item) {echo $item;}?>
		</div>
		<div id="body">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">		
						<h3 class="page-title">
							Parameter
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="..">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Parameter</a></li>
						</ul>
					</div>
				</div>
				<div id="page" class="dashboard">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="tabbable tabbable-custom boxless">
                                <ul class="nav nav-tabs">
                                   <li class="active"><a href="#tabs-1" data-toggle="tab">Kolektibilitas Parameter Harian</a></li>
                                   <li><a href="#tabs-2" data-toggle="tab">Kolektibilitas Parameter Mingguan</a></li>
                                   <li><a href="#tabs-3" data-toggle="tab">Kolektibilitas Parameter Bulanan</a></li>
                                   
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i>Kolekbilitas Parameter Harian</h4>
                                            </div>
                                            <br>
                                            <div class="row-fluid">
                                                <div id="table_harian">
                                                    <?php
                                                    $harian['option'][] = array("type_kolekbilitas","Type"); // value,title
                                                    //$harian['tombol'] = '<button id="addharian" class="btn btn-success">Tambah <i class="icon-plus"></i></button>';
                                                    $harian['tabel_head'][] = array("","3%","No"); // id,width,title
                                                    $harian['tabel_head'][] = array("","25%","Type Kolekbilitas");
                                                    $harian['tabel_head'][] = array("","25%","Parameter");
                                                    $harian['tabel_head'][] = array("","10%","Kode");
                                                    $harian['tabel_head'][] = array("","10%","Manage");
                                                    $harian['tabel_head'][] = array("kharian_id","5%","ID");
                                                    $this -> load -> view( 'filter_layout',$harian );
                                                    $this -> load -> view( 'table_layout',$harian );
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i>Kolekbilitas Parameter Mingguan</h4>
                                            </div>
                                            <br>
                                            <div class="row-fluid">
                                                <div id="table_mingguan">
                                                <?php
                                                    $mingguan['option'][] = array("type_kolekbilitas","Type"); // value,title
                                                    $mingguan['tabel_head'][] = array("","3%","No"); // id,width,title
                                                    $mingguan['tabel_head'][] = array("","25%","Type Kolekbilitas");
                                                    $mingguan['tabel_head'][] = array("","25%","Parameter");
                                                    $mingguan['tabel_head'][] = array("","10%","Kode");
                                                    $mingguan['tabel_head'][] = array("","10%","Manage");
                                                    $mingguan['tabel_head'][] = array("kmingguan_id","5%","ID");
                                                    $this -> load -> view( 'filter_layout',$mingguan );
                                                    $this -> load -> view( 'table_layout',$mingguan );
                                                  ?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i>Kolekbilitas Parameter Bulanan</h4>
                                            </div>
                                            <br>
                                            <div class="row-fluid">
                                                <div id="table_bulanan">
                                                <?php
                                                    $bulanan['option'][] = array("type_kolekbilitas","Type"); // value,title
                                                    $bulanan['tabel_head'][] = array("","3%","No"); // id,width,title
                                                    $bulanan['tabel_head'][] = array("","25%","Type Kolekbilitas");
                                                    $bulanan['tabel_head'][] = array("","25%","Parameter");
                                                    $bulanan['tabel_head'][] = array("","10%","Kode");
                                                    $bulanan['tabel_head'][] = array("","10%","Manage");
                                                    $bulanan['tabel_head'][] = array("kharian_id","5%","ID");
                                                    $this -> load -> view( 'filter_layout',$bulanan );
                                                    $this -> load -> view( 'table_layout',$bulanan );
                                                  ?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div id="footer">
		<br>Aplikasi Koperasi Syariah V.0.0.1  <img src="assets/img/logoc.png" alt="pegadaian" class="center" />
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
<!-- Dialog Area -->
<div id="dialog-kharian">
      <form id="form_kharian" method="post">
        <fieldset>
		    <div class="fm-req">
		      <label for="type_kolekbilitas">Type Kolekbilitas :</label>
		      <input class="inp" name="type_kolekbilitas" type="text" maxlength="20"/>
		    </div>
		    <div class="fm-req">
		      <label for="jangka_waktu">Parameter :</label>
		      <input class="inp" name="parameter" type="text" maxlength="50" />
		    </div>
		    <div class="fm-req">
		      <label for="jangka_waktu">Kode :</label>
		      <input class="inp" name="kode" type="text" maxlength="50" />
		    </div>
		    </fieldset>
		    <p class="infonya"></p>
    </form>
</div>
<div id="dialog-kbulanan">
      <form id="form_kbulanan" method="post">
        <fieldset>
		    <div class="fm-req">
		      <label for="type_kolekbilitas">Type Kolekbilitas :</label>
		      <input class="inp" name="type_kolekbilitas" type="text" maxlength="20"/>
		    </div>
		    <div class="fm-req">
		      <label for="jangka_waktu">Parameter :</label>
		      <input class="inp" name="parameter" type="text" maxlength="50" />
		    </div>
		    <div class="fm-req">
		      <label for="jangka_waktu">Kode :</label>
		      <input class="inp" name="kode" type="text" maxlength="50" />
		    </div>
		    </fieldset>
		    <p class="infonya"></p>
    </form>
</div>
<div id="dialog-kmingguan">
      <form id="form_kmingguan" method="post">
        <fieldset>
		    <div class="fm-req">
		      <label for="type_kolekbilitas">Type Kolekbilitas :</label>
		      <input class="inp" name="type_kolekbilitas" type="text" maxlength="20"/>
		    </div>
		    <div class="fm-req">
		      <label for="jangka_waktu">Parameter :</label>
		      <input class="inp" name="parameter" type="text" maxlength="50" />
		    </div>
		    <div class="fm-req">
		      <label for="jangka_waktu">Kode :</label>
		      <input class="inp" name="kode" type="text" maxlength="50" />
		    </div>
		    </fieldset>
		    <p class="infonya"></p>
    </form>
</div>
</body>
</html>
