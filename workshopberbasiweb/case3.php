<?php
interface logger
{
    public function log($massage);
}
class Filelogger implements logger
{
    private $handle;
    private $logFile;

    public function _construct($filename, $mode = 'a' )
    {
        $this->logFile = $filename;
        //open log file for append
        $this->handle = fopen($filename, $mode)
          or die('Could not open the log file ');
    }
    public function log($massage)
    {
        $massage = date('f j, y, g:i a') . ':'.$massage . "\n" ;
        fwrite($this->handle, $massage);
    }

    public function _destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
} 
class Databaselogger implements logger
{
    public function log($massage)
    {
        echo sprintf("log % to the database\n", $massage); 
    }
}
// examle
$logger = new Filelogger('./log.txt', 'w');
$logger-> log('PH[ interface is awesome');
// example 2
$loggers = [
    new Filelogger('./log.txt'),
    new Databaselogger()
];
foreach ($loggers as $logger){
    $logger->log('log massage');
}
?>