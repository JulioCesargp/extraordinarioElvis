<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

                    <div class="form-group text-success font-weight-bold">
                    <label for="nombre">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text "> 
                                <i class="fas fa-user text-primary" ></i>
                            </span>
                        </div>
                        <input type="text" class="form-control bg-light" id="nombre" name="registroNombre">
                    </div>

                </div>
                <div class="form-group text-success font-weight-bold">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text "> 
                                <i class="fas fa-at text-primary"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control bg-light" id="email" name="registroEmail">
                    </div>
                </div>
                <div class="form-group text-success font-weight-bold">
                    <label for="pwd">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text "> 
                                <i class="fas fa-key text-primary"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control bg-light" id="pwd" name="registroPassword">
                    </div>
                </div>
                
                <?php
                //Instancia de clase de un método no estático

                //$registro = new ControladorFormularios();
                //$registro -> ctrRegistro();

                $registro = ControladorFormularios::ctrRegistro();

                if($registro == "ok"){


                    echo '<script>

                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                        }
                    
                    </script>';
                    echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
                }

                ?>
        
                    <button type="submit" class="btn btn-primary">Enviar</button>
            
    </form>
</div>