<?php




class DataUser
{
    public static $path = 'user.json';

    public static function loadData()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return self::convertUser($data);

    }

    public static function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function convertUser($data)
    {
        $users = [];
        foreach ($data as $item) {
            $user = new  User($item->name, $item->password, $item->importPassword);
            array_push($users, $user);
        }
        return $users;
    }

    public function addUser($user)
    {
        $users = self::loadData();
        array_push($users, $user);
        self::saveData($users);

    }

    public static function checkLogin($user)
    {
        $users = self::loadData();
        foreach ($users as $item) {
            if ($user->name == $item->name && $user->password == $item->password) {
                return true;
            }
        }
        return false;
    }

    public static function login($username, $password)
    {
        $user = new User($username, $password, '');
        if (self::checkLogin($user)) {
            session_start();
            $_SESSION['username'] = $username;
            header('location: homeUser.php');
        } else {
            echo '<p style="margin-left: 169px" >Please enter username and password!';
        }
    }
    /*public static function checkCreate($user){
        $users=self::loadData();
        foreach ($users as $item)
        {

                $a= $user->name;
                return $a;

        }
    }*/

}