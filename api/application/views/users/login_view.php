<?php if ($this->session->userdata('logged_in')): ?>

<h2>Logout</h2>

<?php echo form_open('users/logout'); ?>

<?php if ($this->session->userdata('username')): ?>

<?php echo "You are logged in as " . $this->session->userdata('username');?>

<?php endif; ?>

<?php 

    echo form_submit([
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'logout'
    ]);
?>

<?php form_close(); ?>

<?php else: ?>


<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php if ($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">

    <?php echo form_label('Username'); ?>
    <?php echo form_input([
        'class' => 'form-control',
        'name' => 'username',
        'placeholder' => 'Enter Username'
    ]); ?>

</div>

<div class="form-group">

    <?php echo form_label('Password'); ?>
    <?php echo form_password([
        'class' => 'form-control',
        'name' => 'password',
        'placeholder' => 'Enter Password'
    ]); ?>

</div>

<div class="form-group">

    <?php echo form_label('Confirm Password'); ?>
    <?php echo form_password([
        'class' => 'form-control',
        'name' => 'confirm_password',
        'placeholder' => 'Enter Confirm Password'
    ]); ?>

</div>

<div class="form-group">

    <?php echo form_submit([
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Login',
    ]); ?>

</div>

<?php echo form_close(); ?>

<?php endif; ?>