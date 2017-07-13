 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Add new customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body> 

<div class="container">
  <?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'Name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($cus) ? $cus->name : ''),
                 array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
  
        <div class="form-group">
			<?php echo Form::label('Birthday', 'Birthday', array('class'=>'control-label')); ?>

				<?php echo Form::input('birthday', Input::post('birthday', isset($cus) ? $cus->birthday : ''),
                 array('class' => 'col-md-4 form-control', 'placeholder'=>'YYYY-MM-DD' )); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'Address', array('class'=>'control-label')); ?>
				<?php echo Form::input('address', Input::post('address', isset($cus) ? $cus->address : ''),
                 array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>
		</div>

		<div class="action">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		
            </div>
	</fieldset>
<?php echo Form::close(); ?>
</div>

 </body>
</html> 


