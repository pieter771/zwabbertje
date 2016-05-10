<?php 
use \helpers\form,
	\core\error; 
?>

<div class="page-header">
	<h1>Login</h1>
</div>



<?php echo Form::open(array('method' => 'post')); ?>
<table>
	<tr>
		<td>Username:</td> <td><?php echo Form::input(array('name' => 'username')); ?></td>
	</tr>
	<tr>
		<td>Password:</td> <td><?php echo Form::input(array('type' => 'password', 'name' => 'password')); ?></td>
	</tr>
	<tr>
		<td><?php echo Form::input(array('type' => 'submit', 'name' => 'submit', 'value' => 'Login')); ?></td>
	</tr>
</table>

<?php echo Form::close(); ?>
<?php echo Error::display($error); ?>