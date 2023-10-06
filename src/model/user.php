<?php

class User {
    private $pseudo;
    private $password;
    private $dataUsers = 'src/assets/datas/users.json';
    

    function getUserById($id) {
        $dataUsers = json_decode(file_get_contents($this->dataUsers), true);
        return $dataUsers['users'][$id];
    }

    function getIdByPseudo($pseudo) {
        $id = false;
        $dataUsers = json_decode(file_get_contents($this->dataUsers), true);
        foreach ($dataUsers['users'] as $index => $user) {
            if ($user["pseudo"] === $pseudo) {
                return $index;
                break; // Sortez de la boucle une fois que l'utilisateur est trouvé
            }
        }
        return false;
    }

    function checkPassword($user_id, $password) {
        $dataUsers = json_decode(file_get_contents($this->dataUsers), true);
        $passwordUser = $dataUsers['users'][$user_id]["password"];

        return ($password === $passwordUser) ? true : false;
    }

    
}
