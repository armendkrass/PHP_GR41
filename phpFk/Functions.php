<?php

class Functions{
    public function writeLog($txt = "") {
        file_put_contents(__DIR__ . 'log.txt', $txt . PHP_EOL , FILE_APPEND | LOCK_EX);
    }

}
?>