<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<?php
$numero = $_GET['numero'];
?>
<table border=1>
    <?php for ($i=0; $i < $numero; $i++){?>
        <tr>
            <?php for($j=0; $j < $numero; $j++){
                if($j%2 != 0 && $i%2 == 0){
                    echo "<td style=\"background-color:black\"></td>";
                } else if($j%2 == 0 && $i%2 != 0){
                    echo "<td style=\"background-color:black\"></td>";
                } else {
                    echo "<td></td>";
                }
            }
            ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>

