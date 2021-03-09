<?php
if (!empty($_GET)) {
    echo $_GET ['leeftijd'];
}

if (!empty($_POST)) {
    // echo $_POST ['leeftijd'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        background-color: <?php if (!empty($_POST)) {
                              echo $_POST ['kleur1'];}
        ?>;
        font-family: verdana, Geneva, Tahoma, sans-serif;
        
        text-transform: 
        <?php if ($_POST['hoofdletter'] == "aan"){
                              echo "uppercase";
        }
        ?>;
    }

    table {
        background-color: <?php if (!empty($_POST)) {
                              echo $_POST ['kleur2'];}
        ?>;
        
    } 

    td {
        font-size: <?php if (!empty($_POST)) {
                              echo $_POST ['celpaddin'];}
        ?>;
        

    }

    table. tbody. tr. td. {

        background-color: <?php if (!empty($_POST)) {
                              echo $_POST ['cellpadin'] ['kleur2'] ['tabelranddikte'];}
        ?>;
        font-size:
        <?php if (!empty($_POST)) {
                              echo $_POST ['cellpadin'], ['kleur2'], ['tabelranddikte'];}
        ?>;
        font-family: verdana, Geneva, Tahoma, sans-serif;
        
        text-transform: 
        <?php if ($_POST['man'] == "aan"){
                              echo "uppercase";
        }
        ?>;


  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

        
    }


    </style>
</head>
<body>
 <h4>welkom</h4>   

 <table>
         <thead></thead>
 <tbody>
    <tr>
       <td>
       <?php 
       $mijngegevens = array("name"=> "Mateo", "leeftijd" =>"27", "klass"=> "0d", "muziek" =>"latin", "merkfiets"=> "elektris", "woonplaats" =>"amsterdam"
       , "eten" =>"newyork pizza")
// if (!empty($_POST)) {
    // echo $_POST ['kleur1'];
        ?>
         
         <?php
$mijngegevens =
array("name"=> "Mateo", "leeftijd" =>"27", "klass"=> "0d", "muziek" =>"latin", "merkfiets"=> "elektris", "woonplaats" =>"amsterdam"
, "eten" =>"newyork pizza");
foreach ($mijngegevens as $value) {
    echo $value. "<br />";     
}
?>
       </td>
    </tr>
 </tbody>
 </table>


</body>



</html>