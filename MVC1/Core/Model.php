<?php
    namespace Main\Core;
    
    class Model
    {
        protected $id;
        protected $name;
        protected $birthdate;
        protected $gender;
        protected $address;

        
        public function getProperties()
        {
            $arr=get_object_vars($this);
            return $arr;
        }

        public function setId($id)
        {
            $this->id=$id;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setName($name)
        {
            $this->name=$name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setBirthdate($birth)
        {
            $this->birthdate=$birth;
        }

        public function getBirthdate()
        {
            return $this->birthdate;
        }

        public function setGender($gender)
        {
            $this->gender=$gender;
        }

        public function getGender()
        {
            return $this->gender;
        }

        public function setAdress($add)
        {
            $this->address=$add;
        }

        public function getAdress()
        {
            return $this->address;
        }

    }