<?php
ob_start();
// include header.php file
include('header.php')

?>

<!-- start #main-site -->

<?php

// include user login sytem
// include('Template/_login.php');
// include user login sytem

// include banner area section
include('Template/_banner-area.php');
// end include banner area section

//  include top sale section
include('Template/_top-sale.php');
// end include top sale section

// include Special Price section
include('Template/_special-price.php');
// end include Special Price section

//include banner adds section
include('Template/_banner_adds.php');
//end include banner adds

//include new phone section
include('Template/_new-phones.php');
//end include new phone section

//include blogs area
include('Template/_blogs.php');
//end include blogs area

?>


<?php
// include footer.php file
include('footer.php')

?>