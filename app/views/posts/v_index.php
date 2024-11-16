<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/components/topnav.php'; ?>


<?php foreach($data['posts'] as $post): ?>
<div class="post-index-container">
    <div class="post-header">
        <div class="post-user-name"><?php echo $post->user_name ?></div>
        <div class="post-date"><?php echo $post->post_created_at ?></div>
    </div>
    <div class="post-body">
        <div class="post-title"><?php echo $post->post_title ?></div>
        <div class="post-content"><?php echo $post->post_body ?></div>
    </div>
    <div class="post-footer">
        <div class="post-like">Likes 0</div>
        <div class="post-dislike">Dislikes 0</div>
    </div>
</div>
<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
