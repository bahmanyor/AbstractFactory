<?php


namespace APP\website;


use APP\factory\Developer;

class PhpDeveloper implements Developer {

    public function writeCode() {
        echo "developer write php code \n";
    }
}