
<!DOCTYPE html>
<html>
<head>
	<title>Get The value from the multiple check boxes</title>
</head>
    <?php 
         $day=Date("Y-M-D");
         echo $day;
                  if () {
         	
         	if (isset($_POST['language'])) {
         		
         	
         	  $lang = $_POST['language'];

         	  foreach ($lang as $temp) {
         	  	
         	  	echo "<br>".$temp;
         	  }

             $str = implode($lang,'-');

             echo " <br><br> *** Using Imploade function *** <br><br>".$str;

         }

         else {

             echo"Please Select at least one language !!!";

         }

       }  

     ?>


</body>
</html>