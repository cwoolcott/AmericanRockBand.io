<?php 

$DateTime = new DateTime();

if ($DateTime->format("i")>44){
  $fifteens = "45";
}
else if ($DateTime->format("i")>29){
   $fifteens = "30";
}
else if ($DateTime->format("i")>14){
   $fifteens = "15";
}
else{
 $fifteens = "00";
}

$latestTime =  $DateTime->format("F jS, Y h:" . $fifteens . "A");

echo json_encode(array("latestTime"=>$latestTime));