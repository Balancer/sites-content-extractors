<?php

namespace B2\Web\Extract;

class Parser extends \B2\Obj
{
	function register()
	{
		return [
			'https?://(www\.)?ria\.ru/\w+/(\d{8})/(\d+)\.html' => RiaRu::class,
		];
	}

	function parse($url, $html = NULL)
	{
		if($html)
			$dom = \blib_dom::from_html($html);
		else
			$dom = \blib_dom::from_url($url);

		foreach($this->register() as $url_pattern => $class_name)
		{
			$url_pattern = str_replace('/', '\\/', $url_pattern);

			if(preg_match("/^$url_pattern$/", $url, $m))
			{
				$extractor = new $class_name(NULL);
				$extractor->set('dom', $dom);
				return $extractor->extract();
			}
		}
	}
}
