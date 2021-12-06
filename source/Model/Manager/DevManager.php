<?php

namespace Chloe\Portfolio\Model\Manager;

require_once "Traits/ManagerTrait.php";
require_once "../source/Model/DB.php";
require_once "../source/Model/Entity/Dev.php";


use Chloe\Portfolio\Model\DB;
use Chloe\Portfolio\Model\Entity\Dev;
use Chloe\Portfolio\Model\Manager\Traits\ManagerTrait;

class DevManager {

    use ManagerTrait;

    /**
     * @param $id
     * @return Dev
     */
    public function getDev($id): Dev {
        $request = DB::getInstance()->prepare("SELECT * FROM dev WHERE id = :id");
        $id = intval($id);
        $request->bindParam(":id", $id);
        $request->execute();
        $info = $request->fetch();
        $dev = new Dev();
        if ($info) {
            $dev->setId($info['id']);
            $dev->setName($info['name']);
            $dev->setCategorie($info['categorie']);
        }
        return $dev;
    }

    /**
     * display the content of categories
     * @param string $categorie
     * @return array
     */
    public function getDevCategorie(string $categorie): array {
        $dev = [];
        $request = DB::getInstance()->prepare("SELECT * FROM dev WHERE categorie = :categorie");
        $request->bindParam(":categorie", $categorie);
        if($request->execute()) {
            foreach($request->fetchAll() as $info) {
                $dev[] = new Dev($info['id'], $info['name'], $info['categorie']);
            }
        }
        return $dev;
    }

    public function getUserCategorie(int $id, string $categorie): array {
        $dev = [];
        $request = DB::getInstance()->prepare("SELECT * FROM dev WHERE id = :id, categorie = :categorie");
        $request->bindParam(":id", $id);
        $request->bindParam(":categorie", $categorie);
        if($request->execute()) {
            foreach($request->fetchAll() as $info) {
                $dev[] = new Dev($info['id'], $info['name'], $info['categorie']);
            }
        }
        return $dev;
    }

    /**
     * add a name of a categorie
     * @param Dev $dev
     * @return bool
     */
    public function add (Dev $dev): bool {
        $request = DB::getInstance()->prepare("
            INSERT INTO dev (name, categorie)
                VALUES (:name, :categorie) 
        ");

        $request->bindValue(':name', $dev->getName());
        $request->bindValue(':categorie', $dev->getCategorie());

        return $request->execute() && DB::getInstance()->lastInsertId() != 0;
    }

    /**
     * update a name of a categorie
     * @param Dev $dev
     * @return bool
     */
    public function update(Dev $dev): bool {
        $request = DB::getInstance()->prepare("UPDATE dev SET name = :name WHERE id = :id, categorie = :categorie");
        $request->bindValue(':id', $dev->getId());
        $request->bindValue(':name', $dev->setName($dev->getName()));
        $request->bindValue(':categorie', $dev->setCategorie($dev->getCategorie()));

        return $request->execute();
    }

    /**
     * delete a name of categorie
     * @param int $id
     * @return bool
     */
    public function delete (int $id): bool {
        $request = DB::getInstance()->prepare("DELETE FROM dev WHERE id = :id");
        $request->bindValue(":id", $id);
        return $request->execute();
    }
}