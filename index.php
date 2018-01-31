<!DOCTYPE html>
<html>
<head>
  <title>VineTube</title>
  <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width" />
		<?php
	 session_start();
	if(!empty($_SESSION["vinetube"])){
echo ('<link rel="stylesheet" href="video.css" />');
}
else
{
echo ('<link rel="stylesheet" href="video2.css" />');
}?>
<?php
	   session_start();
	    $_SESSION['vinetube']="vinetube";
       if(isset($_REQUEST["v"])){
        $file = urldecode($_REQUEST["v"]); 
        $filepath = "vids/" . $file;
		$_SESSION['vtrun']=$file;
           }
   
    ?><style>
	
	</style>
   </head>
<body link="black" vlink="black"> 
    <video class="video-js" class="video-js vjs-default-skin" id="vid" controls="true" preload="true" playbackRates="[1, 1.5, 2]" autoplay="true"  data-setup="{}">
   <source src="vids/<?php echo $_SESSION['vtrun'];?>" type='video/mp4' />
	     </video><div id="id">&nbsp;&nbsp;<b><u>Playing</u>:<?php echo $_SESSION['vtrun'];?></b><p><a href="https://www.youtube.com/results?search_query=<?php echo $_SESSION['vtrun'];?>"><button id="a">Open in YouTube</button></a></p></div>
		 <img alt src="vt.ico" id="logo" ><br>
		<br><h3 id="t"><u>Play List</u>:-</h3><br>
		<?php
echo ("<div id='list'><ul style='list-style-type:none'>");

foreach (new DirectoryIterator('vids/') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    echo "<li><div ><table><tr><td><a href='./?v=".$fileInfo->getFilename()."'>
	<img src='img/".$fileInfo->getFilename().".jpg' id='k'></td><td  id='".$fileInfo->getFilename()."'><a href='./?v=".$fileInfo->getFilename()."'>
	".$fileInfo->getFilename()."</a></td></tr></table><br></div></li>\n";
}
?></ul><script>window.location = "#<?php echo $_SESSION['vtrun'];?>";
document.getElementById("<?php echo $_SESSION['vtrun'];?>").style.backgroundImage="url('play.png')";
</script></div>
</body>
</html>

