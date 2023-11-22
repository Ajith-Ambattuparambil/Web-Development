<html>
<head></head>
<body style="background-color:gray; ">
	<script>
		function save(){
			ad_no = document.myForm.ad_no.value;
			name = document.forms.myForm.name.value;
			class = document.forms["myForm"]["class"].value;
			m1 = document.forms["myForm"]["m1"].value;
			m2 = document.forms["myForm"]["m2"].value;
			m3 = document.forms["myForm"]["m3"].value;
			m4 = document.forms["myForm"]["m4"].value;
			
			if(ad_no==""){
				window.alert("Please Enter your Admission No :");
				ad_no.focus();
				return false;
			}
			if(name==""){
				window.alert("Please Enter Name :");
				name.focus();
				return false;
			}
			
			if(class==""){
				window.alert("Please Enter Class :");
				class.focus();
				return false;
			}
			
			if(m1==""){
				window.alert("Please Enter mark 1 :");
				m1.focus();
				return false;
			}
			if(m2==""){
				window.alert("Please Enter mark 2 :");
				m2.focus();
				return false;
			}
			
			if(m3==""){
				window.alert("Please Enter mark 3 :");
				m3.focus();
				return false;
			}
			
			if(m4==""){
				window.alert("Please Enter mark 4 :");
				m4.focus();
				return false;
			}
		}
	</script>
	<center>
		<h1>Student Information system </h1>
	
		<form id="myForm" onsubmit='return validation()' method=Post >
		
			<table border=1px style="text-align:center; background-color:black; color:white;" >
				<tr>
					<td> Admission number </td>
					<td> <input name="ad_no" id="ad_no" type="text"></td>
				</tr>
				
				<tr>
					<td> Name </td>
					<td> <input name="name" type="text"></td>
				</tr>
				<tr>
					<td> Class </td>
					<td> <input name="class" type="text"></td>
				</tr>
				<tr>
					<td> Mark 1 </td>
					<td> <input name="m1" type="text"></td>
				</tr>
				<tr>
					<td> Mark 2 </td>
					<td> <input name="m2" type="text"></td>
				</tr>
				<tr>
					<td> Mark 3 </td>
					<td> <input name="m3" type="text"></td>
				</tr>
				<tr>
					<td> Mark 4 </td>
					<td> <input name="m4" type="text"></td>
				</tr>
				
				<tr>
					<td colspan=2>  <input  type="submit" onclick="save()"  name="s_btn"> </td>
				</tr>
				
			</table>
		
		</form>
		<?php 
			if(isset($_POST["s_btn"])){
			$ad_no = $_POST["ad_no"];
			$name = $_POST["name"];
			$class = $_POST["class"];
			$m1 = $_POST['m1'];
			$m2 = $_POST['m2'];
			$m3 = $_POST['m3'];
			$m4 = $_POST['m4'];
			
			
			
		 ?>
		 <table border=1px border=1px style="text-align:center; background-color:black; color:white;">
		 	<tr>
		 		<td> Admission No </td>
		 		<td> <?php echo $ad_no; ?></td>
		 	</tr>
		 	<tr>
		 		<td> Name </td>
		 		<td> <?php echo $name; ?></td>
		 	</tr>
		 	<tr>
		 		<td> Class </td>
		 		<td> <?php echo $class; ?></td>
		 	</tr>
		 	<tr>
		 		<td> Mark 1 </td>
		 		<td> <?php echo $m1; ?></td>
		 	</tr>
		 	<tr>
		 		<td> Mark 2 </td>
		 		<td> <?php echo $m2; ?></td>
		 	</tr>
		 	<tr>
		 		<td> Mark 3 </td>
		 		<td> <?php echo $m3; ?></td>
		 	</tr>
		 	<tr>
		 		<td> Mark 4 </td>
		 		<td> <?php echo $m1; ?></td>
		 	</tr>
		 </table>
		
	
	</center>
	<?php }?>
</body>
</html>
