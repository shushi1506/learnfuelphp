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
<?php } ?>
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
						<button type="button" class="btn btn-info">View</button>
						<button type="button" class="btn btn-warning">Edit</button>
						<button type="button" class="btn btn-success">Delete</button>
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


