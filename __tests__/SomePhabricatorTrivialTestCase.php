<?php

class SomePhabricatorTrivialTestCase extends PhabricatorTestCase {

  private $two;

  public function willRunOneTest($test_name) {
    // You can execute setup steps which will run before each test in this
    // method.
    $this->two = 2;
  }

  public function testAllIsRightWithTheWorld() {
    $this->assertEqual(4, $this->two + $this->two, '2 + 2 = 4');
  }

}
