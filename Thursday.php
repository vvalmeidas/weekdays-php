<?php 

class Thursday implements IDay {

    private $message = "Hello, it's thursday!";

    public function execute() {
        return $this->message;
    }
}

?>