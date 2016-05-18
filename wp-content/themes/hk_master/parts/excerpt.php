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

        <?php the_post_thumbnail() ?>

        <div class="content">
            <?php print wp_trim_words($post->post_content) ?>
        </div>
    </div>

</article>