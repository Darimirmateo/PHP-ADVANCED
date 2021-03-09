<!DOCTYPE html>
<html>
<head>
    <title>Formulier</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<?php
$kleuren =
array("red", "blue", "green", "black", "brown");
foreach ($kleuren as $value) {
    echo $value. "<br />";     
}
?>



    <form name="maakrij" action="advanced-2.php"
    method="POST">
    <h1>naam</h1>
    <input type="text" name="naam" > 
    <h1>lengte</h1>
    <input type="text" name="lengte"> 
    <h1>achternaam</h1>
    <input type="text" name="achternaam" > 
    <h1>leeftijd</h1>
    <input type="text" name="leeftijd">
    <h1>favorietemuziekband</h1>
    <input type="text" name="favorietemuziekband">  
    <input type="submit" name="submit" value="verstuur">

    
    





</form>
</body>
</html>