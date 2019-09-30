<?php
	 require('config.php');
	 

    // If the values are posted, insert them into the database.
    if (isset($_POST['titlos']) && isset($_POST['siggrafeas'])){
        $titlos= $_POST['titlos'];
	$siggrafeas = $_POST['siggrafeas'];
        $ekdoseis = $_POST['ekdoseis'];
 
        $query = "INSERT INTO `course` (titlos, siggrafeas, ekdoseis) VALUES ('$titlos', '$siggrafeas', '$ekdoseis)";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Bookk insert ";
        }else{
            $fmsg ="Book is not insert";
        }
    }
    ?>







<html>
<form method = "post"> 
 <div class="newBook">
 	<h2> Νέο Βιβλίο: </h2> <br />

 	Tίτλος Βιβλίου:<br />
 	<input class="form-control" type="text" name="titlos" > 
 	<br />
 	<br />
 	
 	Συγγραφέας:<br />
 	<input class="form-control" type="text" name="siggrafeas" > <br />
 	<br />
 	Εκδώσεις:<br />
 	<input class="form-control" type="text" name="ekdoseis" > <br />
 	<br />
 	
    
    <br />
    <br />
    <br /> 
	<div ng-app="fileUpload" class="containerr">
		<div class="row" ng-controller="upload">
		  <div class="col-md-6">
			  <input type="file" fileinput="file" filepreview="filepreview"/>
		  </div>
		  <div class="col-md-6">
			 <img ng-src="{{filepreview}}" class="img-responsive" ng-show="filepreview"/>
		  </div>
		  
		 
		</div>
	  </div>

   	      <button class="btn btn-primary" ng-click="$ctrl.storeCookie($ctrl.cookie)" >Καταχώρηση</button>
  </div>
  </div>
    </div>
     </div>

		 <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
 </form>


</html>






