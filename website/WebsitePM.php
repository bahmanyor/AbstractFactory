<?php


namespace APP\website;


use APP\factory\ProjectManager;

class WebsitePM implements ProjectManager {

    public function manageProject() {
        echo "PM manage website \n";
    }
}