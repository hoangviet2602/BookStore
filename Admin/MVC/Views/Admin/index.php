<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/css/./sb-admin-2.min.css" rel="stylesheet" type="text/css">
  <script src="public/vendor/jquery/jquery.min.js"></script>

  <!-- summernote-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Data table -->
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require_once('menu.php') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php require_once('header.php') ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
        
            <div class="card-body">
              <div class="table-responsive">
                <?php
                
                  $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
                  $act = isset($_GET['act']) ? $_GET['act'] : "admin";
                  switch ($mod) {
                   
                
                   
                    case 'sanpham':
                      switch ($act) {
                        case 'list':
                          require_once('MVC/views/sanpham/list.php');
                          break;
                        case 'add':
                          require_once('MVC/views/sanpham/add.php');
                          break;
                        case 'edit':
                          require_once('MVC/views/sanpham/edit.php');
                          break;
                        default:
                          require_once('MVC/views/sanpham/list.php');
                          break;
                      }
                      break;
                      case 'nguoidung':
                        switch ($act) {
                          case 'list':
                            require_once('MVC/views/nguoidung/list.php');
                            break;
                          case 'add':
                            require_once('MVC/views/nguoidung/add.php');
                            break;
                          case 'detail':
                            require_once('MVC/views/nguoidung/detail.php');
                            break;
                          case 'edit':
                            require_once('MVC/views/nguoidung/edit.php');
                            break;
                          default:
                            require_once('MVC/views/nguoidung/list.php');
                            break;
                        }
                        break;
                        case 'hoadon':
                          switch ($act) {
                            case 'list':
                              require_once('MVC/Views/hoadon/list.php');
                              break;
                            case 'chitiet':
                              require_once('MVC/Views/hoadon/detail.php');
                              break;
                            default:
                              require_once('MVC/Views/hoadon/list.php');
                              break;
                          }
                          break;
                          
                    case 'danhmuc':
                      switch ($act) {
                        case 'list':
                          require_once('MVC/views/danhmuc/list.php');
                          break;
                        case 'add':
                          require_once('MVC/views/danhmuc/add.php');
                          break;
                        case 'detail':
                          require_once('MVC/views/danhmuc/detail.php');
                          break;
                        case 'edit':
                          require_once('MVC/views/danhmuc/edit.php');
                          break;
                        default:
                          require_once('MVC/views/danhmuc/list.php');
                          break;
                      }
                      break;
                 
                    
                 }
                
                  
                
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require_once('footer.php') ?>
      <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="public/js/sb-admin-2.min.js"></script>
      <script src="public/vendor/chart.js/Chart.min.js"></script>
      <script src="public/js/demo/chart-area-demo.js"></script>
      <script src="public/js/demo/chart-pie-demo.js"></script>

</body>

</html>