--TEST--
Sloppy comparison array_keys disabled
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--FILE--
<?php 
$qwe = array(rand(1,2), "qwe");
var_dump(array_keys($qwe, 0));
var_dump(array_keys($qwe, 0, 0));
var_dump(array_keys($qwe, 0, 1));
?>
--EXPECT--
array(1) {
  [0]=>
  int(1)
}
array(1) {
  [0]=>
  int(1)
}
array(0) {
}
