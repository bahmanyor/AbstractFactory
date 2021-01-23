<?php


namespace APP\website;


use APP\factory\Tester;

class ManualTester implements Tester {

    public function testCode() {
        echo "manual tester test website \n";
    }
}