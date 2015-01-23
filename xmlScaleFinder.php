<?php
$xml=simplexml_load_file("Bach BWV847.xml") or die("Error: Cannot create object");
$a=$xml->part->measure->attributes->key->fifths;

$b=array("-4"=>"Ab","-3"=>"Eb","-2"=>"Bb","-1"=>"F","0"=>"C","1"=>"G","2"=>"D","3"=>"A","4"=>"E","5"=>"B");
echo"The Scale of the song is ".$b["$a"]." major";
?>
