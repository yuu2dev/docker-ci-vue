<h2>Register</h2>

<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/register', $attributes); ?>

    <div class="form-group">

        <?php echo form_label('First Name'); ?>
        <?php echo form_input([
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter First Name'
        ]); ?>

    </div>

    <div class="form-group">

        <?php echo form_label('Last Name'); ?>
        <?php echo form_input([
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Enter Last Name'
        ]); ?>

    </div>

    <div class="form-group">

        <?php echo form_label('Email'); ?>
        <?php echo form_input([
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Enter Your Email'
        ]); ?>

    </div>

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
            'value' => 'Register',
        ]); ?>

    </div>

<?php echo form_close(); ?>