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
                      <a href="#">Depth First Search Algorithm</a>
                      <span class="pull-right">
                        <i class="fa fa-bar-chart"></i> 330 view(s)
                      </span>
                    </span>
                    <span class="description">
                      <span class="label label-success">Searching Algorithm</span>
                      <span class="label label-primary">Basic Algorithm</span>
                    </span>
                    <span class="description">Submit by Admin</span>
                    <span class="description">on 24 Aug 2017</span>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-1" style="margin-top: 17%">
                      <a id="prev" style="color: #504e4e;display: none;">
                        <i class="fa fa-caret-left btnStep" style="font-size: 15em" aria-hidden="true"></i>
                      </a>
                    </div>
                    <div class="col-md-10">
                      <img class="img-responsive pad imgMt" src="images/materi/dfs/1.png" alt="Photo">
                    </div>
                    <div class="col-md-1" style="margin-top: 17%">
                      <a id="next" style="color: #504e4e">
                        <i class="fa fa-caret-right btnStep" style="font-size: 15em" aria-hidden="true"></i>
                      </a>
                    </div>
                    <div class="col-md-12">
                      <p style="font-size: 17px;text-align: justify;" id="deskripsiMateri">Depth-first search (DFS) is an algorithm for traversing or searching tree or graph data structures. One starts at the root (selecting some arbitrary node as the root in the case of a graph) and explores as far as possible along each branch before backtracking.</p>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <h4><i class="fa fa-comment-o"></i> Kolom Komentar (2 Komentar)</h4>
                <div class="box-footer box-comments">
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            <span class="nama">Maria Gonzales</span>
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <div class="pull-right">
                      <button class="btn btn-primary btn-xs reply-comment"><i class="fa fa-reply"></i> Reply</button>
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            <span class="nama">Luna Stark</span>
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <div class="pull-right">
                      <button class="btn btn-primary btn-xs reply-comment"><i class="fa fa-reply"></i> Reply</button>
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                  <div style="text-align: center;padding-bottom: 0px;" class="box-comment">
                    <ul class="pagination" style="margin-top: 0px;margin-bottom: 0px;">
                      <li class="active"><a href="#">1</a></li>
                      <li class=""><a href="#">2</a></li>
                    </ul> 
                  </div>
                </div>

                <div class="box-footer">
                  <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input class="form-control input-sm" placeholder="Press enter to post comment" id="textComment" type="text">
                    </div>
                  </form>
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
<style type="text/css">
  @keyframes bounce {
    0%, 20%, 60%, 100% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }

    40% {
      -webkit-transform: translateY(-20px);
      transform: translateY(-20px);
    }

    80% {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px);
    }
  }
  .btnStep:hover {
    color: #18ce7a;
    animation: bounce 0.8s;
  }
</style>
<script>
var i = 1;
var stop = false;
$("#prev").hide();

  $(document).on('click', "#next",function(event){
      event.preventDefault();
      if(stop != true){
        i++;
        $(".imgMt").prop("src","images/materi/dfs/"+i+".png");
        $("#prev").show();
        if(i == 13){
          stop = true;
          $("#next").hide();
        }
      }
    })

  $(document).on('click', "#prev",function(event){
      event.preventDefault();
      if(i != 2){
        i--;
        $(".imgMt").prop("src","images/materi/dfs/"+i+".png");
        stop = false;
        $("#next").show();
      }
      else{
        i--;
        $(".imgMt").prop("src","images/materi/dfs/"+i+".png");
        stop = false;
        $("#prev").hide();
      }
    })
</script>

<script type="text/javascript">
  $('.reply-comment').on('click', function (event) {
      var text = $('#textComment');
      var index = $('.reply-comment').index(this);
      var nama = $('.nama').eq(index).text();
      text.val(text.val() +' @'+nama);
      text.focus();    
  });
</script>

</body>
</html>
