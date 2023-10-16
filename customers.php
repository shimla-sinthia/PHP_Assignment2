<?php
    class Customer {
        private $id;
        private $firstName;
        private $lastName;
        private $email;

        public function __construct(
            int $id,
            string $firstName,
            string $lastName,
            string $email
        ) {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
        }
        public function __get($name) {
            if($name == 'id') {
                return $this->id;
            }
            elseif($name == 'firstName') {
                return $this->firstName;
            }
            elseif($name == 'lastName') {
                return $this->lastName;
            }
            elseif($name == 'email') {
                return $this->email;
            }
        }
        public function __set($name, $value) {
            if($name == 'id') {
                $this->id = $value;
            }
            elseif($name == 'firstName') {
                $this->firstName = $value;
            }
            elseif($name == 'lastName') {
                $this->lastName = $value;
            }
            elseif($name == 'email') {
                $this->email = $value;
            }
        }

    }

?>
