<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar usuarios</a>
    </div>
    <div class="card-body">
    <div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Leonardo Aparicio Melchor</td>
                <td>*******</th>
                <td>aparicioo.leo@gmail.com</td>
                <td><input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar">

                <input name="btneborrar" id="btnborrar" class="btn btn-danger" type="button" value="Eliminar"></td>
            </tr>
           
        </tbody>
    </table>
</div>

    </div>
   
</div>

<?php include("../../templates/footer.php"); ?>