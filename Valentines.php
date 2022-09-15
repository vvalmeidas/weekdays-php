<?php 

class Valentines implements IDay {

    private $message = "Hello, it's valentines day!";

    public function execute() {
        return $this->message;
    }
}

?>