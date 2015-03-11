<div class="span4"></div>
<div class="span8">

    <?php echo Form::open(NULL, array('class'=> 'form-horizontal')); ?>
        <div class="control-group">
            <b><?php echo __('Registration'); ?></b>
        </div>
        <div class="control-group <?php if(isset($errors['username'])) echo 'error'; ?>">
            <?php echo Form::input('username', isset($post['username'])? $post['username'] : null, array('id' => 'inputLogin', 'data-cip-id' =>'inputLogin', 'placeholder' => __('Login'), 'autocomplete' => 'off')) ?>
            <?php if(isset($errors['username'])){ ?>
            <span class="help-inline"><?php echo $errors['username']; ?></span>
            <?php } ?>
        </div>
        <div class="control-group <?php if(isset($errors['password'])) echo 'error'; ?>">
            <?php echo Form::input('password', null, array('id' => 'inputPassword', 'data-cip-id' =>'inputPassword', 'placeholder' => __('Password'), 'type' => 'password')) ?>
            <?php if(isset($errors['password'])){ ?>
                <span class="help-inline"><?php echo $errors['password']; ?></span>
            <?php } ?>
        </div>
        <div class="control-group <?php if(isset($errors['password_confirm'])) echo 'error'; ?>">
            <?php echo Form::input('password_confirm', null, array('id' => 'inputPassword2', 'data-cip-id' =>'inputPassword2', 'placeholder' => __('Password repeat'), 'type' => 'password')) ?>
            <?php if(isset($errors['password_confirm'])){ ?>
                <span class="help-inline"><?php echo $errors['password_confirm']; ?></span>
            <?php } ?>
        </div>
        <div class="control-group">
            <button type="submit" class="btn btn-primary"><?php echo __('Submit'); ?></button>
        </div>
    <?php echo Form::close(); ?>
</div>