<div class="span4"></div>
<div class="span3">
    <?php if(isset($errors['login_error'])): ?>
        <div class="alert alert-error">
            <?php echo $errors['login_error']; ?>
        </div>
    <?php endif;?>

    <?php echo Form::open(NULL, array('class'=> 'form-horizontal')); ?>
        <div class="control-group">
            <b><?php echo __('Auth'); ?></b>
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
        <div class="control-group">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"> <?php echo __('Remember me'); ?>
            </label>
            <button type="submit" class="btn btn-primary"><?php echo __('Enter'); ?></button>
        </div>
    <?php echo Form::close(); ?>
</div>