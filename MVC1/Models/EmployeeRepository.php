<?php
    namespace Main\Models;

    use Main\Models\EmployeeResourceModel;
    use Main\Models\EmployeeModel;

    class EmployeeRepository
    {
        public $empRepo;

        public function __construct(EmployeeModel $em)
        {
           $this->empRepo=new EmployeeResourceModel($em);
        }

        public function create($model)
        {
           return $this->empRepo->save($model);
        }

        public function del($id)
        {
            return $this->empRepo->delete($id);
        }

        public function update($id)
        {
            return $this->empRepo->edit($id);
        }

        public function getInfo()
        {
            return $this->empRepo->getFull();
        }

        public function getOne($id)
        {
            return $this->empRepo->getSingleInfo($id);
        }

        public function findName($name)
        {
            return $this->empRepo->search($name);
        }

        public function countRows()
        {
            return $this->empRepo->getNumber();
        }
    }