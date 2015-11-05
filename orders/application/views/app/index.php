<h1> You're In!!!</h1>


<?php foreach ($orders as $key): ?>
	<p><?php echo $key->customer_order; ?></p>
<?php endforeach; ?>
<a href="<?php echo base_url();?>dashboard/logout">Log Out</a>