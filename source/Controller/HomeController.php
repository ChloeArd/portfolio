<?php

namespace Chloe\Portfolio\Controller;

use Chloe\Portfolio\Controller\Traits\ReturnViewTrait;
use Chloe\Portfolio\Model\Manager\DevManager;
use Chloe\Portfolio\Model\Manager\ProfileManager;
use Chloe\Portfolio\Model\Manager\ProjectManager;
use Chloe\Portfolio\Model\Manager\UserManager;

require_once "../source/Model/Manager/UserManager.php";
require_once "../source/Model/Manager/DevManager.php";
require_once "../source/Model/Manager/ProfileManager.php";
require_once "../source/Model/Manager/ProjectManager.php";

class HomeController {

    use ReturnViewTrait;

    /**
     * display home page
     */
    public function homePage() {
        $manager = new UserManager();
        $user = $manager->getUserID(1);
        $manager = new DevManager();
        $language = $manager->getDevCategorie("language");
        $tool = $manager->getDevCategorie("tool");
        $skill = $manager->getDevCategorie("skill");
        $manager = new ProfileManager();
        $profile = $manager->getProfile2();
        $manager = new ProjectManager();
        $project = $manager->getProjects();
        $this->return("homeView", "Mon portfolio : Chloé Ardoise", ["user" => $user, "language" => $language, "tool" => $tool, "skill" => $skill, "project" => $project, "profile" => $profile]);
    }
}