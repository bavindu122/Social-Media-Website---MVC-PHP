<?php require_once APPROOT.'/views/inc/header.php'; ?>

    <h1>Users</h1>

    <?php foreach($data['users'] as $user) : ?>
        <p><?php echo $user->name; ?>-<?php echo $user->email ?></p>
    <?php endforeach; ?>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>