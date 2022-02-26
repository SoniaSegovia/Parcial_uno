<?php 
$codigo = $_POST [ 'codigo'];
$nombres = $_POST [ 'nombres'];
$apellidos = $_POST [ 'apellidos'];
$dui = $_POST [ 'dui'];
$direccion =$_POST ['direccion'];
$telefono = $_POST ['telefono'];
$email = $_POST ['email'];
?>
<div class="container" ><br>
<table class="table table-striped table-hover table-bordered">
    <tbody>
        <tr>
          <th>Codigo</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dui</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
        <tr>
            <td><?php echo $codigo ?></td>
            <td><?php echo $nombres ?></td>
            <td><?php echo $apellidos ?></td>
            <td><?php echo $dui ?></td>
            <td><?php echo $direccion ?></td>
            <td><?php echo $telefono ?></td>
            <td><?php echo $email ?></td>

        </tr>
    </tbody>
</table>
</div>