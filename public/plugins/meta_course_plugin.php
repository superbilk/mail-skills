<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Christian Schmidt
 * @link http://superbilk.com
 */
class Meta_Course_Plugin {

	public function before_read_file_meta(&$headers)
	{
		$headers['course'] = 'Course';
	}

}
