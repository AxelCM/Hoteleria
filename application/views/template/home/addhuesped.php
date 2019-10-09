    <div class="container">
        <h3>Agregar una habitacion</h3>

<div class="alert alert-warning" role="alert">
  <h4>NOTA</h4>Agrega un Huesped especificando con sus datos y en que habitacion se hospedara
</div>

    <form action="<?php echo site_url("user/savehuesped"); ?>" method="post" style=" margin:  0 auto;">
<div class="form-group">
     <div class="form-line">
                <label for="name">Nombre</label>
				<input type="text" name="nombre" class="form-control">
            </div>


            <div class="form-group">
                <label for="name">Apellido</label>
                <input type="text" name="apellido"  class="form-control">
            </div>
            
            <div class="form-group">
                <label for="name">Nit</label>
                <input type="text" name="nit"  class="form-control">
            </div>
            
            <div class="form-group">
                <label for="name">Telefono</label>
                <input type="text" name="telefono"  class="form-control">
            </div>
            

            <br>
            <div class="form-group">

                <input type="submit" class="form-control btn btn-primary" value="Guardar">
            </div>
           
					
			<?php if(isset($message)){ //print error message
				echo $message;
			} ?>
				
        </div>


    </form>
	

</div>
<a href="<?php echo site_url("Home"); ?>" class="btn btn-primary">Back</a>