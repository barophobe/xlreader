<?php
require ('mysqli_connect.php');
/*$file = fopen("qeCBCPPurchase.csv", "r");*/


if (($file = fopen('qeCBCPPurchase.csv', "r")) !== FALSE) {
         $data = fgetcsv($file, 1000, ",");
   while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
     //$num = count($data);
	   //echo $num;
        //for ($c=0; $c < $num; $c++) {
            $result = $data;
        	$str = implode(",", $result);
        	$slice = explode(",", $str);

$date = $slice[0];
$YWWB98D = $slice[1];
$YWWB58C = $slice[2]; 
$YWWB99O = $slice[3];  
$YWWB8X8 = $slice[4];  
$YWWB37P = $slice[5];  
$YWWB8X9 = $slice[6];  
$YWWB97O = $slice[7];


$q = "INSERT INTO cbcppurchases (qedate, YWWB98D , YWWB58C, YWWB99O, YWWB8X8, YWWB37P, YWWB8X9, YWWB97O) VALUES ('$date','$YWWB98D','$YWWB58C', '$YWWB99O', '$YWWB8X8', '$YWWB37P', '$YWWB8X9', '$YWWB97O' )"; 
$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
    
}
}
echo "<script>alert('Record successfully uploaded.');</script>";
//echo "File data successfully imported to database!!";
mysqli_close($dbc);

/*while(! feof($file))
{

$YWWB98D = $file[0];
$YWWB58C = $file[1]; 
$YWWB99O = $file[2];  
$YWWB8X8 = $file[3];  
$YWWB37P = $file[4];  
$YWWB8X9 = $file[5];  
$YWWB97O = $file[6]; 

$q = "INSERT INTO cbcppurchases (YWWB98D , YWWB58C, YWWB99O, YWWB8X8, YWWB37P, YWWB8X9, YWWB97O) VALUES ('$YWWB98D','$YWWB58C', '$YWWB99O', '$YWWB8X8', '$YWWB37P', '$YWWB8X9', '$YWWB97O' )"; 
$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
	
}*/
/*fclose($file);*/
?>