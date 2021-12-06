<?php

namespace Chloe\Portfolio\Model\Manager;

require_once "Traits/ManagerTrait.php";
require_once "../source/Model/DB.php";
require_once "../source/Model/Entity/User.php";

use Chloe\Portfolio\Model\DB;
use Chloe\Portfolio\Model\Entity\User;
use Chloe\Portfolio\Model\Manager\Traits\ManagerTrait;

class UserManager {

    use ManagerTrait;

    /**
     * Return a user based on id.
     * @param $id
     * @return User
     */
    public function getUser($id): User {
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id = :id");
        $id = intval($id);
        $request->bindParam(":id", $id);
        $request->execute();
        $info = $request->fetch();
        $user = new User();
        if ($info) {
            $user->setId($info['id']);
            $user->setFirstname($info['firstname']);
            $user->setLastname($info['lastname']);
            $user->setEmail($info['email']);
            $user->setPhone($info['phone']);
            $user->setPicture($info['picture']);
        }
        return $user;
    }

    /**
     * Display a user based on id.
     * @param int $id
     * @return array
     */
    public function getUserID(int $id): array {
        $user = [];
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id = :id");
        $request->bindParam(":id", $id);
        if($request->execute()) {
            foreach($request->fetchAll() as $info) {
                $user[] = new User($info['id'], $info['firstname'], $info['lastname'] ,$info['email'], $info['phone'], $info['picture']);
            }
        }
        return $user;
    }

    /**
     * Modifies the user's information.
     * @param User $user
     * @return bool
     */
    public function update(User $user): bool {
        $request = DB::getInstance()->prepare("UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, phone = :phone, picture = :picture WHERE id = :id");
        $request->bindValue(':id', $user->getId());
        $request->bindValue(':firstname', $user->setFirstname($user->getFirstname()));
        $request->bindValue(':lastname', $user->setLastname($user->getLastname()));
        $request->bindValue(':email', $user->setEmail($user->getEmail()));
        $request->bindValue(':phone', $user->setPhone($user->getPhone()));
        $request->bindValue(':picture', $user->setPicture($user->getPicture()));

        return $request->execute();
    }
}