<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Finder\Finder;
use Symfony\Component\CssSelector\CssSelectorConverter;

$finder = new Finder();
$finder->files()->in(__DIR__);

foreach ($finder as $file) {
	var_dump($file->getRealPath());

	var_dump($file->getRelativePath());

	var_dump($file->getRelativePathname());
}

$converter = new CssSelectorConverter();
var_dump($converter->toXPath('div.item > h4 > a'));