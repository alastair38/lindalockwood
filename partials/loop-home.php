
<div class="<?php echo get_cat_name($category_id);?> large-2 medium-6 small-6 columns">
    <div class="cat-details">
    <h4>

    <!-- Print a link to this category -->
    <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo get_cat_name($category_id);?>"</a> 
    </h4>
    <?php echo category_description($category_id); ?>
    </div>
</div>