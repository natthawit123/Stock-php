
<?php include('condb.php');
$query = "SELECT COUNT(*) FROM `stock`";
$qresult = mysqli_query($con, $query);
$showmember = mysqli_fetch_assoc($qresult);
$count = $showmember["COUNT(*)"];
$perpage = 5;
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
 }
 
 $start = ($page - 1) * $perpage;
 
 $sql = "SELECT * FROM stock limit {$start} , {$perpage} ";
 $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header"></header>
        <!-- Left side column. contains the logo and sidebar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Admin</h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                        <form  action="add-member.php">
                            <div class="box-header with-border">
                                <i class="ion ion-clipboard"></i>
                                <h3 class="box-title">Member&nbsp;
                                    <font color="#777777"><span style="font-size: 11.7px;">List</span></font>
                                </h3>
                                <button type="submit" class="btn btn-light pull-right btn-show-add-member" href="add-member.php"><i class="fa fa-plus"></i>&nbsp;&nbsp;เพิ่มสินค้า</button>
                            </div>
                        </form>
                            <!-- /.box-header -->
                            <?php     
					        while ($showmember = mysqli_fetch_assoc($query)) { ?>
                             <!-- form start -->
                           <div class="box-body">
                               <div class="margin">
                                     <!-- start -->
                                   <div class="box box-default collapsed-box box-solid1">
                                       <div class="box-header with-border bg-info">
                                            <img src=img/<?php echo $showmember['photo']; ?> alt="User Image" class="img-circle" style="width:70px;height:70px;">
                                            <h3 class="box-title"><span class=""><i class=""></i>&nbsp;&nbsp;รหัสสินค้า :&nbsp;<?php echo $showmember['idproducts']; ?>
                                            <h5>&nbsp;&nbsp;ชื่อสินค้า :&nbsp;&nbsp;<?php echo $showmember['name']; ?></h5></span></h3>
                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body" >
                                            <div class="box-body col-md-2" style="display: flex;justify-content: center;
                                            align-items: center; height:130px;">
                                                <img src="img/<?php echo $showmember['photo']; ?>" alt="User Image" class="img-circle" style="width:50px;height:50px;">
                                            </div>
                                            <div class="col-md-5" style="height:130px">
                                                <span class="margin"><label>รหัสสินค้า : </label>&nbsp;&nbsp;<?php echo $showmember['idproducts']; ?></span><br>
                                                <span class="margin"><label>ชื่อสินค้า :</label>&nbsp;&nbsp;&nbsp;<?php echo $showmember['name']; ?></span><br>
                                                <span class="margin"><label>จำนวน/เเพ็ค :</label>&nbsp;&nbsp;<?php echo $showmember['piece']; ?> / <?php echo $showmember['pack']; ?> <?php echo $showmember['weight']; ?></span><br>
                                            </div>
                                            <div class="col-md-5" style="height:130px">
                                                <br>
                                                <span class="margin"><label>จำนวน : </label>&nbsp;&nbsp;<?php echo $showmember['unit']; ?> / <?php echo $showmember['type3']; ?><?php echo $showmember['unit2']; ?>  <?php echo $showmember['type2']; ?></span><br>
                                                <span class="margin"><label>ขนาด :</label>&nbsp;&nbsp;<?php echo $showmember['size']; ?> <?php echo $showmember['size2']; ?></span><br>
                                                <span class="margin"><label>กล่องที่ : </label>&nbsp;&nbsp;<?php echo $showmember['box']; ?> <?php echo $showmember['format']; ?></span><br>
                                            </div>
                                            <div class="box-footer bg-info col-md-12" >
                                                <a class="btn btn-default btn-xs btn-show-edit-member" href="edit-member.php?id=<?php echo $showmember['id']; ?>"><i class="fa fa-gear"></i>&nbsp;&nbsp;แก้ไขข้อมูลสินค้า</a>
                                                <a class="btn btn-default btn-xs btn-show-edit-member" href="edit-pick up.php?id=<?php echo $showmember['id']; ?>& min=<?php echo $showmember['unit2']; ?>"><i class="fa fa-gear"></i>&nbsp;&nbsp;เบิกจ่าย</a>
                                                <a class="btn btn-default pull-right btn-xs" href="delete_form_db.php?id=<?php echo  $showmember['id'];?>"><i class="fa  fa-trash-o" onclick="return confirm('Confirm Delete')">&nbsp;&nbsp;ลบรายการสินค้า</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                            </div>
                            <?php }
                         
                        ?>
                         <div class="box-footer">
                                <span class="margin">
                  <i class="fa fa-user"></i>&nbsp;&nbsp;<font color="#777777">Total Member&nbsp; <?php echo $count; ?></font></span>
                                <font color="#777777">
                                  
                                </font>
                            </div>
                        <?php
                                $sql2 = "SELECT * FROM stock ";
                                $query2 = mysqli_query($con, $sql2);
                                $total_record = mysqli_num_rows($query2);
                                $total_page = ceil($total_record / $perpage);
                                ?>
                                
                                <nav>
                                <ul class="pagination">
                                <li>
                                <a href="show-member.php?page=1" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>
                                <?php for($i=1;$i<=$total_page;$i++){ ?>
                                <li><a href="show-member.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } ?>
                                <li>
                                <a href="show-member.php?page=<?php echo $total_page;?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                                </ul>
                                </nav>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <font color="#777777">
                    </font>
                    
                        <!-- form update end-->
                        <font color="#777777">
                        </font>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <font color="#777777"><b><b>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18 </div>
        <strong>Copyright © 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights reserved.
        </footer>
        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js" style=""></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
        </b>
        </b>
    </font>
</body>

</html>