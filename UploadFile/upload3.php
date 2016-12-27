<form name ="upload" method="POST" action="" enctype="multipart/form-data">
<tr>
  <td><input type="file" name="file"/></td>
  <td><input type="submit" name="submit" value="upload" /></td>
 </tr>
</form>
<?php
  if(isset($_POST['submit']) && ($_FILES['file']['tmp_name'])!=NULL){
	 if($_FILES['file']['type']=="image/jpeg"){
        move_uploaded_file($_FILES['file']['tmp_name'] , 'C:\wamp64\www\\'.$_FILES['file']['name']);
	 }
	 else
	 {
		 echo "file khong hop le";
	 }
 }
?>
