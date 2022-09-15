<?php 

class Friday implements IDay {

    private $message = "Hello, it's friday!";

    public function execute() {
        return $this->message;
    }
}

?>