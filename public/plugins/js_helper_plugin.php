<?php

/**
 * Helper for js in twig
 *
 * @author Christian Schmidt
 * @link http://superbilk.com
 */
class Js_Helper_Plugin {

	public function before_render(&$twig_vars, &$twig, &$template)
	{
		global $config;

		if (!empty($config['js_path'])) {
			$js_base_url = $twig_vars['theme_url'] . $config['js_path'] . "/";
		}
		else {
		  $js_base_url = $twig_vars['theme_url'] . "/";
		}

		$function = new Twig_SimpleFunction('js', function ($js_file) use ($twig_vars, $js_base_url) {
		  $js_url = $js_base_url . $js_file;
		  $html = '<script src="' . $js_url . '"></script>';
		  return $html;
		}, array('is_safe' => array('html')));

		$twig->addFunction($function);
	}

}
