<!-- sidebar -->
<aside class="sidebar" role="complementary">
    
    <div class="sidebar-widget">
		<div id="main-menu" class="widget_menu">
            <h3>Main Menu</h3>
            <?php brbtheme_nav(); ?>
        </div>
    </div>

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
