<?php
  $float = array (
    array(
        array(1, 2, 3, 4, 5),
    )
    
    
  );

  for ($row = 0; $row < 1; $row++) 
  {
    for ($r = 0; $r < 2; $r++) 
    {
    echo "<p><b>Row number $row</b></p>";
    
    for ($col = 0; $col < 5; $col++) 
    {
      
      echo "<li>".$float[$row][$col]."</li>";
    }
  }
    
  }
  ?>
