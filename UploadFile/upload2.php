<form name="frmupload" method="POST" action="" enctype="multipart/form-data">
 <tr>
  <td><input type="file" name="file"/></td>
  <td><input type="submit" name="submit" value="upload" /></td>
 </tr>
</form>
<?php
 $link = "C:\wamp64\www\\";
 if(isset($_POST['submit'])&&($_FILES['file']['tmp_name'])!=NULL)
 {
	 if($_FILES['file']['type']=="image/jpeg")
	 {
		 $link="C:\wamp64\www\\";
		 $tmp_name=$_FILES['file']['tmp_name'];
		 $name=$_FILES['file']['name'];
		 $type=$_FILES['file']['type'];
		 move_uploaded_file($tmp_name,$link.$name);
		 echo "ten file :".$name." Kieu file :".$type." Duong Dan file :".$link;
	 }
	 else
		 echo "file k hop le";
 }		 
?>

		 