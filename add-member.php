
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
                        <form  action="show-member.php">
                            <div class="box-header with-border">
                                <i class="ion ion-clipboard"></i>
                                <h3 class="box-title">Member&nbsp;
                                    <font color="#777777"><span style="font-size: 11.7px;">List</span></font>
                                </h3>
                                <button type="submit" class="btn btn-light pull-right btn-show-add-member"><i class="fa fa-plus"></i>&nbsp;&nbsp;หน้าหลัก</button>
                            </div>
                        </form>
                            <!-- /.box-header -->
                           <!-- form start -->
                           <form action="form_db.php" method="post" enctype="multipart/form-data" >
                                    <div class="box-body">
                                    <div class="form-group col-md-3">
                                                <label for="inputAddress">รหัสสินค้า</label>
                                                <input type="text" name="idproducts" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for="inputAddress">ชื่อสินค้า</label>
                                                <input type="text" name="name" class="form-control" >
                                            </div>
                                            <br>
                                            <p &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; class="margin"><code>*(ตัวอย่าง เช่น 50เเพ็ค + 15ชิ้น)*</code></p>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail4">จำนวน</label>
                                                    <input type="number" name="unit" class="form-control" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>ประเภท</label>
                                                    <select name="type3" class="form-control">
                                                        <option>  </option>
                                                    <option>ขวด</option>
                                                    <option>กล่อง</option>
                                                    <option>ซอง</option>
                                                    <option>เเพ็ค</option>
                                                    <option>ชิ้น</option>
                                                    <option>ใบ</option>
                                                    <option>ม้วน</option>
                                                    <option>มัด</option>
                                                </select>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputEmail4">จำนวน</label>
                                                        <input type="text" name="unit2" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>ประเภท</label>
                                                        <select name="type2" class="form-control">
                                                        <option>  </option>
                                                        <option>ขวด</option>
                                                        <option>กล่อง</option>
                                                        <option>ซอง</option>
                                                        <option>เเพ็ค</option>
                                                        <option>ชิ้น</option>
                                                        <option>ใบ</option>
                                                        <option>ม้วน</option>
                                                        <option>มัด</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">ชิ้น</label>
                                                        <input type="text" name="piece" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>หน่วย</label>
                                                    <select name="weight" class="form-control">
                                                    <option> </option>
                                                    <option>กรัม</option>
                                                    <option>กิโลกรัม</option>
                                                </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPassword4">แพ็ค</label>
                                                    <input type="text" name="pack" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">ขนาด</label>
                                                    <input type="text" name="size" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ปริมาณ</label>
                                                <select name="size2" class="form-control">
                                                  <option>  </option>
                                                <option>ml.</option>
                                                <option>mm.</option>
                                                <option>cm.</option>
                                                <option>oz.</option>
                                                <option>นิ้ว</option>
                                            </select>
                                            </div>
                                            <!-- select -->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>ลำดับจัดเก็บ</label>
                                                    <input type="text" name="box" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>รูปแบบจัดเก็บ</label>
                                                <select name="format" class="form-control">
                                                  <option>  </option>
                                                <option>กล่อง</option>
                                                <option>กระสอบ</option>
                                                <option>ถุงใส</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputAddress">หมายเหตุุ</label>
                                                <input type="text" name="detail" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">ภาพสินค้า</label>
                                                <input type="file" name="photo" class="form-control" >


                                            </div>
                                            <div class="checkbox">
                                    <div class="box-footer">
                                        <button type="submit" name="upload" class="btn btn-primary margin pull-right">+เพิ่มสินค้า</button>
                                    </div>
                                </form>
                                <!-- form end -->
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