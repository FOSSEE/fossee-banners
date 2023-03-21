<?php
$today = date("Y-m-d H:i:s");
$p_date = "2023-04-15 23:59:59.0";
$fellowship_date = "2023-04-07 23:59:59.0";
if($today<$fellowship_date){
echo '   <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>
<div class="nice-bar" style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">
    <a class="nice-text" href="https://fossee.in/fellowship/2023" target="_blank">
        <img src="https://static.fossee.in/fossee/banners/fsf-2023-banner.png">
    </a>    
    <a class="nice-text" href="https://iitb-fossee-mapathon.fossee.in/" target="_blank">
        <img src="https://static.fossee.in/qgis/banners/mapathon_2023_banner.gif">
    </a>

</div> 
';
 // class="nice-bar" class="nice-text"
}
else{
    echo '   <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/nice-bar.css" />     
          <link rel="stylesheet" type="text/css" href="https://fossee.in/data/banner/css/lightbox.css" /> 
           <script type="text/javascript" src="https://fossee.in/data/banner/js/nice-bar.js"></script>
<div style="margin-bottom:5px; border-bottom:none; width:90%; background-color:transparent;">
   
    <a href="https://iitb-fossee-mapathon.fossee.in/" target="_blank">
        <img src="https://static.fossee.in/qgis/banners/mapathon_2023_banner.gif">
    </a>

</div> 
';
}
?>
