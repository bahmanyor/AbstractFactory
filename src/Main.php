<?php


namespace APP\src;


class Main {

    public function __construct() {

    }

    public function main() {
        $bankProject = new SuperBankSystem();
        $bankProject->createBankProject();

        echo "======================================\n";

        $siteProject = new AuctionSiteProject();
        $siteProject->createActionSite();
    }
}