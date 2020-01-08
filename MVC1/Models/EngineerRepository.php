<?php
    namespace Main\Models;

    use Main\Models\EngineerResourceModel;
    use Main\Models\EngineerModel;

    class EngineerRepository
    {
        public $engRepo;

        public function __construct(EngineerModel $em)
        {
           $this->engRepo=new EngineerResourceModel($em);
        }

        public function create($model)
        {
           return $this->engRepo->save($model);
        }

        public function del($id)
        {
            return $this->engRepo->delete($id);
        }

        public function update($id)
        {
            return $this->engRepo->edit($id);
        }

        public function getInfo()
        {
            return $this->engRepo->getFull();
        }

        public function getOne($id)
        {
            return $this->engRepo->getSingleInfo($id);
        }

        public function findName($name)
        {
            return $this->engRepo->search($name);
        }

        public function countRows()
        {
            return $this->engRepo->getNumber();
        }
    }