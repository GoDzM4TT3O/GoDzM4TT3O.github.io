1. <?php
2. $ip = $_SERVER['REMOTE_ADDR'];
3. $fo = fopen("lo.txt", "a");
4. $fw = fwrite($fo, "$ip\n");
5. fclose($fo);
6. ?>
