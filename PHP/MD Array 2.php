<?php
      // On the line below, create your own associative array:
     $myArray = array ('at home' => array('laundry', 'dishes'),
                   'shopping' => array('milk', 'bread','pasta'),
                   'at work'=>array('Hans','copy folder 1'));

      // On the line below, output one of the values to the page:
      echo $myArray ['shopping'][2].'<br />';

      // On the line below, loop through the array and output
      // *all* of the values to the page:
     foreach ($myArray as $place => $task) {
     	 echo $place . "{<br>"; 
         foreach ($task as $thingToDo){
             echo $thingToDo.'<br />';
         }
         echo "}<br>";
     }

?>

<!-- 
0{
laundry
dishes
}
1{
milk
bread
pasta
}
2{
Hans
copy folder 1
}
 -->
