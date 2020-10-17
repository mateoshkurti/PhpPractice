<!DOCTYPE html>
<!--
Mateo Shkurti
Student ID: 991570115
Syst10199- Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Starbuck's Order Page</title>
        <link  rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
       
        <form action="order.php" method="post" >
           
            <div id="container">
                <img src="img/logo-en.png">
                <div id="form">
                    <p>Number of coffees:
                    <input type="number" name="coffee"></p>
                   
                    <br>
                    
                    <p>Size of coffees:
                        <select id="size" name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        <option value="x-large">X-Large</option>
                    </select></p>
                    <br>
                    
                    <p>Number of sugars
                    <input type="number" name="sugar"></p>
                    <br>
                    
                    <p>Number of creams:
                    <input type="number" name="creme"></p>
                    <br>
                    
                    <input type="Submit" name="submit" value="Order">
                    
                </div>
            </div>
        </form>
       
    </body>
</html>
