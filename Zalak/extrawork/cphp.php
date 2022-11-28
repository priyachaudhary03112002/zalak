<?php
$cars = array (
  array("Volvo",22, 18,'v', 18.5),
  array("BMW",15,13, 'b' , 16.5),
  array("Saab",5,2,'s',10.2 ),
);
    
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 5; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>