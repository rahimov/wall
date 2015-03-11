<div class="span2"></div>
<div id="posts_wall" class="span8">

    <?php if(Auth::instance()->logged_in()): ?>
        <?php echo Form::open(NULL, array('id'=>'form_wall', 'class'=> 'form-horizontal', 'style'=>'margin-bottom: 50px;')); ?>
            <?php if(isset($errors['empty_message'])): ?>
            <div class="alert alert-error">
                <?php echo $errors['empty_message']; ?>
            </div>
            <?php endif;?>

            <div class="control-group">
                <?php echo Form::textarea('text', isset($post['text'])? $post['text'] : null, array('style'=>'width: 100%; height: 50px;', 'id'=>'inputText', 'placeholder'=> __('You message...'), 'data-cip-id'=>'inputText')); ?>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary"><?php echo __('Send message'); ?></button>
            </div>
        <?php echo Form::close(); ?>
    <?php endif; ?>

    <?php foreach($messages as $message):?>
        <div class="well">
            <h5><?php echo $message->user->username;?> <span style="font-weight: normal;">(<?php echo date('H:i:s d.m.Y ',$message->publishedon);?>)</span>:</h5>
            <?php echo $message->text;?>
        </div>
    <?php endforeach;?>
</div>