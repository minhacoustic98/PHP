<?php
    namespace Main\Models;
    
    use Main\Core\Model;

    class WorkerModel extends Model
    {
        protected $level;
        protected $date_level_up;
        protected $salary_range;

        public function __construct()
        {
            $this->name="";
            $this->birthdate="1990/01/01";
            $this->gender="";
            $this->address="";
            $this->level="";
            $this->date_level_up="";
            $this->salary_range="";
        }

        public function setLevel($level)
        {
            $this->level=$level;
        }

        public function getLevel()
        {
            return $this->level;
        }

        public function setDate($date)
        {
            $this->date_level_up=$date;
        }

        public function getDate()
        {
            return $this->date_level_up;
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