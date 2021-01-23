<?php


namespace APP\website;


use APP\factory\ProjectTeamFactory;

class WebsiteTeamFactory implements ProjectTeamFactory {

    public function getDeveloper() {
        return new PhpDeveloper();
    }

    public function getTester() {
        return new ManualTester();
    }

    public function getProjectManager() {
        return new WebsitePM();
    }
}