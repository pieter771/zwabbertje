<div class="page-header">
	<h1><?=$title;?></h1>
</div>

<p><?=$welcomeMessage;?></p>

<a class="btn btn-md btn-success" href="<?=DIR;?>subpage">
	<?php echo Language::show('openSubPage', 'Welcome'); ?>
</a>

<p><a href='<?php echo DIR;?>logout'>Logout</a>
<p><a href='<?php echo DIR;?>login'>Login</a>
