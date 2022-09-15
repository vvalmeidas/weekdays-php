<?php
    include 'Context.php';
    include 'Monday.php';
    include 'Tuesday.php';
    include 'Wednesday.php';
    include 'Thursday.php';
    include 'Friday.php';
    include 'Valentines.php';
    include 'Christmas.php';

    $today = null;

    $isValentines = false;
    $isChristmas = false;
    $isSpecialDate = $isValentines || $isChristmas;

    if ($isSpecialDate) {
        if ($isValentines) {
            $today = new Valentines();
        } else if($isChristmas) {
            $today = new Christmas();
        }
    } else {
        $todayNumber = date('w');

        switch($todayNumber) {
            case 1:
                $today = new Monday();
                break;
            case 2:
                $today = new Tuesday();
                break;
            case 3:
                $today = new Wednesday();
                break;
            case 4:
                $today = new Thursday();
                break;
            case 5:
                $today = new Friday();
                break;
        }
    }

    if (!empty($today)) {
        $context = new Context();
        $context->setDay($today);
        echo $context->getMessage();
    } else {
        echo "No message for today";
    }
    
?>