<?php

// Define the Logger interface
interface Logger {
    public function log($message);
}

// Implement ConsoleLogger
class ConsoleLogger implements Logger {
    public function log($message) {
        $timestamp = date('Y-m-d H:i:s');
        $formattedMessage = "[$timestamp] $message\n";
        echo $formattedMessage;
    }
}

// Implement FileLogger
class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function log($message) {
        $timestamp = date('Y-m-d H:i:s');
        $formattedMessage = "[$timestamp] $message\n";
        file_put_contents($this->filename, $formattedMessage, FILE_APPEND);
    }
}

// Demonstrate the usage of the logging system
function main() {
    $consoleLogger = new ConsoleLogger();
    $fileLogger = new FileLogger("log.txt");

    $consoleLogger->log("This is a console log message.");
    $fileLogger->log("This is a file log message.");
}

main();

?>
