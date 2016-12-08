<?php

namespace B2\Web\Extract;

class Extractor extends \B2\Obj
{
	function extract()
	{
		$xqueries = $this->xqueries();
		$title = $this->dom()->query($xqueries['title']);
		$content = $this->dom()->query($xqueries['content']);
		$image = $this->dom()->query($xqueries['image']);

		dump($title->text(), $content->text(), $image->attr('src'));
	}
}
