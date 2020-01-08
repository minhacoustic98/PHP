<?php
    namespace Main\Models;
    
    use Main\Core\Model;

    class EngineerModel extends Model
    {
        protected $major;
        protected $date_salary_up;
        protected $salary_range;

        public function __construct()
        {
            $this->name="";
            $this->birthdate="1990/01/01";
            $this->gender="";
            $this->address="";
            $this->major="";
            $this->date_salary_up="";
            $this->salary_range="";
        }

        public function setMajor($major)
        {
            $this->major=$major;
        }

        public function getMajor()
        {
            return $this->major;
        }

        public function setDate($date)
        {
            $this->date_salary_up=$date;
        }

        public function getDate()
        {
            return $this->date_salary_up;
        }

        public function setRange($range)
        {
            $this->salary_range=$range;
        }

        public function getRange()
        {
            return $this->salary_range;
        }

    }