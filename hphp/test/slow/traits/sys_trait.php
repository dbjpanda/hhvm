<?php
class X {
  use LazyIterable;
  public function getIterator() { yield null; }
}
function test() {
  $x = new X;
  var_dump($x->lazy());
}
test();
