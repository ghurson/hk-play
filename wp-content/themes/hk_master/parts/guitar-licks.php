<?php $songs = get_field("songs", 25); ?>

<article>

    <?php foreach ($songs as $song): ?>

        <h4><?php print $song['title'] ?></h4>

        <?php
        print wp_audio_shortcode([
            'src' => $song['song']['url'],
        ])
        ?>

        <br>

    <?php endforeach; ?>

</article>
