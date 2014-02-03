<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Gilbert Pellegrom
 * @link http://pico.dev7studios.com
 * @license http://opensource.org/licenses/MIT
 */
class Front_Page_Plugin {

	public function after_load_content(&$file, &$content)
	{
		global $config;

		if (!empty($config['front_page'])) {
			// Get the file and content
			$file = CONTENT_DIR . ltrim($config['front_page'],'/') . CONTENT_EXT;
			if(file_exists($file)) {
				$content = file_get_contents($file);
			}
		}
	}
}
