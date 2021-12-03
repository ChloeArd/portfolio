<?php

namespace Chloe\portfolio\Model\Manager;

require_once "Traits/ManagerTrait.php";
require_once "RoleManager.php";

use Chloe\portfolio\Model\DB;
use Chloe\portfolio\Model\Entity\Profile;
use Chloe\portfolio\Model\Manager\Traits\ManagerTrait;

class ProfileManager {

    use ManagerTrait;

    /**
     * @param $id
     * @return Profile
     */
    public function getProfile($id): Profile {
        $request = DB::getInstance()->prepare("SELECT * FROM profile WHERE id = :id");
        $id = intval($id);
        $request->bindParam(":id", $id);
        $request->execute();
        $info = $request->fetch();
        $profile = new Profile();
        if ($info) {
            $profile->setId($info['id']);
            $profile->setProfile($info['profile']);
        }
        return $profile;
    }

    /**
     * display the content of categories
     * @param string $categorie
     * @return array
     */
    public function getProfile2(): array {
        $profile = [];
        $request = DB::getInstance()->prepare("SELECT * FROM profile");
        if($request->execute()) {
            foreach($request->fetchAll() as $info) {
                $profile[] = new Profile($info['id'], $info['profile']);
            }
        }
        return $profile;
    }

    /**
     * update a profile
     * @param Profile $profile
     * @return bool
     */
    public function update(Profile $profile): bool {
        $request = DB::getInstance()->prepare("UPDATE profile SET profile = :profile WHERE id = :id");
        $request->bindValue(':id', $profile->getId());
        $request->bindValue(':profile', $profile->setProfile($profile->getProfile()));

        return $request->execute();
    }

    /**
     * delete a profile
     * @param int $id
     * @return bool
     */
    public function delete (int $id): bool {
        $request = DB::getInstance()->prepare("DELETE FROM dev WHERE id = :id");
        $request->bindValue(":id", $id);
        return $request->execute();
    }
}