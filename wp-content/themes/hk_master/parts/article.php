<?php
/**
 * ARTICLE PART (NO COMMENTS)
 *
 * This part can be used IN THE LOOP to output a single article (sans comments).
 */
?>
<article id="article-<?php the_ID() ?>" class="<?php echo implode(get_post_class(), ' ') ?>">

    <h1><?php the_title() ?></h1>

    <?php if (get_post_type() == 'post'): ?>
        <h5>Posted on <?php print the_time("l, F jS") ?></h5>
    <?php endif ?>

    <?php the_post_thumbnail() ?>

    <div>
        <?php the_content() ?>
    </div>

</article>