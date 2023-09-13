<!--  ledder if  -->

<?php
  $ch=$_POST['text'];
   if(strlen ($ch)==1){
	   echo'character';
   }
   else if(strlen ($ch)>1){
	   $dot=strpos ($ch,'.');
	   $space=strpos ($ch,' ');
	   if ($dot || $space){
		   echo 'sentence';
	   }
	   else {
		   echo 'word'; 
	   }
   }
?>