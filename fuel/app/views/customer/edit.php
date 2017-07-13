<h1>Edit customer </h1>


<?php echo render('customer/_form');?>

<?php echo Html::anchor('customer/view/'.$cus->id, 'View'); ?> |
<?php echo Html::anchor('customer','Back');?>