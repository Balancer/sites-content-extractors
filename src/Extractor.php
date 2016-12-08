<?php

namespace B2\Web\Extract;

class Extractor extends \B2\Obj
{
	function extract()
	{
		$xqueries = $this->xqueries();
		$title = $this->dom()->query($xqueries['title']);

		dump($title);
	}
}
