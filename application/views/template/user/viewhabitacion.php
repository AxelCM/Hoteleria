<div class="row" style="margin-top: 40px;">
<div class='container'>
<h3>LISTA DE HABITACIONES</h3>
<hr>

<br>
<br>
  		<table class="table table-hover" id="TableResult" width="100%" cellspacing="2">

        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>NO. DE HABITACION</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
    
        </tr>
        </thead>

      <tbody>
            <?php foreach ($habitacion as $value): ?>
				<tr>
					<td><?php echo $value['idhabitacion']; ?></td>
					<td><?php echo $value['no_habitacion']; ?></td>
					<td><?php
                            if($value['estado'] == 0) {
                                echo 'DISPONIBLE';
                            }else {
                                echo 'OCUPADA';
                            };
                        ?>
					</td>
					<td></td>
				</tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</div>
</div>