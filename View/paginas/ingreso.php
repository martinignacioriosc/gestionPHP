<div class="d-flex justify-content-center text-center">


    <form class="p-5 bg-light" method="post">


        <div class="form-group">
            <label for="email">Email: </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="ingresoEmail">
            </div>
        </div>


        <div class="form-group">
            <label for="password">Contraseña: </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="ingresoPassword">
            </div>
        </div>

        <?php 
        /*============================================================
        FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO (PROCEDIMIENTO)
        =============================================================*/
        
        $ingreso = new formController();
        $ingreso -> ctrIngreso();


    ?>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>