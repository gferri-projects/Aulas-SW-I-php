<?php
// $a++ => $a = $a + 1 
// $a-- => $a = $a - 1 
echo "<h3>Pré-incremento</h3>";
$a = 5;
echo "Deve ser 5: " . ++$a. "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";
?>

<?php
echo "<h3>Pós-incremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a++ . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";
?>

<?php
echo "<h3>Pós-decremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a-- . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";
?>

<?php
echo "<h3>Pré-decremento</h3>";
$a = 5;
echo "Deve ser 5: " . --$a . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";
?>