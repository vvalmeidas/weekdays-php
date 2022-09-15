<?php 

include 'IDay.php';

class Monday implements IDay {

    private $message = "Hello, it's monday!";

    public function execute() {
        return $this->message;
    }
}

?>