<?php

/**
 * Pico plugin set front-page content to specific page
 *
 * @author Christian Schmidt
 * @link http://superbilk.com
 */

class Front_Page_Plugin {

	public function after_load_content(&$file, &$content)
	{
		global $config;

		if (!empty($config['front_page'])) {

			$file = CONTENT_DIR . ltrim($config['front_page'],'/');
			// Get the file and content
			if(is_dir($file)) {
				$file = $file .'/index'. CONTENT_EXT;
			}
			else {
				$file = $file . CONTENT_EXT;
			}

			if(file_exists($file)) {
				$content = file_get_contents($file);
			}
		}
	}
}
