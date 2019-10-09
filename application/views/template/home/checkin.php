    <div class="container">
        <h3>LOBBY</h3>

<div class="alert alert-info" role="alert">
  <h4>NOTA</h4>Asegurate de elegir al cliente correcto!
</div>

    <form action="<?php echo site_url("user/Docheckin"); ?>" method="post" >
<div class="form-group">
     <div class="form-line">
                <label for="name">No. habitacion</label>
				<input id=search type="text" name="search" class="form-control">
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