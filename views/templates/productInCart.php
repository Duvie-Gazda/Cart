<?php
      // Print cart and settings. Script needs array $product, that contains data about product. And $quantity that contains product quantity 
    echo $product[0]['name'].  $product[0]['price'] . ' x ' . $quantity. ' = ' . $product[0]['price'] * $quantity . '<br>';
    ?>