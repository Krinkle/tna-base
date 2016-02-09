<?php
// This gets home and parent page IDs
$parent_id = $post->post_parent;
$home_id = get_option('page_on_front');
// This gets the link to the parent page, based on the parent page ID
$parent_page_id = ($parent_id == 0 ? get_option('page_on_front') : $parent_id);
?>

<aside id="sidebar" class="col-xs-12 col-sm-4 col-md-4" role="complementary">
	<div class="sidebar-header">
		<h2>
			<a name="inThisSection" href="<?php echo make_path_relative( get_permalink($parent_page_id) ); ?>">
				Also in <?php echo get_the_title($parent_page_id);?>
			</a>
		</h2>
	</div>
	<div class="sidebar-nav clearfix">
		<ul class="sibling">
			<?php
			// This uses wp_list_pages to get the list of siblings of the current page. However we're actually
			// showing the children of the parent page. We're also excluding the current page ID ($post->ID)
			// so as not to duplicate it in the navigation and sorting the links by their menu order, as set
			// manually on the WP edit page.
			// We're using depth=1 to ensure we only get the children of the parent page, not grandchildren
			// See http://codex.wordpress.org/Function_Reference/wp_list_pages for a full list of parameters
			echo make_path_relative( wp_list_pages("echo=0&title_li=&child_of=$parent_id&sort_column=menu_order&depth=1&exclude=$post->ID,$home_id") );
			?>
		</ul>
	</div>
</aside>