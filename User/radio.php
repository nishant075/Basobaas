<?php
session_start();
$dbcon = mysqli_connect("localhost","root","","roomkhoji");

if(isset($_POST['submit']))
{
    $purpose=$_POST['purpose'];
    $address=$_POST['address'];
    $city =$_POST['city'];
    $ward=$_POST['ward'];
    $area =$_POST['area'];
    $measure=$_POST['measure'];
    $builtarea=$_POST['builtarea'];
    $builtmeasure =$_POST['builtmeasure'];
    $builtyear=$_POST['builtyear'];
    $floors =$_POST['floors'];
    $kitchen=$_POST['kitchen'];
    $bedroom=$_POST['bedroom'];
    $bathroom=$_POST['bathroom'];
    $parking =$_POST['parking'];
    $living_room=$_POST['living_room'];
    $title =$_POST['title'];
    $description=$_POST['description'];
    $price =$_POST['price'];
    $ownername=$_POST['ownername'];
    $ownernumber=$_POST['ownernumber'];
    
    $file=$_FILES['photo'];

    $filename = $file['name'];
    $filepath=$file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror==0){
        $destfile ='upload/'.$filename;
        move_uploaded_file($filepath,$destfile);


    
$query= "INSERT INTO radioin(purpose,address,city,ward,area,measure,builtarea,builtmeasure,builtyear,floors,kitchen,bedroom,bathroom,parking,living_room,title,description,price,ownername,ownernumber,pic) VALUES ('$purpose','$address','$city','$ward','$area','$measure','$builtyear','$builtmeasure','$builtyear','$floors','$kitchen','$bedroom','$bathroom','$parking','$living_room','$title','$description','$price','$ownername','$ownernumber','$destfile')";
$query_run= mysqli_query($dbcon,$query);
}


if($query_run){
	$_SESSION['status']="Data Inserted";
	header("Location:postprop.php");

}
else
{
$_SESSION['status']="Data Not Inserted";
	header("Location:postprop.php");	
}
}
