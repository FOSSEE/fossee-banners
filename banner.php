<?php
$today = date("Y-m-d H:i:s");
$internshipEndDate = "2026-11-23 23:59:59";
$animate2026 = "2026-11-30 23:59:59";

if($today <= $internshipEndDate){
echo '   
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

           <div  class="nice-bar"  style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">
           
          <a  class="nice-text" href="https://animate2026.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/focal/banners/anim26_reg_extension.png">
           </a> 

           <a  class="nice-text" href="https://fossee.in/winter-internship/2026" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/sliWint26.gif">
           </a> 
          
           </div>
';
       }
          
else if ($today <= $animate2026){
echo '
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

         <div  style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">

          <a href="https://animate2026.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/focal/banners/anim26_reg_extension.png">
           </a> 
    
       </div> 
       ';

} 
          
          
       

   
       ?>
