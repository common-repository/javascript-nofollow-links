<?php
/*
Plugin Name: Javascript Nofollow Links
Plugin URI: http://masterleep.com/projects/javascript-nofollow-links
Description: Changes comment links to use javascript rather than anchor tags.
Version: 1.1
Author: Bill Lipa
Author URI: http://masterleep.com/
*/


	function leep_jnl_author_link($str) {
	  if (preg_match("/<a href='([^']*)'[^>]*>([^<]*)<\/a>/", $str, $groups)) {
	    $link = preg_replace(array("/http:\/\//"), array(), $groups[1]);
	    return "<b class='url' data-loc='" . $link . "'>" . $groups[2] . "</b>";
	  } else {
	    return $str;
	  }
	}

	function leep_jnl_thesis_avatar($str) {
	  return preg_replace(array("/<a.*?>/", "/<\/a>/"), array(), $str);
	}

	function leep_jnl_head() {
	  $folder = get_bloginfo('wpurl') . '/wp-content/plugins/' . dirname(plugin_basename(__FILE__));
	?>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
	  <script type="text/javascript" src="<?php echo $folder ?>/jnl.js"></script>
  <?php }
	
	
	add_filter('get_comment_author_link', 'leep_jnl_author_link', 10, 1);
	add_filter('thesis_avatar', 'leep_jnl_thesis_avatar', 10, 1);
  add_action('wp_head', 'leep_jnl_head');
  
?>
