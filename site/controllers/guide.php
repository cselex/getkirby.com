<?php

use Kirby\Cms\Page;

return function (Page $page) {

	if ($page->text()->isEmpty() && $page->hasChildren()) {
		go($page->children()->first()->url());
	}

	return [
		'guide' => $page,
	];
};
