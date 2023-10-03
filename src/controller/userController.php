<?php

function loginPage() {
    include('src/view/login.php');
}

function loginTreatment()
{
    $AlertMessage = new AlertMessage;
    $errorTable = array();
    $succes = array();

    if (isset($_POST) && !empty($_POST)) {
        $UserRepo = new User;

        $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
        $password = htmlspecialchars(strip_tags($_POST['password']));

        foreach ($_POST as $name => $value) {

            if (!empty($value)) {
                if ($name == "email_login" && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $errorTable[] = $AlertMessage->getError('emailIncorrect', false, $name);
                }
            } else {
                $errorTable[] = $AlertMessage->getError('emptyField', false, $name);
            }
        }

        if (empty($errorTable)) {

            $user_id = $UserRepo->getIdByPseudo($pseudo);

            if (is_integer($user_id)) {
                $bool = $UserRepo->checkPassword($user_id, $password);
                if ($bool) {
                        $userSession = $UserRepo->getUserById($user_id);
                        $_SESSION['user'] = (object) array(
                            'user_id' => $userSession['id'],
                            'role_id' => $userSession['role'],
                        );
                      
                        $succes[] = $AlertMessage->getSuccess('login', true, 'login');
                        //$role_id = $userSession['role_id'];
                        $json = json_encode($succes);
                        echo $json;
                } else
                    $errorTable[] = $AlertMessage->getError('loginIncorrect', false, 'login');
            } else
                $errorTable[] = $AlertMessage->getError('loginIncorrect', false, 'login');
        } else
            $errorTable[] = $AlertMessage->getError('errorForm', false, 'login');

    } else
        $errorTable[] = $AlertMessage->getError('notForm', false, 'login');

    if (!empty($errorTable)) {
        $errorJson = json_encode($errorTable);
        echo $errorJson;
    }
}