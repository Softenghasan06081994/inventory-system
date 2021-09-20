<?php
require_once('config.php');
?>

<html>         
    <html>    
    <head>   
    
        <link rel ="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-compatible" content=IE="edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
        <link rel ="stylesheet" type="text/css" href="style.css">
     </head>
     <body>  

   <?php
   if (isset($_POST['submit'])){
      $extension=array('jpeg','jpg','png','gif');
      $finalimg='';
      foreach ($_FILES['photo']['tmp_name'] as $key => $value) {
        $filename=$_FILES['photo']['name'][$key];
       $filename_tmp=$_FILES['photo']['tmp_name'][$key];
       echo '<br>';
       $ext=pathinfo($filename,PATHINFO_EXTENSION);
      
        if(in_array($ext,$extension))
        {
           IF(!file_exists('uploads/'.$filename))
           {
          move_uploaded_file($filename_tmp,'uploads/'.$filename);
           //$finalimg=$filename;
          $finalimg .=$filename .',';
            }else{
                
                     $filename=str_replace('.','-',basename($filename,$ext));
                     echo $newfilename=$filename.time().".".$ext;
                     move_uploaded_file($filename_tmp, 'uploads/'.$newfilename);
                     //$finalimg=$newfilename;
                     $finalimg .=$newfilename .',';
                 }
        }else
        {
          //display error
        }
     }

$extension=array('jpeg','jpg','png','gif');
      $finalimg1='';
      foreach ($_FILES['itm_invc']['tmp_name'] as $key => $value) {
        $filename=$_FILES['itm_invc']['name'][$key];
       $filename_tmp=$_FILES['itm_invc']['tmp_name'][$key];
       echo '<br>';
       $ext=pathinfo($filename,PATHINFO_EXTENSION);
      
        if(in_array($ext,$extension))
        {
           IF(!file_exists('uploads/'.$filename))
           {
          move_uploaded_file($filename_tmp,'uploads/'.$filename);
           //$finalimg=$filename;
          $finalimg1 .=$filename .',';
            }else{
                
                     $filename=str_replace('.','-',basename($filename,$ext));
                     echo $newfilename=$filename.time().".".$ext;
                     move_uploaded_file($filename_tmp, 'uploads/'.$newfilename);
                     //$finalimg=$newfilename;
                     $finalimg1 .=$newfilename .',';
                 }
        }else
        {
          //display error
        }
     }

$extension=array('jpeg','jpg','png','gif');
      $finalimg2='';
      foreach ($_FILES['othr1']['tmp_name'] as $key => $value) {
        $filename=$_FILES['othr1']['name'][$key];
       $filename_tmp=$_FILES['othr1']['tmp_name'][$key];
       echo '<br>';
       $ext=pathinfo($filename,PATHINFO_EXTENSION);
      
        if(in_array($ext,$extension))
        {
           IF(!file_exists('uploads/'.$filename))
           {
          move_uploaded_file($filename_tmp,'uploads/'.$filename);
           //$finalimg=$filename;
          $finalimg2 .=$filename .',';
            }else{
                
                     $filename=str_replace('.','-',basename($filename,$ext));
                     echo $newfilename=$filename.time().".".$ext;
                     move_uploaded_file($filename_tmp, 'uploads/'.$newfilename);
                     //$finalimg=$newfilename;
                     $finalimg2 .=$newfilename .',';
                 }
        }else
        {
          //display error
        }
     }

$extension=array('jpeg','jpg','png','gif');
      $finalimg3='';
      foreach ($_FILES['othr2']['tmp_name'] as $key => $value) {
        $filename=$_FILES['othr2']['name'][$key];
       $filename_tmp=$_FILES['othr2']['tmp_name'][$key];
       echo '<br>';
       $ext=pathinfo($filename,PATHINFO_EXTENSION);
      
        if(in_array($ext,$extension))
        {
           IF(!file_exists('uploads/'.$filename))
           {
          move_uploaded_file($filename_tmp,'uploads/'.$filename);
           //$finalimg=$filename;
          $finalimg3 .=$filename .',';
            }else{
                
                     $filename=str_replace('.','-',basename($filename,$ext));
                     echo $newfilename=$filename.time().".".$ext;
                     move_uploaded_file($filename_tmp, 'uploads/'.$newfilename);
                     //$finalimg=$newfilename;
                     $finalimg3 .=$newfilename .',';
                 }
        }else
        {
          //display error
        }
     }




      $id        = $_POST['id'];
      $itm_type  = $_POST['itm_type'];
      $itm_det    = $_POST['itm_det'];
      $itm_pri    = $_POST['itm_pri'];
      $Hand_ov_to  = $_POST['Hand_ov_to'];                 
      $pdate       = $_POST['pdate'];         
      $Itm_code    = $_POST['Itm_code'];
      $Proj       = $_POST['Proj'];
      $Acode      = $_POST['Acode'];         
      $Condtn     = $_POST['Condtn'];
      
     
    

      $sql = "INSERT INTO details (id,itm_type,itm_det,itm_pri,Hand_ov_to,pdate,Itm_code,Proj,Acode,Condtn,photo,itm_invc,othr1,othr2) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$id,$itm_type,$itm_det,$itm_pri,$Hand_ov_to,$pdate,$Itm_code,$Proj,$Acode,$Condtn,$finalimg,$finalimg1,$finalimg2,$finalimg3]);
     if($result){

     echo 'Successfully saved.';
    }else{
      echo 'There were erros while saving the data.';
    }
}else{
  echo 'No data';
}
    ?>
    
           <h1> Inventory System </h1>
         <br><br><br>
         <form action="index.php" method="post" enctype="multipart/form-data">
          <div class="outerbox">

          
           <div class="ficon">
        <i class="fa fa-clipboard" aria-hidden="true"></i>
           </div>

           <div class="fouterbox">
           <div class="main"> 

              <div class="left">
                <input type="text"name="id" placeholder="ID">
                 <input type="text"name="itm_type" placeholder="Itemtype" required>
                 <input type="text"name="itm_det" placeholder="ItemDetail" required>
                 <input type="text"name="itm_pri" placeholder="ItemPrice" required>
                  <input type="text"name="Hand_ov_to" placeholder="Handedoverto" required>
                   <input type="date"name="pdate" placeholder="PurchaseDate" required>
                   <input type="text"name="Itm_code" placeholder="ItemCode" required>
                   <input type="text"name="Proj" placeholder="Project" required>

                <input type="text"name="Acode"placeholder="AssetCode" required> 
                <input type="text"name="Condtn" placeholder="Condition" required>
                 


              </div>
             <div class="right">
               
               
                    <hr/>
                    <div class="form-group">
                      <label>uploadinventoryphoto1</label><br>
                      <input name="photo[]" type="file"  class="form-control" multiple/><br>
                      <label>Item Invoice</label><br>
                       <input name="itm_invc[]" type="file"  class="form-control" multiple/><br>
                       <label>Other 1</label><br>
                       <input name="othr1[]" type="file"  class="form-control" multiple/><br>
                       <label>Other 2</label><br>
                       <input name="othr2[]" type="file"  class="form-control" multiple/><br><br>

                     
                      
                      
                     
                <input class="btn-primary" type="submit" name="submit" value="submit">
                </div>
                
</div>
</div>
</div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>    
</html>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){
    $('#register').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){


      var id         = $('#id').val();
      var itm_type     = $('#itm_type').val();
      var itm_det       = $('#itm_det').val();
      var itm_pri        = $('#itm_pri').val();
      var Hand_ov_to     = $('#Hand_ov_to').val();
      var pdate        = $('#pdate').val();
      var Itm_code     = $('#Itm_code').val();
      var Proj        = $('#Proj').val();
      var Acode       = $('#Acode').val();
      var Condtn      = $('#Condtn').val();
      var itm_invc      = $('#itm_invc').val();
      var Othr1       = $('#othr1').val();
      var Othr2      = $('#othr2').val();
      

      
      e.preventDefault();

$.ajax({
  type: 'POST',
  url: 'index.php',
  data: {id: id,itm_type: itm_type,itm_det: itm_det,itm_pri: itm_pri,Hand_ov_to: Hand_ov_to,pdate: pdate,Itm_code: Itm_code,Proj: Proj,Acode: Acode,Condtn: Condtn,itm_invc: itm_invc, othr1: othr1,othr2: Othr2},
  success: function(data){
  Swal.fire({
        'title': 'Successful',
        'text': data,
        'type': 'success'
        })

  },
  error: function(data){
    Swal.fire({
        'title': 'Errors',
        'text': 'There were errors while saving the data.',
        'type': 'error'
        })
  }
});


}else{

}


});


});

</script>
</body>
</html>