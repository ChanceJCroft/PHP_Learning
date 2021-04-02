<?php
    class User {
        //properties
        private $username;
        public $email;
        public $role = 'member';

        //constructors
        public function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;
        }

        //methods
        public function addFriend()
        {
            return "$this->username added a new friend";
        }


    }



    class AdminUser extends User {

        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level)
        {
            $this->level = $level;
            //pass through the other variables to the parent constructor
            parent::__construct($username, $email);
        }

    }

    $userOne = new User('Chance', 'chance@gmail.com');
    $userTwo = new User('Brad', 'brad222@gmail.com');
    $userThree = new AdminUser('Trent', 'thebestone@aol.com');

    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';
    echo $userThree->getEmail();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object Oriented Tutorial</title>
</head>
<body>
    
</body>
</html>