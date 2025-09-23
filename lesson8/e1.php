<?php

    class Person {
        private $_firstName;
        private $_lastName;
        private $_age;

        public function __construct($_firstName, $_lastName, $_age) {
            $this->_firstName = $_firstName;
            $this->_lastName = $_lastName;
            $this->_age = $_age;
            //Insert code here
        }

        public function showDetails() {
            echo "$this->_firstName $this->_lastName, age $this->_age<br />";
        }
    }

    $p = new Person("William", "Rogers", 35);
    $p->showDetails();

?>