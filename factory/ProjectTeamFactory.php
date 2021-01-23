<?php


namespace APP\factory;


interface ProjectTeamFactory {
    public function getDeveloper();

    public function getTester();

    public function getProjectManager();
}