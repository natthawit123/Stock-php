<?php include("condb.php");//เชื่อมต่อฐานข้อมูล
	//echo '<pre>';
		//print_r($_POST);
		//echo '</pre>';
	
	
	//exit;
    // ประกาศตัวแปรรับค่าจากฟอร์มในรูปแบบ POST
// print_r($_POST);

    $id = $_POST['id'];
    $idproducts = $_POST["idproducts"];
    $name = $_POST["name"];
    $unit = $_POST["unit"];
    $type3 = $_POST["type3"];
    $unit2 = $_POST["unit2"];
    $type2 = $_POST["type2"];
    $piece = $_POST["piece"];
    $weight = $_POST["weight"];
    $pack = $_POST["pack"];
    $size = $_POST["size"];
    $size2 = $_POST["size2"];
    $box = $_POST["box"];  
    $format = $_POST["format"];
    $detail = $_POST["detail"];
    $photo = $_POST["photo"];

    
    $numrand = (mt_rand());
    $photo = (isset($_POST['photo']) ? $_POST['photo'] : '');
    $upload=$_FILES['photo']['name'];
    if($upload !='') {
        $path="../img/";
		$type = strrchr($_FILES['photo']['name'],".");
		$newname =$numrand.$type;
		$path_copy=$path.$newname;
		$path_link="../img/".$newname;
		move_uploaded_file($_FILES['photo']['tmp_name'],$path_copy);  
	}

    $sql = "UPDATE stock SET
	name='$name', unit='$unit', 
    type3='$type3', unit2='$unit2', type2='$type2', piece='$piece', weight='$weight', pack='$pack'
    , size='$size', size2='$size2', box='$box', format='$format', detail='$detail'
    WHERE id=$id";
	
	
	$result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));
	
	//echo $check;
	
	mysqli_close($con);//ปิดการเชื่อมต่อ database เพื่อคืนค่าให้กับ server

if($result){
echo "<script type='text/javascript'>";
echo "alert('แก้ไขข้อมูลสำเร็จ');";
echo "window.location = 'show-member.php'; ";
echo "</script>";
}else{
echo "<script type='text/javascript'>";
echo "window.location = 'show-member.php'; ";
echo "</script>";
}
?>