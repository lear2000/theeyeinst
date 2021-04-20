<section class="blogbar">
	<div class="fake">

	<div class="catselect">
		<span class="fselect catsel">Categories</span>
		<div class="fscats catcat">
		<?php $categories = get_categories();
				foreach($categories as $category) {
   				echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				} ?>
		 </div>
	</div>

		<div class="catselect arcsel">
			<span class="fselect">Archives</span>
			<ul class="fscats arcats">
				<?php wp_get_archives( array( 'type' => 'yearly', 'limit' => 12 ) ); ?>
			 </ul>
		</div>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text">Search Articles</span>
        <input type="search" class="search-field"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

</div>
</section>