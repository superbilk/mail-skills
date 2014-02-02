<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Gilbert Pellegrom
 * @link http://pico.dev7studios.com
 * @license http://opensource.org/licenses/MIT
 */
class Meta_Subtitle_Plugin {

	public function before_read_file_meta(&$headers)
	{
		$headers['subtitle'] = 'Subtitle';
	}

}
