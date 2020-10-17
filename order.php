<!DOCTYPE html>
<!--
Mateo Shkurti
Student ID: 991570115
Syst10199- Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Order</title>
        <link  rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body id="orderbody">
        <?php
        $coffees=$_POST["coffee"];
        $size=$_REQUEST['size'];
        $sugar=$_POST["sugar"];
        $creme=$_POST["creme"];
        $price=1.5;
        $total=$coffees*$price;
        $tax=0.13*$total;
        $totalplus=$total+$tax
        
        ?>
        <?php if($coffees>0&&$sugar>-1&&$creme>-1) :?>
        <?php for($i=0;$i<$coffees;$i++): ?>
        <div id="order">
            <?php if($size=="small"): ?>
            <img src="img/cup.jpg" width="100px" height="100px" title="Small Coffee" >
            <?php endif; ?>
            
            <?php if($size=="medium"): ?>
            <img src="img/cup.jpg" width="120px" height="120px" title="Medium Coffee">
            <?php endif; ?>
            
            <?php if($size=="large"): ?>
            <img src="img/cup.jpg" width="140px" height="140px" title="Large Coffee">
            <?php endif; ?>
            
            <?php if($size=="x-large"): ?>
            <img src="img/cup.jpg" width="200px" height="200px" title="X-Large Coffee">
            <?php endif; ?>
            
            <?php if($creme>0):?>
            <img src="img/plus.jpg" width="60px" height="60px">
            <?php endif ?>
            
            <?php for($c=0;$c<$creme;$c++): ?>
            <img src="img/cream.jpg" width="50px" height="50px" title="creme">
            <?php endfor; ?>
           
             <?php if($sugar>0):?>
            <img src="img/plus.jpg" width="60px" height="60px">
            <?php endif ?>
            
            <?php for($s=0;$s<$sugar;$s++): ?>
            <img src="img/sugar.jpg" width="60px" height="60px" title="sugar">
            <?php endfor; ?>
            
            <br>
        </div>
        <?php endfor; ?>
        
        <p id="total"> You have ordered <?PHP echo "$coffees $size"?> coffees. 
            Price is <?PHP echo "$$total + $$tax tax =$$totalplus"?></p>
        
        <button id="back"><a href="index.php">Make another order</a></button>
        <?php endif;?>
        
        <?php if($coffees<1||$coffees==NULL||$sugar<0||$creme<0):?>
        
        <h2 id="error">
            <p>Please fill all fields. The coffee order should be at least one.</p>
            <p>Sugars and cremes can be 0 or above.</p>
        </h2>
        <button id="back"><a href="index.php">Go back to order page</a></button>
        <?php endif; ?>
    </body>
</html>
