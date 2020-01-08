<?php
    namespace Main\Models;

    use Main\Core\Model;

    class EmployeeModel extends Model
    {
        protected $position;
        protected $date_salary_up;
        protected $salary_range;

        public function __construct()
        {
            $this->name="";
            $this->birthdate="1990-01-01";
            $this->gender="";
            $this->address="";
            $this->position="";
            $this->date_salary_up="";
            $this->salary_range=0;
        }
        
        public function setPosition($pos)
        {
            $this->position=$pos;

        }

        public function getPosition()
        {
            return $this->position;
        }

        public function setDate($date_salary_up)
        {
            $this->date_salary_up=$date_salary_up;

        }

        public function getDate()
        {
            return $this->date_salary_up;
        }

        public function setRange($salary_range)
        {
            $this->salary_range=$salary_range;

        }

        public function getRange()
        {
            return $this->salary_range;
        }
    }