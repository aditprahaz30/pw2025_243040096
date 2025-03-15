<?php
echo "waktu saat ini <br>";
echo date("l, j M Y");
echo "<hr>";

echo "detik saat ini";
echo time();
echo "<br>";
echo "detik 1 hari dari sekarang <br>";
echo time() + 60*60*24;
echo "<hr>";

echo "hari ini:";
echo date("l");
echo "<br>";
echo "100 hari dari sekarang adalah hari:";
echo date("l", time()+60*60*24*100 );
echo "<hr>";

echo mktime(9,23,0,3,11,2025);
?>
