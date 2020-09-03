//advance line bot  

<?php
      $inputValue="";
    if(isset($_POST['SubmitButton']))
    {
    $inputValue=$_POST['textField'];
    }
   ?>
   
  
<html>
  <head>
    <title>Line Bot</title>
  </head>
  <body>
    <form method="POST" action="">
      <input type="text" id="textField" placeholder="Write here!" 	name="textField" />
      <input type="submit" name="SubmitButton"/>
    </form>
	    <span><?php if(isset($inputValue))echo $inputValue;?></span>

  </body>
 <html>
  
