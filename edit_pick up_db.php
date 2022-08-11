<?php include("condb.php");//เชื่อมต่อฐานข้อมูล

    $id=$_GET['id'];
    $unit=$_GET['unit'];
    $unit2=$_GET['unit2'];
    $piece=$_GET["piece"];
    $min=$_GET["min"];
    // print_r($min);
    // echo' </br>';

	// exit;
    // ประกาศตัวแปรรับค่าจากฟอร์มในรูปแบบ

    // print_r($id);
    // print_r($_POST);

	
    $max=$_POST['unit_minus'];
//     $query_stock=($unit-$max);
//     print ($max);
//    echo' </br>';
//     print floor($query_stock4);
    

    $max2=$_POST['unit2_minus'];
    // $query_stock5=($unit2-$query_stock4);
    $query_stock1=(($unit*$piece)+($min))-($max2);
    $query_stock2=floor($query_stock1/$piece)-($max);
    $query_stock3=floor($query_stock1/$piece)*($piece);
    $query_stock4=($query_stock1-$query_stock3);
    $query_stock5=floor($query_stock1/$piece)-($max);
    // print_r($query_stock2);
    // echo' </br>';
    // print_r($query_stock2);
    // echo' </br>';
    // print_r($query_stock3);
    // echo' </br>';
    // print_r($query_stock4);
    // echo' </br>';
   
        $sql = "UPDATE stock SET  
           unit='$query_stock2' , unit2='$query_stock4' 
           WHERE id=$id";  
    $result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));
	
	
	mysqli_close($con);//ปิดการเชื่อมต่อ database เพื่อคืนค่าให้กับ server
//  exit;

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