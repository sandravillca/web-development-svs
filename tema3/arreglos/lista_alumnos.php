<?php
    $listaalumnos=[
        0=>["nombre"=>"Juan", "apellido"=>"Perez", "edad"=>45],
        1=>["nombre"=>"Maria", "apellido"=>"Gomez", "edad"=>30],
        2=>["nombre"=>"Pedro", "apellido"=>"Gonzalez", "edad"=>25],
        3=>["nombre"=>"Ana", "apellido"=>"Perez", "edad"=>35]
    ];
?>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
    </tr>
<?php
    foreach($listaalumnos as $alumno){?>
    <tr>
        <td><?php echo $alumno["nombre"]?></td>
        <td><?php echo $alumno["apellido"]?></td>
        <td><?php echo $alumno["edad"]?></td>
    </tr>
<?php } ?>

</table>


