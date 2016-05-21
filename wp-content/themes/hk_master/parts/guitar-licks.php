<?php $songs = get_field("songs", 25); ?>

<?php foreach ($songs as $song): ?>

    <h2><?php print $song['title'] ?></h2>

    <?php
    print wp_audio_shortcode([
        'src' => $song['song']['url'],
    ])
    ?>

<?php endforeach; ?>
