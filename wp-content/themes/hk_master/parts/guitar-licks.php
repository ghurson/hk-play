<?php $songs = get_field("songs", 25); ?>

<article class="small-up-1 medium-up-2 clearfix">

    <?php foreach ($songs as $song): ?>

        <div class="column">

            <h4><?php print $song['title'] ?></h4>

            <?php
            print wp_audio_shortcode([
                'src' => $song['song']['url'],
            ])
            ?>
            <br>

        </div>

    <?php endforeach; ?>

</article>
