<?php
// Shows Post Category Parent or First Tag (Needs Work)
class singleCategory {
	function singleCategory() {

		$categories = get_the_category();

		foreach($categories as $category) {
		   echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . "  " .'</a></div>'  . " ";
		}
	}
}