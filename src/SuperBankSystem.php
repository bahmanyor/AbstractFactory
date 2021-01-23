<?php


namespace APP\src;


use APP\banking\BankingTeamFactory;

class SuperBankSystem {
    public function createBankProject() {
        $factory = new BankingTeamFactory();
        $developer = $factory->getDeveloper();
        $tester = $factory->getTester();
        $projectManager = $factory->getProjectManager();

        echo "Creating bank system: \n";
        $developer->writeCode();
        $tester->testCode();
        $projectManager->manageProject();
    }
}