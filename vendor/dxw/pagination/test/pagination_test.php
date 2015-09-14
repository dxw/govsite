<?php

class PaginationTest extends PHPUnit_Framework_TestCase {

  // Helpers /////////////////////////////////////////////////////////////////

  function getText($a, $b, $c, $d) {
    $a = (new \Dxw\Pagination($a, $b, $c, $d, function ($n) { return "http://abc/page/$n/"; }))->getItems();
    return array_map(function ($b) use ($a) { return $b['text']; }, $a);
  }

  function getLink($a, $b, $c, $d) {
    // function __construct($current, $max, $context, $extraContext)
    $a = (new \Dxw\Pagination($a, $b, $c, $d, function ($n) { return "http://abc/page/$n/"; }))->getItems();
    return array_map(function ($b) use ($a) { return $b['link']; }, $a);
  }

  function getClasses($item) {
    $a = (new \Dxw\Pagination(null, null, null, null, function ($n) { return "http://abc/page/$n/"; }));
    $classes = $a->getClasses($item);
    sort($classes);
    return $classes;
  }

  // Test numbers ////////////////////////////////////////////////////////////

  function testBasic() {
    $this->assertSame(['«', '1', '»'], $this->getText(1, 1, 0, 0));
    $this->assertSame(['«', '…', '2', '»'], $this->getText(2, 2, 0, 0));
    $this->assertSame(['«', '…', '3', '»'], $this->getText(3, 3, 0, 0));
    $this->assertSame(['«', '…', '3', '…', '»'], $this->getText(3, 4, 0, 0));
    $this->assertSame(['«', '…', '42', '»'], $this->getText(42, 42, 0, 0));
  }

  function testContext() {
    $this->assertSame(['«', '1', '»'], $this->getText(1, 1, 1, 0));
    $this->assertSame(['«', '1', '2', '3', '»'], $this->getText(1, 3, 1, 0));
    $this->assertSame(['«', '1', '2', '3', '…', '»'], $this->getText(1, 4, 1, 0));

    $this->assertSame(['«', '1', '2', '3', '…', '»'], $this->getText(2, 4, 1, 0));
    $this->assertSame(['«', '…', '2', '3', '4', '»'], $this->getText(3, 4, 1, 0));
    $this->assertSame(['«', '…', '2', '3', '4', '…', '»'], $this->getText(3, 5, 1, 0));

    $this->assertSame(['«', '…', '40', '41', '42', '»'], $this->getText(41, 42, 1, 0));
    $this->assertSame(['«', '…', '40', '41', '42', '»'], $this->getText(42, 42, 1, 0));
    $this->assertSame(['«', '…', '38', '39', '40', '41', '42', '»'], $this->getText(42, 42, 2, 0));
    $this->assertSame(['«', '…', '38', '39', '40', '41', '42', '»'], $this->getText(41, 42, 2, 0));
    $this->assertSame(['«', '…', '38', '39', '40', '41', '42', '»'], $this->getText(40, 42, 2, 0));
    $this->assertSame(['«', '…', '37', '38', '39', '40', '41', '…', '»'], $this->getText(39, 42, 2, 0));
  }

  function testExtraContext() {
    $this->assertSame(['«', '1', '2', '3', '…', '6', '»'], $this->getText(1, 6, 1, 1));
    $this->assertSame(['«', '1', '2', '3', '…', '5', '6', '»'], $this->getText(1, 6, 1, 2));
    $this->assertSame(['«', '1', '2', '3', '4', '»'], $this->getText(1, 4, 1, 1));

    $this->assertSame(['«', '1', '…', '41', '42', '»'], $this->getText(41, 42, 0, 1));
    $this->assertSame(['«', '1', '…', '42', '»'], $this->getText(42, 42, 0, 1));

    $this->assertSame(['«', '1', '…', '38', '39', '40', '41', '42', '»'], $this->getText(42, 42, 2, 1));
    $this->assertSame(['«', '1', '…', '38', '39', '40', '41', '42', '»'], $this->getText(41, 42, 2, 1));
    $this->assertSame(['«', '1', '…', '38', '39', '40', '41', '42', '»'], $this->getText(40, 42, 2, 1));
    $this->assertSame(['«', '1', '…', '37', '38', '39', '40', '41', '42', '»'], $this->getText(39, 42, 2, 1));
    $this->assertSame(['«', '1', '…', '36', '37', '38', '39', '40', '…', '42', '»'], $this->getText(38, 42, 2, 1));
  }

  // Test other things ///////////////////////////////////////////////////////

  function testLinks() {
    $this->assertSame(['«', '1', '»'], $this->getText(1, 1, 0, 0));
    $this->assertSame([ 1 ,  1 ,  1 ], $this->getLink(1, 1, 0, 0));

    $this->assertSame(['«', '…', '42', '»'], $this->getText(42, 42, 0, 0));
    $this->assertSame([41 ,null,  42 , 42 ], $this->getLink(42, 42, 0, 0));

    $this->assertSame(['«', '1', '2', '3', '»'], $this->getText(1, 3, 1, 0));
    $this->assertSame([ 1 ,  1 ,  2 ,  3 ,  2 ], $this->getLink(1, 3, 1, 0));

    $this->assertSame(['«', '…', '37', '38', '39', '40', '41', '…', '»'], $this->getText(39, 42, 2, 0));
    $this->assertSame([38 ,null,  37 ,  38 ,  39 ,  40 ,  41 ,null, 40 ], $this->getLink(39, 42, 2, 0));
  }

  function testClasses() {
    $this->assertSame([], $this->getClasses([
        'arrow' => false,
        'current' => false,
        'disabled' => false,
    ]));

    // Bootstrap

    $this->assertContains('active', $this->getClasses([
        'arrow' => false,
        'current' => true,
        'disabled' => false,
    ]));

    $this->assertContains('disabled', $this->getClasses([
        'arrow' => false,
        'current' => false,
        'disabled' => true,
    ]));

    // Foundation

    $this->assertContains('arrow', $this->getClasses([
        'arrow' => true,
        'current' => false,
        'disabled' => false,
    ]));

    $this->assertContains('current', $this->getClasses([
        'arrow' => false,
        'current' => true,
        'disabled' => false,
    ]));

    $this->assertContains('unavailable', $this->getClasses([
        'arrow' => false,
        'current' => false,
        'disabled' => true,
    ]));
  }

  function testEverything() {
    $a = (new \Dxw\Pagination(38, 42, 1, 1, function ($n) { return "http://abc/page/$n/"; }))->getItems();
    $this->assertSame([
      [
        'link' => 37,
        'text' => '«',
        'arrow' => true,
        'current' => false,
        'disabled' => false,
      ],
      [
        'link' => 1,
        'text' => '1',
        'arrow' => false,
        'current' => false,
        'disabled' => false,
      ],
      [
        'link' => null,
        'text' => '…',
        'arrow' => false,
        'current' => false,
        'disabled' => true,
      ],
      [
        'link' => 37,
        'text' => '37',
        'arrow' => false,
        'current' => false,
        'disabled' => false,
      ],
      [
        'link' => 38,
        'text' => '38',
        'arrow' => false,
        'current' => true,
        'disabled' => false,
      ],
      [
        'link' => 39,
        'text' => '39',
        'arrow' => false,
        'current' => false,
        'disabled' => false,
      ],
      [
        'link' => null,
        'text' => '…',
        'arrow' => false,
        'current' => false,
        'disabled' => true,
      ],
      [
        'link' => 42,
        'text' => '42',
        'arrow' => false,
        'current' => false,
        'disabled' => false,
      ],
      [
        'link' => 39,
        'text' => '»',
        'arrow' => true,
        'current' => false,
        'disabled' => false,
      ],
    ], $a);
  }

  function testRender() {
    $a = (new \Dxw\Pagination(1, 1, 1, 0, function ($n) { return "http://abc/page/$n/"; }))->render();
    $this->assertContains('class="pagination"', $a);
  }
}
