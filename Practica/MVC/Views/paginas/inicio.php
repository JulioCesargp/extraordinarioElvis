<?php

$usuarios = ControladorFormularios::ctrSeleccionarRegistros();

?>

<table class="table table-striped">
                <thead>
                   <tr>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Email</th>
                       <th>Fecha</th>
                       <th>Acciones</th>
                   </tr>
               </thead>

               <tbody>

               <?php foreach($usuarios as $key => $value){?>  

                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo $value['nombre']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['fecha']; ?></td>
                        <td>
                            <div class="btn-group">

                                <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>

                <?php }?>
               </tbody>
</table>