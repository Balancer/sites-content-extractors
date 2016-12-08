<?php

namespace B2\Web\Extract;

class RiaRu extends Extractor
{
	function xqueries()
	{
		return [
			'title' => '//h1[@class="b-article__title"]',
			'content' => '//div[contains(@class, "b-article__body")]',
			'image' => '//div[contains(@class, "b-article__announce-img")]/img',
		];
	}
}
