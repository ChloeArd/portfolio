<?php

namespace Chloe\Portfolio\Controller;

use Chloe\Portfolio\Controller\Traits\ReturnViewTrait;
use Chloe\Portfolio\Model\Manager\DevManager;
use Chloe\Portfolio\Model\Manager\ProfileManager;
use Chloe\Portfolio\Model\Manager\ProjectManager;
use Chloe\Portfolio\Model\Manager\UserManager;

require_once "../Model/Manager/UserManager.php";

class HomeController {

    use ReturnViewTrait;

    /**
     * display home page
     */
    public function homePage() {
        $manager = new UserManager();
        $user = $manager->getUserID(1);
        $manager = new DevManager();
        $langage = $manager->getDevCategorie("langage");
        $tool = $manager->getDevCategorie("tool");
        $skill = $manager->getDevCategorie("skill");
        $manager = new ProfileManager();
        $profile = $manager->getProfile2();
        $manager = new ProjectManager();
        $project = $manager->getProjects();
        $this->return("homeView", "Mon portfolio : Chloé Ardoise", ["user" => $user, "langage" => $langage, "tool" => $tool, "skill" => $skill, "project" => $project, "profile" => $profile]);
    }
}