<?php $videos = get_field("video", 23); ?>
<article class="hk_videos">
    <div class="video-slider owl-carousel">
        <?php foreach ($videos as $c => $video): ?>
            <?php $yt_id = GH\Video::get_ID($video['video']) ?>
            <div class="video" data-vid_id="<?php print $yt_id ?>"
                 data-index="<?php print $c ?>">
                <h3><?php print $video['title'] ?></h3>

                <div class="video-container">
                    <div id="vid_<?php print $yt_id ?>" class="vid_player"></div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <div class="video-bottom-slider owl-carousel">
        <?php foreach ($videos as $c => $video): ?>
            <?php $yt_id = GH\Video::get_ID($video['video']) ?>
            <img src="http://img.youtube.com/vi/<?php print $yt_id ?>/0.jpg" class="bottom_poster"
                 data-index="<?php print $c ?>" alt="">
        <?php endforeach ?>
    </div>
</article>
