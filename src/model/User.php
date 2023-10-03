<?php

class User {
    private $pseudo;
    private $password;
    private $dataUsers = json_decode(file_get_contents('src/assets/datas/users.json'), true);
    

    function getUserById($id) {
        return $this->dataUsers[$id];
    }

    function getIdByPseudo($pseudo) {
        $id = false;
        foreach ($this->dataUsers as $index => $user) {
            if ($user->pseudo === $pseudo) {
                $id = $index;
                break; // Sortez de la boucle une fois que l'utilisateur est trouvé
            }
        }
        return $id;
    }

    function checkPassword($user_id, $password) {
        $passwordUser = $this->dataUsers[$user_id]->password;
        
        return ($password === $passwordUser) ? true : false;
    }
} 