<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php if(Session::get_flash('success')){ ?>
	<div class="alert alert-success"> <?php echo Session::get_flash('success') ?> </div>
<?php }  ?>
<?php if(Session::get_flash('error')){ ?>
	<div class="alert alert-danger"> <?php echo Session::get_flash('error') ?> </div>
<?php }  ?>
<h2>Listing <span class='muted'>Customer</span></h2>

<div class="container">       
  <br>
   <?php if ($cus): ?>
<table class="table table-striped">
	<thead>
		<tr class="danger">
			<th>Id</th>
			<th>Name</th>
			<th>Birthday</th>
			<th>Address</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($cus as $item): ?>		<tr class="success">
			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->birthday; ?></td>
			<td><?php echo $item->address; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
					<?php echo Html::anchor('customer/view/'.$item ->id,'View',array('class' =>'btn btn-info' )) ?>
					<?php echo Html::anchor('customer/edit/'.$item ->id,'Edit',array('class'=>'btn btn-warning'))?>
					<?php echo Html::anchor('customer/delete/'.$item ->id,'Delete',array('class'=>'btn btn-danger'))?>
                    </div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Customer.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('customer/create', 'Add new customer', array('class' => 'btn btn-success','id' =>'btncreate')); ?>

</p>   
</div>

</body>
</html>


