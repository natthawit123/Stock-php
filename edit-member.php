<?php include("condb.php");
$id = $_GET[ 'id' ];
$query= "SELECT * FROM stock WHERE id=$id";
$check = mysqli_query($con,$query) or die("Error in sql : $sql". mysqli_error($query));
$showmemberedit = mysqli_fetch_array($check);
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
                            <!-- form start -->
                            <div class="box-body">
                                <div class="margin">
                                    <!-- start -->
                                    <form  action="edit_form_db.php" method="POST">
                                    <div class="box-body">
                                        <div class="form-group col-md-12">
                                            <label>ชื่อสินค้า</label>
                                            <input type="type" name="name" class="form-control"  value="<?php echo $showmemberedit['name'];?>">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>จำนวน</label>
                                            <input type="number" name="unit" class="form-control"  value="<?php echo $showmemberedit['unit'];?>">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label>ประเภท</label>
                                            <select name="type3" class="form-control " value="<?php echo $showmemberedit['type3'];?>">>
                                                <option value="<?php echo $showmemberedit['type3'];?>">
                                                    <?php echo $showmemberedit['type3'];?>
                                                    </option>       
                                                <option> </option>
                                                <option value="ขวด">ขวด</option>
                                                <option value="กล่อง">กล่อง</option>
                                                <option value="ซอง">ซอง</option>
                                                <option value="เเพ็ค">เเพ็ค</option>
                                                <option value="ชิ้น">ชิ้น</option>
                                                <option value="ใบ">ใบ</option>
                                                <option value="ม้วน">ม้วน</option>
                                                <option value="มัด">มัด</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">จำนวน</label>
                                            <input type="number" name="unit2" class="form-control" id="exampleInputEmail1" value="<?php echo $showmemberedit['unit2'];?>">
                                        </div>
                                        <div class="form-group col-md-3 ">
                                            <label for="exampleInputEmail1">ประเภท</label>
                                            <select  name="type2" class="form-control" value="<?php echo $showmemberedit['type2'];?>">
                                                <option value="<?php echo $showmemberedit['type2'];?>">
                                                <?php echo $showmemberedit['type2'];?>
                                                </option>     
                                                <option> </option>
                                                <option value="ขวด">ขวด</option>
                                                <option value="กล่อง">กล่อง</option>
                                                <option value="ซอง">ซอง</option>
                                                <option value="เเพ็ค">เเพ็ค</option>
                                                <option value="ชิ้น">ชิ้น</option>
                                                <option value="ใบ">ใบ</option>
                                                <option value="ม้วน">ม้วน</option>
                                                <option value="มัด">มัด</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">ชื้น</label>
                                            <input type="type" name="piece" class="form-control" id="exampleInputPassword1" value="<?php echo $showmemberedit['piece'];?>">
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label for="exampleInputPassword1">น้ำหนัก</label>
                                            <select name="weight" class="form-control" value="<?php echo $showmemberedit['weight'];?>">
                                            <option value="<?php echo $showmemberedit['weight'];?>">
                                            <?php echo $showmemberedit['weight'];?>
                                            </option>    
                                            <option> </option>
                                                <option value="กรัม">กรัม</option>
                                                <option value="กิโลกรัม">กิโลกรัม</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">แพ็ค</label>
                                            <input type="type" name="pack" class="form-control" id="exampleInputPassword1" value="<?php echo $showmemberedit['pack'];?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">ขนาด</label>
                                            <input type="type" name="size" class="form-control" id="exampleInputPassword1" value="<?php echo $showmemberedit['size'];?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">ปริมาณ</label>
                                            <select name="size2" class="form-control" value="<?php echo $showmemberedit['size2'];?>">
                                            <option value="<?php echo $showmemberedit['size2'];?>">
                                            <?php echo $showmemberedit['size2'];?>
                                            </option>
                                            <option value="ml.">ml.</option>
                                            <option value="mm.">mm.</option>
                                            <option value="cm.">cm.</option>
                                            <option value="oz.">oz.</option>
                                            <option value="นิ้ว">นิ้ว</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">ลำดับจัดเก็บ</label>
                                            <input type="type" name="box" class="form-control" id="exampleInputPassword1" value="<?php echo $showmemberedit['box'];?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>รูปแบบจัดเก็บ</label>
                                            <select name="format" class="form-control" value="<?php echo $showmemberedit['format'];?>">
                                            <option value="<?php echo $showmemberedit['format'];?>">
                                            <?php echo $showmemberedit['format'];?>
                                            </option>
                                                <option value="กล่อง">กล่อง</option>
                                                <option value="กระสอบ">กระสอบ</option>
                                                <option value="ถุงใส">ถุงใส</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>หมายเหตุ</label>
                                            <input type="type" name="detail" class="form-control"  value="<?php echo $showmemberedit['detail'];?>">
                                        </div>
                                        <div class="form-group col-md-12 box-footer">
                                        <label >ภาพสินค้า</label><br>
                                        <img src="img/<?php echo $showmemberedit['photo'];?>" alt="User Image" class="img-circle" style="width:100px;height:100px;"><br>

                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-primary margin pull-right">+บันทึกสินค้า</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
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