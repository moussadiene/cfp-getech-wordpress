<?php global $post ?>

<?php tempo_get_template_part( 'templates/single/before', 'post' ); ?>

<article <?php post_class( 'tempo-article classic' ); ?>>

    <?php tempo_get_template_part( 'templates/single/prepend', 'post' ); ?>

    <?php if( !apply_filters( 'gardener_has_head', tempo_has_header(), $post ) ): ?>

        <?php tempo_get_template_part( 'templates/single/title' ); ?>

        <?php tempo_get_template_part( 'templates/article/meta/top' ); ?>

        <?php tempo_get_template_part( 'templates/single/meta/activity' ); ?>

        <?php tempo_get_template_part( 'templates/article/terms/categories' ); ?>

    <?php endif; ?>

    <?php tempo_get_template_part( 'templates/single/thumbnail', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/thumbnail/after', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/hentry/before', 'post' ); ?>

    <div class="tempo-hentry">

        <?php tempo_get_template_part( 'templates/single/hentry/prepend', 'post' ); ?>

        <?php the_content(); ?>

        <?php tempo_get_template_part( 'templates/single/hentry/append', 'post' ); ?>

        <div class="clearfix"></div>
    </div>

    <?php tempo_get_template_part( 'templates/single/hentry/after', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/pagination', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/terms/tags', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/author', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/comments/before', 'post' ); ?>

    <?php comments_template(); ?>

    <?php tempo_get_template_part( 'templates/single/comments/after', 'post' ); ?>

    <?php tempo_get_template_part( 'templates/single/append', 'post' ); ?>

    <div class="clearfix"></div>
</article>

<?php tempo_get_template_part( 'templates/single/after', 'post' ); ?>
