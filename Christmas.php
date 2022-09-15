<?php 

class Christmas implements IDay {

    private $message = "Hello, it's christmas day!";

    public function execute() {
        return $this->message;
    }
}

?>