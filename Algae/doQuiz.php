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
        Learn Algorithm
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home" style="color: green"></i> Home</a></li>
        <li><a href="#">List Algorithm</a></li>
        <li class="active">Depth First Search Algorithm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header bg-blue">
              <h3 class="box-title">Dept First Search Algorithm</h3>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              <div class="box box-widget">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="images/search.jpg" alt="User Image" style="width: 60px;height: 60px;margin-right: 10px">
                    <span class="username">
                      Depth First Search Algorithm Quiz #1
                    </span>
                    <span class="description">
                      <span class="label label-success">Searching Algorithm</span>
                      <span class="label label-primary">Basic Algorithm</span>
                    </span>
                    <span class="description">Author : Admin</span>
                    <span class="description">Submitted by Admin, on 24 Aug 2017</span>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <form>
                    <div class="col-md-6">
                      <h4>No. 1 dari 5</h4>
                    </div>
                    <div class="col-md-6">
                      <span class="pull-right">
                        <div class="box box-header bg-blue" style="text-align: center;">
                            Sisa Waktu :<br>
                            <span style="font-size: 18px;">10:00</span>
                        </div>
                      </span>
                    </div>
                    <div class="col-md-12">
                        <p style="text-align: justify;">
                          1. Berdasarkan Gambar dibawah ini Jawab :<br>
                          Jika a + b = 3 dan b + 1 = 2, maka a = ?
                        </p>
                        <img class="img-responsive pad imgQz" src="images/materi/dfs/1.png" alt="Photo" style="width: 500px;">
                    </div>
                    <div class="col-md-12">
                      <div class="radio">
                        <label><input type="radio" name="optradio">Option 1</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="optradio">Option 2</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="optradio">Option 3</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="optradio">Option 4</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <span class="pull-left">
                        <button class="btn btn-danger" id="prev" style="display: none;">Previous</button>
                        <button class="btn btn-warning" id="next">Next</button>
                      </span>
                      <span class="pull-right">
                        <button class="btn btn-success btn-lg" style="display: none;">Finish</button>
                      </span>
                    </div>
                    </form>
<!--                     <div class="col-md-12">
                      <span class="row">
                        <div class="col-md-6">
                          <span class="btn btn-primary btn-block" style="text-align: left">
                            A. 1
                          </span>
                        </div>
                        <div class="col-md-6">
                          <span class="btn btn-primary btn-block" style="text-align: left">
                            B. 2
                          </span>
                        </div>
                        <hr/>
                        <div class="col-md-6">
                          <span class="btn btn-primary btn-block" style="text-align: left">
                          C. 3
                          </span>
                        </div>
                        <div class="col-md-6">
                          <span class="btn btn-primary btn-block" style="text-align: left">
                          D. 4
                          </span>
                        </div>
                      </span>
                    </div> -->
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                </div>

              </div>
           </div>
            <!-- /.footer -->
          </div>
    </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
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

  <?php include 'asidePerm.php' ?> <!-- Smoothing -->

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
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
var i = 1;
var stop = false;

  $(document).on('click', "#next",function(event){
      event.preventDefault();
      if(stop != true){
        i++;
/*        $(".imgQz").prop("src","images/materi/dfs/"+i+".png");*/
        $("#prev").show();
        if(i == 5){
          stop = true;
          $("#next").hide();
        }
      }
    })

  $(document).on('click', "#prev",function(event){
      event.preventDefault();
      if(i != 2){
        i--;
/*        $(".imgMt").prop("src","images/materi/dfs/"+i+".png");*/
        stop = false;
        $("#next").show();
      }
      else{
        i--;
/*        $(".imgMt").prop("src","images/materi/dfs/"+i+".png");*/
        stop = false;
        $("#prev").hide();
      }
    })
</script>

</body>
</html>
