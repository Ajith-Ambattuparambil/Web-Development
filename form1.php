<html>
      <title>form</title>
                <body>
                   <form action="form1.php" method="post"><pre>
                   
                          Name:    <input type="text" name="a"><br>
                          Address: <textarea type="text" placeholder="enter" name="b"></textarea><br>
                          DOB:     <input type="date" name="c"><br>
                          password:<input type="password" name="d"><br>
                                   <input type="submit" name="n1" value="Submit"  > <input type="submit" value="Reset" name="n">
  			   </pre>	                 
                   </form>
                   
                </body>          
</html> 
<?php
if(isset($_POST['n1']))
{
$name=$_POST['a'];
$address=$_POST['b'];
$dob=$_POST['c'];
echo "The name you entered : ", $name, "<br>";
echo "The address you entered is: ",$address, "<br>";
echo "The DOB you entered is: ",$dob, "<br>";
}
if(isset($_POST['n']))
{
header("Refresh");
}
?>               
