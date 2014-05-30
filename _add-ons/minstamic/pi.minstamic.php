<?php
class Plugin_minstamic extends Plugin
{
	var $meta = array(
		'name' => 'Minstamic',
		'version' => '1.0.0',
		'author' => 'TJ Draper',
		'author_url' => 'http://buzzingpixel.com'
	);

	public function index()
	{
		// Get the content between the tags and run it through the template parser
		$content = Parse::template($this->content, array(), null, $this->context);

		// I don’t fully understand why, but the template parser with the above options will not parse partials.
		// But if we do this next thing only without the above parsing, then the {{ layout_content }} and possibly some other things won't get parsed.
		// This is probably a little inefficient, but it gets the job done and I have not seen a noticable slowdown
		$contentFullyParsed = Parse::template($content, array());

		// Get the minify library
		require_once('libraries/Minify/HTML.php');

		// Return the minified content
		return Minify_HTML::minify($contentFullyParsed);
	}
}