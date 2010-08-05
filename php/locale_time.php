<?php
echo '<pre>' . "\n";

//Add english as default (if all Indonesian not available)

setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');

//will output something like: Minggu, 17 Agustus 2008
echo strftime("%A, %d %B %Y") . "\n";

echo '</pre>' . "\n";
?>
