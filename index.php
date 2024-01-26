<?php
function tong($a, $b){
     return $a + $b;
}

$m = 9;
$n = 6;
$t = tong($m, $n);
echo "Tong: $t"; 
?>
<?php
echo "<br>";
function hello($message){
    echo 'welcome ' . $message;
}
hello('PHP');
?>
<?php
echo "<br>";
function setName($name = 'noname') {
echo $name;
}
setName('PHP');
echo '<br>';
setName();
?>
<?php
echo "<br>";
function setValue($a) { $a = 10;
}
$b = 5;
setValue($b);
echo $b;
?>