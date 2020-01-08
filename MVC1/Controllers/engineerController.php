<?php
    namespace Main\Controllers;

    use Main\Core\Controller;
    use Main\Models\EngineerModel;
    use Main\Models\EngineerRepository;

    class engineerController extends Controller
    {
        private $engModel;
        private $engRepo;

        public function __construct()
        {
            $this->engModel=new EngineerModel();
            $this->engRepo=new EngineerRepository($this->engModel);
        }

        public function index()
        {
            
            $arr_obj_models=array();
            
            if(isset($_POST['nameS']))
            {
                $matching=$this->engRepo->findName($_POST['nameS']);

                if(count($matching)!=0){
                
                foreach($matching as $k=>$v){
                $engineerModel=new EngineerModel();
                $engineerModel->setId($v['id']);
                $engineerModel->setName($v['name']);
                $engineerModel->setBirthdate($v['birthdate']);
                $engineerModel->setGender($v['gender']);
                $engineerModel->setAdress($v['address']);
                $engineerModel->setMajor($v['major']);
                $engineerModel->setDate($v['date_salary_up']);
                $engineerModel->setRange($v['salary_range']);
                
                array_push($arr_obj_models,$engineerModel);
                }
                $d['engineer']=$arr_obj_models;
            }
            else{
                $d['error']='No result! Please try later';
                
            }
            
                
            

            }
            else{
            $arr=array();
            $arr=$this->engRepo->getInfo();
            foreach($arr as $key=>$value)
            {
                $engineerModel=new EngineerModel();
                $engineerModel->setId($value['id']);
                $engineerModel->setName($value['name']);
                $engineerModel->setBirthdate($value['birthdate']);
                $engineerModel->setGender($value['gender']);
                $engineerModel->setAdress($value['address']);
                $engineerModel->setMajor($value['major']);
                $engineerModel->setDate($value['date_salary_up']);
                $engineerModel->setRange($value['salary_range']);
                
                array_push($arr_obj_models,$engineerModel);
            }
            $d['engineer']=$arr_obj_models;
           
            
        }
            $d['number']=$this->engRepo->countRows();
            $this->set($d);
            $this->render("index");
            
        }

        public function addEngineer()
        {
           if(isset($_POST['name']))
           {
              
              $this->engModel->setName($_POST['name']);
              $this->engModel->setBirthdate($_POST['birth']);
              $this->engModel->setGender($_POST['gender']);
              $this->engModel->setAdress($_POST['address']);
              $this->engModel->setMajor($_POST['major']);
              $this->engModel->setDate($_POST['date']);
              $this->engModel->setRange($_POST['range']);

            
             
              
              if($this->engRepo->create($this->engModel))
              {
                header("Location: " . WEBROOT."engineerController/index");
              }

              
           }
          
          

            $this->render("create");
        }

        public function edit($id)
        {
            $array_edit=array();
            $array_edit=$this->engRepo->getOne($id);
            $info=new EngineerModel();
            $info->setName($array_edit['name']);
            $info->setBirthdate($array_edit['birthdate']);
            $info->setGender($array_edit['gender']);
            $info->setAdress($array_edit['address']);
            $info->setMajor($array_edit['major']);
            $info->setDate($array_edit['date_salary_up']);
            $info->setRange($array_edit['salary_range']);

            $d["edits"]=$info;
            $this->set($d);

            if(isset($_POST['name']))
           {
              
              $this->engModel->setName($_POST['name']);
              $this->engModel->setBirthdate($_POST['birth']);
              $this->engModel->setGender($_POST['gender']);
              $this->engModel->setAdress($_POST['address']);
              $this->engModel->setMajor($_POST['major']);
              $this->engModel->setDate($_POST['date']);
              $this->engModel->setRange($_POST['range']);

            
              
              
              if($this->engRepo->update($id))
              {
                header("Location: " . WEBROOT."engineerController/index");
              }

              
           }

            $this->render("edit");
        }

        public function remove($id)
        {
            if($this->engRepo->del($id))
            {
                header("Location: " . WEBROOT."engineerController/index");
            }
        }
    }