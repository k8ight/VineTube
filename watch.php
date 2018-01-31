<!DOCTYPE html>
<html>
<head>
  <title>VineTube</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="video2.css" />
    </head>
<body link="black" vlink="black">    
<video class="video-js" class="video-js vjs-default-skin" id="vid" controls="true" preload="true" playbackRates="[1, 1.5, 2]" autoplay="true"  data-setup="{}">
   <source src="
       <?php
       if(isset($_REQUEST["v"])){
        $file = urldecode($_REQUEST["v"]); 
        
        

            echo "$file";
		
   }
    ?>" type='video/mp4' />
	     </video><img alt src="vt.ico" id="logo" ><br>


		<br>
</body>
</html>

