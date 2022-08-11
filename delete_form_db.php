<?php 
	include('condb.php');
	$id  = $_GET["id"];
	$sql = "DELETE FROM stock WHERE id=$id";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));	
	mysqli_close($con);

if($check){
echo "<script type='text/javascript'>";
echo "alert('ลบข้อมูลสำเร็จ');";
echo "window.location = 'show-member.php'; ";
echo "</script>";
}else{
echo "<script type='text/javascript'>";
echo "window.location = 'show-member.php'; ";
echo "</script>";
}
?>