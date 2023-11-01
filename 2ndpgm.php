<html>
<head>
        <title>ABC Supermarket</title>
</head>
<body>
        <marquee speed="200">
                <h2>Receipt</h2>
        </marquee>
        <center>
                <h1>Bill Details</h1>
                <form id="bill" method="get">
                        <table border=5 cellpadding=5 class="table-dark">
                                <tr align="center">
                                        <td>Serial code</td>
                                        <td>Item</td>
                                        <td>Quantity</td>
                                        <td>Price</td>
                                        <td>Total</td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S1"></td>
                                        <td><input type="text" placeholder="Item Name" name="I1"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q1"></td>
                                        <td><input type="text" placeholder="Price" name="P1"></td>
                                        <td><input type="text" placeholder="Total" name="T1"></td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S2"></td>
                                        <td><input type="text" placeholder="Item Name" name="I2"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q2"></td>
                                        <td><input type="text" placeholder="Price" name="P2"></td>
                                        <td><input type="text" placeholder="Total" name="T2"></td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S3"></td>
                                        <td><input type="text" placeholder="Item Name" name="I3"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q3"></td>
                                        <td><input type="text" placeholder="Price" name="P3"></td>
                                        <td><input type="text" placeholder="Total" name="T3"></td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S4"></td>
                                        <td><input type="text" placeholder="Item Name" name="I4"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q4"></td>
                                        <td><input type="text" placeholder="Price" name="P4"></td>
                                        <td><input type="text" placeholder="Total" name="T4"></td>
                                </tr>
                                <tr align="center">
                                        <td><input type="text" placeholder="Serial Code" name="S5"></td>
                                        <td><input type="text" placeholder="Item Name" name="I5"></td>
                                        <td><input type="text" placeholder="Quantity" name="Q5"></td>
                                        <td><input type="text" placeholder="Price" name="P5"></td>
                                        <td><input type="text" placeholder="Total" name="T5"></td>
                                </tr>
                                <tr align="center">
                                       <td>Grand Total</td>
                                       <td><input type="text" placeholder="Total" id="To" name="GT"></td>
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
            $T1=$_POST['T1'];
            $S2=$_POST['S2'];
            $I2=$_POST['I2'];
            $Q2=$_POST['Q2'];
            $P2=$_POST['P2'];
            $T2=$_POST['T2'];
            $S3=$_POST['S3'];
            $I3=$_POST['I3'];
            $Q3=$_POST['Q3'];
            $P3=$_POST['P3'];
            $T3=$_POST['T3'];
            $S4=$_POST['S4'];
            $I4=$_POST['I4'];
            $Q4=$_POST['Q4'];
            $P4=$_POST['P4'];
            $T4=$_POST['T4'];
            $S5=$_POST['S5'];
            $I5=$_POST['I5'];
            $Q5=$_POST['Q5'];
            $P5=$_POST['P5'];
            $T5=$_POST['T5'];
        }       
?>