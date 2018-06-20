<?php get_header(); ?>

    <div class="row">

        <div class="col-md-8">
            <main role="main">
                <section>
                    <h1><?php _e( 'Latest Posts', 'brbtheme' ); ?></h1>
                    <?php get_template_part('loop'); ?>
                    <?php get_template_part('pagination'); ?>
                </section>
            </main>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php get_footer(); ?>
