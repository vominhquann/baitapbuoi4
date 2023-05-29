<?php
echo "c1<br>";
$year = date('Y');

if ($year % 2 == 0) {
    echo "Năm " . $year . " là năm chẵn.";
} else {
    echo "Năm " . $year . " là năm lẻ.";
}

echo "<br><br>c2<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}

echo "<br><br>c3<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo '<strong>' . $i . '</strong> ';
    } else {
        echo $i . ' ';
    }
}

echo "<br><br>c4<br>";
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

foreach ($nam as $nam_hien_tai) {
    echo $nam_hien_tai . " ";
}
