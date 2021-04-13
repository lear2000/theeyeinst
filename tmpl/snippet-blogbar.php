<section class="blogbar">
	<div class="fake">
	<?php //wp_dropdown_categories( 'hide_empty=0' ); ?>
	<select name="cat" id="cat" class="postform">
			<option class="level-0" value="1">Uncategorized</option>
	</select>
<!--
	<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
    <option value=""><?php //esc_attr( _e( 'Select Month', 'textdomain' ) ); ?></option>
    <?php //wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>
-->

	<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
	    <option value="">Select Month</option>
	    	<option value="http://firesweet.devsite/aform_master/2021/02/"> February 2021 &nbsp;(1)</option>
	</select>


<form role="search" method="get" class="search-form" action="http://firesweet.devsite/aform_master/">
	<label for="search-form-1">Search Articles</label>
	<input type="search" id="search-form-1" class="search-field" value="" name="s">
	<input type="submit" class="search-submit" value="Search">
</form>

<script>
  document.getElementById('cat').onchange = function(){
    // if value is category id
    if( this.value !== '-1' ){
      window.location='/?cat='+this.value
    }
  }
</script>
</div>
</section>