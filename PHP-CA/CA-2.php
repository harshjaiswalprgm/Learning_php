<?php
$hops = 0;
$time = 0;
while ($hops < 5) {
    $time += 2;
    $hops++;
    echo "Hop $hops: Time = $time seconds\n";
    if ($hops == 5) {
        break;
    }
    echo "<br>";
}
echo "Total time taken: $time seconds\n"; 

?>

?>