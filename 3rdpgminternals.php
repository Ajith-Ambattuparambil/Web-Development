<?php
$list=array(array("id"=>1,"name"=>"Ajith","MFC"=>39,"ASE"=>37,"DFCA"=>38,"ADS"=>39),
	array("id"=>2,"name"=>"Akhil","MFC"=>49,"ASE"=>47,"DFCA"=>48,"ADS"=>49),
	array("id"=>3,"name"=>"Alfiya","MFC"=>25,"ASE"=>25,"DFCA"=>28,"ADS"=>19));
?>
<html>
<head>
	<title>INTERNAL MARKS</title>
<style>
table {
  border-collapse: collapse;
  width: 60%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: darkred;}
</style>
<body>
	<h1 align="center">MAR ATHNASIUS COLLEGE OF ENGINEERING</h1><br>
	<h2 align="center"><u>First internals<u></h2><br>
	<form method="POST" action="" align="center">
		<table align="center" border="5">
			<tr>
				<td colspan="2">STUDENT DETAILS</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="n" placeholder="Enter the name"></td>
			</tr>
			<tr>
				<td>ID</td>
				<td><input type="number" name="i" placeholder="Enter the ID"></td>
			</tr>
		</table><br><br>
	<input type="submit" name="next" value="SUBMIT">
</form>
<?php
if(isset($_POST['next']))
{
	$total=50;
	$fail=0;
	$totalmarks=0;
	foreach($list as $l)
	{
		if($l["id"]==$_POST['i'] && $l['name']==$_POST['n'])
		{
			?>
			<h3 align="center">NAME: <?php echo strtoupper($_POST['n']);?></h3>
			<h3 align="center">ROLL NO: <?php echo $_POST['i'];?></h3>
			<table align="center" border="5">
			<tr>
			<td>SUBJECT</td>
			<td>MARKS</td>
			<td>PASS/FAIL</td>
			</tr>
			<?php
			foreach($l as $key=>$value)
			{
				if($key!="name" && $key!="id")
				{
				$totalmarks=$totalmarks+$value;
				?>
					<tr>
						<td><?php echo $key;?></td>
						<td><?php echo $value;?></td>
						<?php
						if($value>=$total*0.5)
						{
						?>
						<td>PASS</td>
						<?php
						}
						else
						{
						?>
						<td>FAIL</td>
						<?php
						$fail=1;
						}
						?>
						
					</tr>
				<?php
				}

			}
			?>
			<tr>
			<td>TOTAL</td>
			<td><?php echo $totalmarks;?></td>
			<?php
			if($fail==1)
			{
			?>
			<td>FAIL</td>
			<?php
			}
			else
			{
			?>
			<td>PASS</td>
			<?php
			}
			?>
			</tr>
			</table>
			<?php
		}

	}
}
?>
</body>
</head>
</html>
