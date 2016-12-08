<?php

namespace B2\Web\Extract;

class RiaRu extends Extractor
{
	function xqueries()
	{
		return [
			'title' => '//h1',
//			'content' => '//*[@id="wrPage"]/div[3]/div[4]/div[3]/div[2]/div[4]/div/div[1]/div[1]/div/div/div[5]',
		];
	}
}
