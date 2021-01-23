<?php


namespace APP\banking;


use APP\factory\ProjectTeamFactory;

class BankingTeamFactory implements ProjectTeamFactory {

    public function getDeveloper() {
        return new JavaDeveloper();
    }

    public function getTester() {
        return new QATester();
    }

    public function getProjectManager() {
        return new BankingPM();
    }
}