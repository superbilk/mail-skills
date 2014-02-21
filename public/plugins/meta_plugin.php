<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Christian Schmidt
 * @link http://superbilk.com
 */
class Meta_Plugin {

	public function before_read_file_meta(&$headers)
	{
		$headers['course'] = 'Course';
    $headers['subtitle'] = 'Subtitle';
    $headers['description'] = 'Description';
	}

}
