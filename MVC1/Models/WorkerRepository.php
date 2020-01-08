<?php
    namespace Main\Models;

    use Main\Models\WorkerResourceModel;
    use Main\Models\WorkerModel;

    class WorkerRepository
    {
        public $wRepo;

        public function __construct(WorkerModel $em)
        {
           $this->wRepo=new WorkerResourceModel($em);
        }

        public function create($model)
        {
           return $this->wRepo->save($model);
        }

        public function del($id)
        {
            return $this->wRepo->delete($id);
        }

        public function update($id)
        {
            return $this->wRepo->edit($id);
        }

        public function getInfo()
        {
            return $this->wRepo->getFull();
        }

        public function getOne($id)
        {
            return $this->wRepo->getSingleInfo($id);
        }

        public function findName($name)
        {
            return $this->wRepo->search($name);
        }

        public function countRows()
        {
            return $this->wRepo->getNumber();
        }
    }