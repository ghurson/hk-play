<?php
/**
 * ARTICLE PART (NO COMMENTS)
 *
 * This part can be used IN THE LOOP to output a single article (sans comments).
 */
?>

<?php $post = get_post(get_the_ID()) ?>
<article id="article-<?php the_ID() ?>" class="<?php echo implode(get_post_class(), ' ') ?> column">

    <div class="excerpt-content">

        <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
        <h5>Posted on <?php print the_time("l, F jS") ?></h5>

        <?php the_post_thumbnail() ?>

        <div class="content">
            <?php print apply_filters("the_content", wp_trim_words($post->post_content), 40, '') ?>
            <p class='readmore'><a href="<?php print get_the_permalink(get_the_ID()) ?>">Read more &raquo;</a></p>
        </div>
    </div>

</article>