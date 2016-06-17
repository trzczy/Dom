<?php
namespace Trzczy\Dom;
class DocumentTest extends \PHPUnit_Framework_TestCase {
	public function testInheritance() {
		$document = new Document();

		$this->assertInstanceOf("\Trzczy\Dom\Node", $document);
	}
}