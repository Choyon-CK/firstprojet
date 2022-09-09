<?php session_start();
include_once('includes/config.php');
if(strlen( $_SESSION["edmsid"])==0)
{   header('location:logout.php');
} else {
if(isset($_POST['submit']))
{
$ndescription=$_POST['discription'];
$createdby=$_SESSION["edmsid"];
$sql=mysqli_query($con,"insert into tbltodo(description) values('$description')");



}




?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>e-Diary Management System</title>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<link href="css/todo.css" rel="stylesheet" />  

</head>
<body>
<?php include_once('includes/header.php');?>
<div id="layoutSidenav">
<?php include_once('includes/leftbar.php');?>
<div id="layoutSidenav_content">

<form>
<div id="myDIV" class="header">
<h2 style="margin:5px">My To Do List</h2>
<input type="text" id="myInput" placeholder="Title...">
<span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL"> </ul>
</form>


<?php include_once('includes/footer.php');?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="js/todoscript.js"></script>
</body>
</html>
<?php }  ?>
