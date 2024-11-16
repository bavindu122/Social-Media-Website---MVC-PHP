<?php require_once APPROOT . '/views/inc/header.php'; ?>
<!-- top navigation -->
<?php require_once APPROOT . '/views/inc/components/topnav.php'; ?>

<!-- index page -->
<div class="index-container">
    <div class="index-header">
        <h1>Welcome <?php echo $_SESSION['user_name']?></h1>
        <p>Find the best deals on our website</p>
    </div>
    <div class="index-content">
        <div class="index-content-left">
            <h2>Sign Up</h2>
            <p>Sign up to our website to get the best deals</p>
            <a href="<?php echo URLROOT; ?>/Users/Register" class="btn btn-primary">Sign Up</a>
        </div>
        <div class="index-content-right">
            <h2>Login</h2>
            <p>Login to our website to get the best deals</p>
            <a href="<?php echo URLROOT; ?>/Users/Login" class="btn btn-primary">Login</a>
        </div>
    </div>
</div>
<!-- end of index page -->
<?php require_once APPROOT . '/views/inc/footer.php'; ?>