<?php
$fruit = array('banane','pomme','poire','oignon');
print_r($fruit);
echo "<br>";
foreach ($fruit as $v) {
    echo "$v <br>";
}
echo "<br>";
$tableau_colle = implode(',',$fruit);
echo $tableau_colle;
?>