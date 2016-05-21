<div class="home-blog show-for-medium">

    <h2 class="title">Recent Posts</h2>

    <div class="posts owl-carousel">
        <?php foreach (GH\Blog::get_posts() as $post): ?>
            <div class="post item">

                <h3 class="post-title">
                    <a href="<?php print get_permalink($post->ID) ?>">
                        <?php print $post->post_title ?><br/>
                        <small><?php print get_the_time('l, F jS', $post->ID) ?></small>
                    </a>
                </h3>

                <p><?php print wp_trim_words($post->post_content, 20, '') ?></p>

                <a href="<?php print get_permalink($post->ID) ?>" class="readmore">Read More</a>

            </div>

        <?php endforeach; ?>
    </div>

</div>