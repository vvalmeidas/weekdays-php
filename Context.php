<?php

class Context {

    private $day;

    public function setDay(IDay $day) {
        $this->day = $day;
    }

    public function getMessage() {
        return $this->day->execute();
    }
}

?>