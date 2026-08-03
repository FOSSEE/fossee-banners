<?php
$today = date("Y-m-d H:i:s");
$oshw_hackathon_date = "2026-09-30 23:59:59.0";
$autumn_date = "2026-08-23 23:59:59.0";

if($today<$autumn_date){
echo '   <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

           <div  class="nice-bar" style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">

       <a  class="nice-text"  href="https://fossee.in/semester-internship/autumn/2026" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/sliaWebnr2607-v2.gif">
           </a> 

           <a class="nice-text" class="nice-text" href="https://makeathon26.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/oshwWbnrMake26-v02.png">
           </a>
           </div>
';
       }
else {
echo '
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>

                      <div  style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">

           <a class="nice-text" class="nice-text" href="https://makeathon26.fossee.in/" target="_blank">
          <img src="https://static.fossee.in/fossee/banners/oshwWbnrMake26-v02.png">
           </a>
          <!-- add class="nice-text"  class="nice-bar" for two banners-->
            
          
       </div> 
       ';

}
          
          
       

   
       ?>
