<html>
<head>
        <title>ABC Supermarket</title>
</head>
<body>
        <marquee speed="100">
                <h2>Receipt</h2>
        </marquee>
        <center>
                <h1 style="color:darkred"><u>ABC Supermarket</u></h1>
                <h3 style="color:crimson">Bill Details</h3>
                <form id="bill" method="POST">
                        <table border=5 cellpadding=5 class="table-dark">
                                <tr align="center">
                                        <td>Serial code</td>
                                        <td>Item</td>
                                        <td>Quantity</td>
                                        <td>Price</td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S1"></td>
                                        <td><input type="text" placeholder="Item Name" name="I1"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q1"></td>
                                        <td><input type="text" placeholder="Price" name="P1"></td>  
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S2"></td>
                                        <td><input type="text" placeholder="Item Name" name="I2"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q2"></td>
                                        <td><input type="text" placeholder="Price" name="P2"></td>  
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S3"></td>
                                        <td><input type="text" placeholder="Item Name" name="I3"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q3"></td>
                                        <td><input type="text" placeholder="Price" name="P3"></td> 
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S4"></td>
                                        <td><input type="text" placeholder="Item Name" name="I4"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q4"></td>
                                        <td><input type="text" placeholder="Price" name="P4"></td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S5"></td>
                                        <td><input type="text" placeholder="Item Name" name="I5"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q5"></td>
                                        <td><input type="text" placeholder="Price" name="P5"></td>
                                </tr>
                                
                                </tr>
                        </table>  
                        <br>
                        <Input type="submit" value="save" name="next" ></td>
                        <input type="reset" value="Clear" onclick="clear()">              
                </form>
        </center>
</body>
</html>
<?php
    if(isset($_POST['next']))
        {
            $S1=$_POST['S1'];
            $I1=$_POST['I1'];
            $Q1=$_POST['Q1'];
            $P1=$_POST['P1'];
            $T1=$Q1*$P1;
            $S2=$_POST['S2'];
            $I2=$_POST['I2'];
            $Q2=$_POST['Q2'];
            $P2=$_POST['P2'];
            $T2=$Q2*$P2;
            $S3=$_POST['S3'];
            $I3=$_POST['I3'];
            $Q3=$_POST['Q3'];
            $P3=$_POST['P3'];
            $T3=$Q3*$P3;
            $S4=$_POST['S4'];
            $I4=$_POST['I4'];
            $Q4=$_POST['Q4'];
            $P4=$_POST['P4'];
            $T4=$Q4*$P4;
            $S5=$_POST['S5'];
            $I5=$_POST['I5'];
            $Q5=$_POST['Q5'];
            $P5=$_POST['P5'];
            $T5=$Q5*$P5;
            $GT=$T1+$T2+$T3+$T4+$T5;      
?>
<html>
	<h1 align="center" style="color:darkred"><u>ABC Supermarket</u></h1>
	<body><center>
	<form>
		<table border="3" align="center" style="color:orange" bordercolor="redorange" width="500" height="300">
		<tr>
		<th colspan="5">BILL DETAILS</th>
		</tr>
          <tr>
		<th align="center">S.NO</th>
		<th align="center">ITEM</th>
		<th align="center">QUANTITY</th>
		<th align="center">UNIT PRICE</th>
		<th align="center">TOTAL PRICE</th>
		</tr>
		<tr>
		<td align="center">1</td>
		<td align="center"><?php echo $I1;?></td>
		<td align="center"><?php echo $Q1;?></td>
		<td align="center"><?php echo $P1;?></td>
		<td align="center"><?php echo $T1;?></td>
		</tr>
        <tr>
		<td align="center">2</td>
		<td align="center"><?php echo $I2;?></td>
		<td align="center"><?php echo $Q2;?></td>
		<td align="center"><?php echo $P2;?></td>
		<td align="center"><?php echo $T2;?></td>
		</tr>
        <tr>
		<td align="center">3</td>
		<td align="center"><?php echo $I3;?></td>
		<td align="center"><?php echo $Q3;?></td>
		<td align="center"><?php echo $P3;?></td>
		<td align="center"><?php echo $T3;?></td>
		</tr>
        <tr>
		<td align="center">3</td>
		<td align="center"><?php echo $I4;?></td>
		<td align="center"><?php echo $Q4;?></td>
		<td align="center"><?php echo $P4;?></td>
		<td align="center"><?php echo $T4;?></td>
		</tr>
        <tr>
		<td align="center">3</td>
		<td align="center"><?php echo $I5;?></td>
		<td align="center"><?php echo $Q5;?></td>
		<td align="center"><?php echo $P5;?></td>
		<td align="center"><?php echo $T5;?></td>
		</tr>
		<tr>
		<td align="center" colspan="4">GRAND TOTAL</td>
		<td align="center"><?php echo $GT;?></td>
		</tr>
		</table><br><br>
	</center></form>
</body>
</head>
</html>
<?php
}
?>
