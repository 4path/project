<?php SESSION_start();?>
<?php  
$con = mysqli_connect('127.0.0.1', 'root', '', 'Project');
$query = mysqli_query($con, "SELECT * FROM students WHERE  phone={$_POST['phone']} AND password={$_POST['password']}");
$stroka = $query->fetch_assoc();
$_SESSION['student_id'] = $stroka['id'];
$num = mysqli_num_rows($query);
if($num>0){
	header("Location: accountStudent.php");
} else{
	header("Location: loginStudent.php");}
?>