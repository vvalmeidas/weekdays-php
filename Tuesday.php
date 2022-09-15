<?php 

class Tuesday implements IDay {

    private $message = "Hello, it's tuesday!";

    public function execute() {
        return $this->message;
    }
}

?>