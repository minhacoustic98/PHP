<?php
    namespace Main\Controllers;

    use Main\Core\Controller;
    use Main\Models\WorkerModel;
    use Main\Models\WorkerRepository;

    class workerController extends Controller
    {
        private $wModel;
        private $wRepo;

        public function __construct()
        {
            $this->wModel=new WorkerModel();
            $this->wRepo=new WorkerRepository($this->wModel);
        }

        public function index()
        {
            
            $arr_obj_models=array();
            
            if(isset($_POST['nameS']))
            {
                $matching=$this->wRepo->findName($_POST['nameS']);

                if(count($matching)!=0){
                
                foreach($matching as $k=>$v){
                $workerModel=new WorkerModel();
                $workerModel->setId($v['id']);
                $workerModel->setName($v['name']);
                $workerModel->setBirthdate($v['birthdate']);
                $workerModel->setGender($v['gender']);
                $workerModel->setAdress($v['address']);
                $workerModel->setLevel($v['level']);
                $workerModel->setDate($v['date_level_up']);
                $workerModel->setRange($v['salary_range']);
                
                array_push($arr_obj_models,$workerModel);
                }
                $d['worker']=$arr_obj_models;
            }
            else{
                $d['error']='No result! Please try later';
                
            }
            
                
            

            }
            else{
            $arr=array();
            $arr=$this->wRepo->getInfo();
            foreach($arr as $key=>$value)
            {
                $workerModel=new WorkerModel();
                $workerModel->setId($value['id']);
                $workerModel->setName($value['name']);
                $workerModel->setBirthdate($value['birthdate']);
                $workerModel->setGender($value['gender']);
                $workerModel->setAdress($value['address']);
                $workerModel->setLevel($value['level']);
                $workerModel->setDate($value['date_level_up']);
                $workerModel->setRange($value['salary_range']);
                
                array_push($arr_obj_models,$workerModel);
            }
            $d['worker']=$arr_obj_models;
           
            
        }
            $d['number']=$this->wRepo->countRows();
            $this->set($d);
            $this->render("index");
            
        }


        public function addWorker()
        {
           if(isset($_POST['name']))
           {
              
              $this->wModel->setName($_POST['name']);
              $this->wModel->setBirthdate($_POST['birth']);
              $this->wModel->setGender($_POST['gender']);
              $this->wModel->setAdress($_POST['address']);
              $this->wModel->setLevel($_POST['level']);
              $this->wModel->setDate($_POST['date']);
              $this->wModel->setRange($_POST['range']);

            
             
              
              if($this->wRepo->create($this->wModel))
              {
                header("Location: " . WEBROOT."workerController/index");
              }

              
           }
          
          

            $this->render("create");
        }

        public function edit($id)
        {
            $array_edit=array();
            $array_edit=$this->wRepo->getOne($id);
            $info=new WorkerModel();
            $info->setName($array_edit['name']);
            $info->setBirthdate($array_edit['birthdate']);
            $info->setGender($array_edit['gender']);
            $info->setAdress($array_edit['address']);
            $info->setLevel($array_edit['level']);
            $info->setDate($array_edit['date_level_up']);
            $info->setRange($array_edit['salary_range']);

            $d["edits"]=$info;
            $this->set($d);

            if(isset($_POST['name']))
           {
              
              $this->wModel->setName($_POST['name']);
              $this->wModel->setBirthdate($_POST['birth']);
              $this->wModel->setGender($_POST['gender']);
              $this->wModel->setAdress($_POST['address']);
              $this->wModel->setLevel($_POST['level']);
              $this->wModel->setDate($_POST['date']);
              $this->wModel->setRange($_POST['range']);

            
              
              
              if($this->wRepo->update($id))
              {
                header("Location: " . WEBROOT."workerController/index");
              }

              
           }
            $this->render("edit");
        }

        public function remove($id)
        {
            if($this->wRepo->del($id))
            {
                header("Location: " . WEBROOT."workerController/index");
            }
        }
    }