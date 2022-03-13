<!DOCTYPE html>
<html>
<head>
 <title>Display student</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-info text-center" > Waiting for you to win!!! </h1>
 <br>
 <center>
 <video width="700px" height="500px" 
        controls="controls"/> 
         
        <source src="images\htmlvideo.mp4" 
            type="video/mp4"> 
    </video> 
	</center>
	<br>
	<br>
	<br>
	<br>
	
	<center>
	<a href = "html_quiz.php">
	<button type="button" class="btn btn-success" style="width:280px;height:60px;font-size:30px;margin-bottom:4px"><b>Attempt Quiz 1</b></button>
	</a>
	<br>
	<br>
	<br>
	</center>
	
	<center>
	<video width="700px" height="500px" 
        controls="controls"/> 
         
        <source src="images\html_video2.mp4" 
            type="video/mp4"> 
    </video> 
	</center>
	<br>
	<br>
	<br>
	<br>
	<center>
	<a href = "html_quiz2.php">
	<button type="button" class="btn btn-success" style="width:280px;height:60px;font-size:30px;margin-bottom:4px"><b>Attempt Quiz 2</b></button>
	</a>
	<br>
	<br>
	</center>
	
	
	
	
	
 <!--<table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> USN </th>
 <th>First Name </th>
 <th> Last Name </th>
 <th> email </th>
 <th> Department </th>
 <th> Semester </th>
 

 </tr >

 <?php

 include 'connect.php'; 
 $q = "select * from users ";

 $query = mysqli_query($connection,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['usn'];  ?> </td>
 <td> <?php echo $res['first_name'];  ?> </td>
 <td> <?php echo $res['last_name'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['department'];  ?> </td>
 <td> <?php echo $res['semester'];  ?> </td>
 

 </tr>

 <?php 
 }
  ?>
  
 
 </table>-->  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>