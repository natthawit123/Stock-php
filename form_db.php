<meta charset="utf-8">
<?php
include('condb.php');
    $name = $_POST["name"];
    $idproducts = $_POST["idproducts"];
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
    $photo = $_POST['photo']; //รับค่าไฟล์จากฟอร์ม	        
        
    $date = date("Ymd");	
             $numrand = (mt_rand());
    $upload=$_FILES['photo'];
    if($upload <> '') {   
                $path="img/";  
    
                $type = strrchr($_FILES['photo']['name'],".");
                    
                $newname = $date.$numrand.$type;
                $path_copy=$path.$newname;
                $path_link="img/".$newname;
    
                move_uploaded_file($_FILES['photo']['tmp_name'],$path_copy);  	
        }

    $sql = "INSERT INTO stock (
       name,
       idproducts,
       unit,
       type3,
       unit2,
       type2,
       piece,
       weight,
       pack,
       size,
       size2,
       box,
       format,
       detail,
       photo
        )
        VALUES
        (
        '$name',
        '$idproducts',
        '$unit',
        '$type3',
        '$unit2',
        '$type2',
        '$piece',
        '$weight',
        '$pack',
        '$size',
        '$size2',
        '$box',
        '$format',
        '$detail',
        '$newname'
        )";
    ;

	
	
        $result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error());
	if ( $result){
		echo "<script type='text/javascript'>";
			echo "alert('เพิ่มข้อมูลสำเร๊จ');";
			echo "window.location='show-member.php'";
		echo "</script>";
		}else{
			echo "<script type='text/javascript'>";
				echo "alert('Error');";
			echo "</script>";
			}
    

?>