<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/components/topnav.php'; ?>


<div class="post-container">
    <center><h2>Create a post</h2></center>
    <form action="<?php echo URLROOT?>/Posts/Create" method="post">
        <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $data['title']?>">
        <span class="form-invalid"><?php echo $data['title_err']?></span>
        <br>
        <textarea name="body" id="body" cols="70" rows="10" placeholder="Body" value="<?php echo $data['body']?>"></textarea>
        <span class="form-invalid"><?php echo $data['body_err']?></span>
        <br>
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>