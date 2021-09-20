

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="main-div">
		<h1 align="center"> Inventory Sytem Display</h1>
		<div class="center-div">
		<div class="table-responsive">
			<table align="center" border="1px" style="width:300px;line-height:30px;">
				
				<thead>
					<tr>
						<th>itm_type</th>
						<th>itm_det</th>
						<th>itm_pri</th>
						<th>Hand_ov_to</th>
						<th>pdate</th>
						<th>Itm_code</th>
						<th>Proj</th>
						<th>Acode</th>
						<th>Condtn</th>
						<th>photo</th>
						<th>itm_invc</th>
						<th>othr1</th>
						<th>othr2</th>

		</tr>
        <thead>
        <tbody>
 
          <?php

                  include 'config.php';
                  $displayquery = "select * from  details";

                  $querydisplay = mysqli_query($connection,$displayquery);

                   //$nums = mysqli_num_rows($query);

                   while($res = mysqli_fetch_array($querydisplay)){
 
?>

             <tr>
 	            <td><?php  echo $res['itm_type'];?></td>
             	<td><?php  echo $res['itm_det'];?></td>
             	<td><?php  echo $res['itm_pri'];?></td>
             	<td><?php  echo $res['Hand_ov_to'];?></td>
             	<td><?php  echo $res['pdate'];?></td>
             	<td><?php  echo $res['Itm_code'];?></td>
             	<td><?php  echo $res['Proj'];?></td>
             	<td><?php  echo $res['Acode'];?></td>
             	<td><?php  echo $res['Condtn'];?></td>
             	<td> <img src="uploads/<?php echo $res['photo']; ?>"
             	 height="200" width=100px></td>
             	 <td> <img src="uploads/ <?php  echo $res['itm_invc'];?>"
             	 height="100px" width=100px></td>
             	  <td> <img src="uploads/  <?php  echo $res['othr1'];?>"
             	 height="100px" width=100px></td>
             	  <td> <img src="uploads  <?php  echo $res['othr2'];?>"
             	 height="100px" width=100px></td>
             	

                 </tr>
               <?php   
                 }
                 ?>
              </tbody>	
       </table>    
     </div>	
    </div>
   </div>
</table>
</body>
</html>  
