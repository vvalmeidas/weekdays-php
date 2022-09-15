<?php

require_once '/usr/local/bin/phpunit';

include '../Context.php';
include '../Monday.php';
include '../Tuesday.php';
include '../Wednesday.php';
include '../Thursday.php';
include '../Friday.php';


use PHPUnit\Framework\TestCase;

class DailyMessageTest extends TestCase {

    public function testShowMessageMonday() {
        $context = new Context();
        $context->setDay(new Monday());
        $this->assertEquals("Hello, it's monday!", $context->getMessage());
    }

    public function testShowMessageTuesday() {
        $context = new Context();
        $context->setDay(new Tuesday());
        $this->assertEquals("Hello, it's tuesday!", $context->getMessage());
    }

    public function testShowMessageWednesday() {
        $context = new Context();
        $context->setDay(new Wednesday());
        $this->assertEquals("Hello, it's wednesday!", $context->getMessage());
    }

    public function testShowMessageThursday() {
        $context = new Context();
        $context->setDay(new Thursday());
        $this->assertEquals("Hello, it's thursday!", $context->getMessage());
    }

    public function testShowMessageFriday() {
        $context = new Context();
        $context->setDay(new Friday());
        $this->assertEquals("Hello, it's friday!", $context->getMessage());
    }
}

?>