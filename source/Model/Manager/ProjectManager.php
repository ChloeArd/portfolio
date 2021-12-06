<?php

namespace Chloe\Portfolio\Model\Manager;

require_once "Traits/ManagerTrait.php";
require_once "../source/Model/DB.php";
require_once "../source/Model/Entity/Project.php";

use Chloe\Portfolio\Model\DB;
use Chloe\Portfolio\Model\Entity\Project;
use Chloe\Portfolio\Model\Manager\Traits\ManagerTrait;

class ProjectManager {

    use ManagerTrait;

    /**
     * @param $id
     * @return Project
     */
    public function getProject($id): Project {
        $request = DB::getInstance()->prepare("SELECT * FROM project WHERE id = :id");
        $id = intval($id);
        $request->bindParam(":id", $id);
        $request->execute();
        $info = $request->fetch();
        $project = new Project();
        if ($info) {
            $project->setId($info['id']);
            $project->setTitle($info['title']);
            $project->setDescription($info['description']);
            $project->setPicture1($info['picture1']);
            $project->setPicture2($info['picture2']);
            $project->setLink($info['link']);
        }
        return $project;
    }

    /**
     * display one project
     * @param int $id
     * @return array
     */
    public function getProjectId(int $id): array {
        $project = [];
        $request = DB::getInstance()->prepare("SELECT * FROM project WHERE id = :id");
        $request->bindParam(":id", $id);
        if($request->execute()) {
            foreach($request->fetchAll() as $info) {
                $project[] = new Project($info['id'], $info['title'], $info['description'], $info['picture1'], $info['picture2'], $info['link']);
            }
        }
        return $project;
    }

    public function getProjects(): array {
        $project = [];
        $request = DB::getInstance()->prepare("SELECT * FROM project");
        if($request->execute()) {
            foreach($request->fetchAll() as $info) {
                $project[] = new Project($info['id'], $info['title'], $info['description'], $info['picture1'], $info['picture2'], $info['link']);
            }
        }
        return $project;
    }

    /**
     * add a project
     * @param Project $project
     * @return bool
     */
    public function add (Project $project): bool {
        $request = DB::getInstance()->prepare("
            INSERT INTO project (title, description, picture1, picture2, link)
                VALUES (:title, :description, :picture1, :picture2, :link) 
        ");

        $request->bindValue(':title', $project->getTitle());
        $request->bindValue(':description', $project->getDescription());
        $request->bindValue(':picture1', $project->getPicture1());
        $request->bindValue(':picture2', $project->getPicture2());
        $request->bindValue(':link', $project->getLink());

        return $request->execute() && DB::getInstance()->lastInsertId() != 0;
    }

    /**
     * update a project
     * @param Project $project
     * @return bool
     */
    public function update(Project $project): bool {
        $request = DB::getInstance()->prepare("UPDATE project SET title = :title, description = :description, picture1 = :picture1, picture2 = :picture2, link = :link WHERE id = :id");
        $request->bindValue(':id', $project->getId());
        $request->bindValue(':title', $project->setTitle($project->getTitle()));
        $request->bindValue(':description', $project->setDescription($project->getDescription()));
        $request->bindValue(':picture1', $project->setPicture1($project->getPicture1()));
        $request->bindValue(':picture2', $project->setPicture2($project->getPicture2()));
        $request->bindValue('link', $project->setLink($project->getLink()));

        return $request->execute();
    }

    /**
     * delete a project
     * @param int $id
     * @return bool
     */
    public function delete (int $id): bool {
        $request = DB::getInstance()->prepare("DELETE FROM project WHERE id = :id");
        $request->bindValue(":id", $id);
        return $request->execute();
    }
}