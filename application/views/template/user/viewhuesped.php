<div class="row" style="margin-top: 40px;">
<div class='container'>
<h3>LISTA DE HUESPEDES</h3>
<hr>

<br>
<br>
  		<table class="table table-hover" id="TableResult" width="100%" cellspacing="2">
        <thead>
        <tr class="bg-primary">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>NIT</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
    
        </tr>
        </thead>

      <tbody>
            <?php foreach ($huespedes as $value): ?>
				<tr>
					<td><?php echo $value['nombre']; ?></td>
					<td><?php echo $value['apellido']; ?></td>
					<td><?php echo $value['nit']; ?></td>
					<td><?php echo $value['telefono']; ?></td>
					<td>+</td>
				</tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>
</div>