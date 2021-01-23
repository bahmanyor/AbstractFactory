<?php


namespace APP\src;


use APP\website\WebsiteTeamFactory;

class AuctionSiteProject {
    public function createActionSite() {
        $project = new WebsiteTeamFactory();
        $developer = $project->getDeveloper();
        $tester = $project->getTester();
        $projectManajer = $project->getProjectManager();

        echo "Creating action site \n";
        $developer->writeCode();
        $tester->testCode();
        $projectManajer->manageProject();
    }
}