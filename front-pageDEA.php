<?php get_header(); ?>

    <div class="container page-content">
        
        <div class="jumbotron">
            <h1 class="display-4">BRB Theme</h1>
            <p class="lead">Welcome to BRB WP Theme, this front page contains different elements that can be used with this theme and with Bootstrap.</p>
            <hr class="my-4">
            <p>Please visit our Github page for issues and documentation.</p>
            <a class="btn btn-primary btn-lg" href="https://github.com/cuemarketing/Blank-Responsive-Bootstrap-Wordpress-Theme" role="button">Go to Github</a>
        </div>
        
        <div class="row">
            
            <div class="col-md-8">
                <main role="main">
                    <section>
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-6">Native PHP</h1>
                                <p class="lead">Bootstrap has full documentation on the different components you can use. Here we will show you different funtions we can use with this theme.</p>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h4>Display the menu</h4>
                        <div class="alert alert-primary" role="alert">
                            &lt;?php html5blank_nav(); ?&gt;
                        </div>
                    </section>
                    
                    <section>
                        <h4>Display specific menu</h4>
                        <div class="alert alert-primary" role="alert">
                            &lt;?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?&gt;
                        </div>
                    </section>
                    
                    <section>
                        <h4>Display sidebar</h4>
                        <div class="alert alert-primary" role="alert">
                            &lt;?php get_sidebar(); ?&gt;
                        </div>
                    </section>
                    
                    <section>
                        <h4>Display specific widget</h4>
                        <div class="alert alert-primary" role="alert">
                            &lt;?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?&gt;
                        </div>
                    </section>
                    
                    <section>
                        <h4>Display template part</h4>
                        <div class="alert alert-primary" role="alert">
                            &lt;?php get_template_part('searchform'); ?&gt;
                        </div>
                    </section>
                    
                </main>
            </div>
            
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
            
        </div>

    </div>

<?php get_footer(); ?>