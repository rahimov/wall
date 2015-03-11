<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL::base(); ?>media/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo URL::base(); ?>media/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL::base(); ?>media/js/wall.js"></script>
</head>
<body>

<div class="navbar">
    <div class="navbar-inner">
        <?php echo Request::current()->uri() != URL::base() ? HTML::anchor('', __('Sitesoft'), array('class'=>'brand')) : '<span class="brand">'.__('Sitesoft').'</span>'; ?>
        <ul class="nav">
            <li <?php echo Request::current()->uri() == URL::base() ? 'class="active"' : ''; ?>> <?php echo HTML::anchor('', __('Main')); ?></li>
            <?php if(!Auth::instance()->logged_in()): ?>
            <li <?php echo Request::current()->uri() == 'user/auth' ? 'class="active"' : ''; ?>> <?php echo HTML::anchor('user/login', __('Auth')); ?></li>
            <li <?php echo Request::current()->uri() == 'user/registration' ? 'class="active"' : ''; ?>> <?php echo HTML::anchor('user/registration', __('Registration')); ?></li>
            <?php endif; ?>
        </ul>

        <?php if(Auth::instance()->logged_in()): ?>
        <ul class="nav pull-right">
            <li><a><?php echo Auth::instance()->get_user()->username; ?></a></li>
            <li><?php echo HTML::anchor('user/logout', __('Exit')); ?></li>
        </ul>
        <?php endif; ?>
    </div>
</div>

<div class="row-fluid">
    <?php echo $content; ?>
</div>

</body>
</html>