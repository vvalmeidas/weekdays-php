<?php 

class Wednesday implements IDay {

    private $message = "Hello, it's wednesday!";

    public function execute() {
        return $this->message;
    }
}

?>