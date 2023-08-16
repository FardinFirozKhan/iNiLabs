<?php


interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        $logMessage = "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
        file_put_contents('log.txt', $logMessage, FILE_APPEND);
    }
}



$fileLogger = new FileLogger();
$fileLogger->log("This is a log message to the file.");



?>