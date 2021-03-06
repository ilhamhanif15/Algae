<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Algae</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="dist/css/additional.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

  <?php include 'header.php' ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Forum
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home" style="color: green"></i> Home</a></li>
        <li><a href="#">Forum</a></li>
        <li class="active">All Forum's Thread</li>
      </ol>

    <button type="button" class="fa fa-plus btn btn-flat btn-success" data-toggle="modal" data-target="#tambahForum" style="padding-top: 4px;padding-bottom: 4px;padding-right: 20px;margin-right:7px;margin-top:15px;"> Buat Forum Baru</button>

    <form class="navbar-form navbar-right" role="search">
       <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Cari...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <br/>
    <form>

    </form>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
           <div class="box box-solid box-primary">
                  <div class="box-header">
                    <h3 class="box-title">All Forum Thread</h3>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="Lanjutan_Forum.php">[Algorithm Problem's] Brute Force Problem ???
                        <span class="pull-right">
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                        </span>
                        <br/><span class="text-green">by: Dias Pambudi</span>
                        <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                        <br/>
                        <span class="description" style="color: grey">kategori : 
                          <span class="label label-success">Classification Algorithm</span>
                          <span class="label label-danger">Advance Algorithm</span>
                        </span>
                        </a>
                      </li>
                      <li><a href="#">[Tips And Trick] Combination between Algorithm !
                        <span class="pull-right">
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                        </span>
                        <br/><span class="text-green">by: Dias Pambudi</span>
                        <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                        <br/>
                        <span class="description" style="color: grey">kategori : 
                          <span class="label label-danger">Advance Algorithm</span>
                        </span>
                      </a>
                      </li>
                      <li>
                        <a href="#" class="text-blue" style="text-align: center">More Result <span class="fa fa-angle-double-right"></span></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.footer -->
                </div>
            </div>
          <div class="col-md-12">
           <div class="box box-solid box-success">
                  <div class="box-header">
                    <h3 class="box-title">Tips And Trick</h3>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="Lanjutan_Forum.php">[Tips And Trick] Brute Force Tips!
                        <span class="pull-right">
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                        </span>
                        <br/><span class="text-green">by: Dias Pambudi</span>
                        <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                        <br/>
                        <span class="description" style="color: grey">kategori : 
                          <span class="label label-success">Classification Algorithm</span>
                          <span class="label label-danger">Advance Algorithm</span>
                        </span>
                        </a>
                      </li>
                      <li><a href="#">[Tips And Trick] Combination between Algorithm !
                        <span class="pull-right">
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star checked"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                        </span>
                        <br/><span class="text-green">by: Dias Pambudi</span>
                        <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                        <br/>
                        <span class="description" style="color: grey">kategori : 
                          <span class="label label-danger">Advance Algorithm</span>
                        </span>
                      </a>
                      </li>
                      <li>
                        <a href="#" class="text-blue" style="text-align: center">More Result <span class="fa fa-angle-double-right"></span></a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.footer -->
                </div>
            </div>
            <div class="col-md-12">
             <div class="box box-solid box-success">
                    <div class="box-header">
                      <h3 class="box-title">Question and Answer</h3>
                    </div>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-pills nav-stacked">
                        <li><a href="Lanjutan_Forum.php">[Question and Answer] Why Brute Force ?
                          <span class="pull-right">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </span>
                          <br/><span class="text-green">by: Dias Pambudi</span>
                          <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                          <br/>
                          <span class="description" style="color: grey">kategori : 
                            <span class="label label-success">Classification Algorithm</span>
                            <span class="label label-danger">Advance Algorithm</span>
                          </span>
                          </a>
                        </li>
                        <li><a href="#">[Question and Answer] Why always kieu ?
                          <span class="pull-right">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </span>
                          <br/><span class="text-green">by: Dias Pambudi</span>
                          <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                          <br/>
                          <span class="description" style="color: grey">kategori : 
                            <span class="label label-danger">Advance Algorithm</span>
                          </span>
                        </a>
                        </li>
                        <li>
                          <a href="#" class="text-blue" style="text-align: center">More Result <span class="fa fa-angle-double-right"></span></a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.footer -->
                  </div>
            </div>
            <div class="col-md-12">
             <div class="box box-solid box-default">
                    <div class="box-header">
                      <h3 class="box-title">Custom Forum</h3>
                    </div>
                    <div class="box-footer no-padding">
                      <ul class="nav nav-pills nav-stacked">
                        <li><a href="Lanjutan_Forum.php">[Custom] Why Brute Force ?
                          <span class="pull-right">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </span>
                          <br/><span class="text-green">by: Dias Pambudi</span>
                          <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                          <br/>
                          <span class="description" style="color: grey">kategori : 
                            <span class="label label-success">Classification Algorithm</span>
                            <span class="label label-danger">Advance Algorithm</span>
                          </span>
                          </a>
                        </li>
                        <li><a href="#">[Custom] Why always kieu ?
                          <span class="pull-right">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </span>
                          <br/><span class="text-green">by: Dias Pambudi</span>
                          <span class="pull-right" style="color: #8a8a8a ">15 Oct 2017</span>
                          <br/>
                          <span class="description" style="color: grey">kategori : 
                            <span class="label label-danger">Advance Algorithm</span>
                          </span>
                        </a>
                        </li>
                        <li>
                          <a href="#" class="text-blue" style="text-align: center">More Result <span class="fa fa-angle-double-right"></span></a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.footer -->
                  </div>
            </div>
        </div>
    </div>
  </section>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
    <br/>
    <strong>Modified by <i style="color: green">Algae Team</i>. (2017)</strong> 
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
