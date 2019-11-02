<?php

namespace Acme\Repository;

use Acme\Entity\User;

class UserRepository
{
    private const USERS_FILE = '/../data/users.csv';

    public static function getAllUsers(){
        $users = [];
        $fileContents = file_get_contents($_SERVER['DOCUMENT_ROOT'].self::USERS_FILE);
        $rows = explode("\n", $fileContents);
        foreach($rows as $row){
            $data = explode(',', $row);
            $users[] = new User(trim($data[0]));
        }
        return $users;
    }

}
