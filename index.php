<html>

<?php include_once("api.php"); ?>    
    
<head>
<title>Calculator</title>
</head>

<body>

<h1>Calculator</h1>
<form method="post" action="index.php">

<div>
Enter the numbers 
</div>

<br>    
    
<div>
A <input value="<?php if(isset($_POST['a'])) { echo $_POST['a']; } ?>" type="text" name="a" />
</div>

<br>

<div>
B <input value="<?php if(isset($_POST['b'])) { echo $_POST['b']; } ?>" type="text" name="b" />
</div>

<br>
    
<div>
Operation:
</div>
  
<div>
<input type="radio" name="type" value="1" /> + <br>
<input type="radio" name="type" value="2" /> - <br>
<input type="radio" name="type" value="3" /> * <br>
<input type="radio" name="type" value="4" /> / <br>
</div>

<br>
    
<div>
<input name="calculate" type="submit" value="Calculate" />
</div>
    
</form> 
    

Result: <input readonly value="<?php if(isset($_POST['calculate'], $result)) { echo $result; } ?>" >    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>


</html>