<?php


namespace APP\banking;


use APP\factory\ProjectManager;

class BankingPM implements ProjectManager {

    public function manageProject() {
        echo "project manager manage banking project \n";
    }
}