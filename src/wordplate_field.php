<?php
use Wordplate\Acf\Field;

if (!function_exists('acf_post_type_selector')) {
	/**
	 * Get an acf text field settings array.
	 *
	 * @param array $config
	 *
	 * @return \WordPlate\Acf\Field
	 */
	function acf_post_type_selector(array $config): Field
	{
		$config = array_merge($config, ['type' => 'post_type_selector']);
		return new Field($config, ['name']);
	}
}