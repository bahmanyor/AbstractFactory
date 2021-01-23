<?php


namespace APP\banking;


use APP\factory\Developer;

class JavaDeveloper implements Developer {

    public function writeCode() {
        echo "write java code \n";
    }
}