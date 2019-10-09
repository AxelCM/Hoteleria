    <div class="container">
        <h3>Agregar una habitacion</h3>

<div class="alert alert-info" role="alert">
  <h4>NOTA</h4>Estas habitaciones seran utilizadas para crear las habitaciones de tu HOTEL
</div>

    <form action="<?php echo site_url("user/savehabitacion"); ?>" method="post" >
<div class="form-group">
     <div class="form-line">
                <label for="name">No. habitacion</label>
				<input type="text" name="no_habitacion" class="form-control">
            </div>
<br>
<br>
            <div class="form-group">

                <input type="submit" name="guardar" class="form-control btn btn-primary" value="Guardar">
            </div>
           
					
			<?php if(isset($message)){ //print error message
				echo $message;
			} ?>
				
        </div>


    </form>
	

</div>
<a href="<?php echo site_url("User/addhabitacion"); ?>" class="btn btn-primary">Back</a>