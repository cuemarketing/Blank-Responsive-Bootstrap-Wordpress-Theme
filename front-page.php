<?php get_header(); ?>
        
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

            <div id="accordion">

                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Native PHP
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            
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
                            
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-1">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Native PHP
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            
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
                            
                        </div>
                    </div>
                </div>
                
            </main>
        </div>

    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>