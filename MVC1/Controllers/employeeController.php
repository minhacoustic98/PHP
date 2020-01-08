<?php
    namespace Main\Controllers;

    use Main\Core\Controller;
    use Main\Models\EmployeeModel;
    use Main\Models\EmployeeRepository;

    class employeeController extends Controller
    {
        private $empModel;
        private $empRepo;

        public function __construct()
        {
            $this->empModel=new EmployeeModel();
            $this->empRepo=new EmployeeRepository($this->empModel);
        }

        public function index()
        {
            
            $arr_obj_models=array();
            //$d['employee']=$this->empRepo->getInfo();
            if(isset($_POST['nameS']))
            {
                $matching=$this->empRepo->findName($_POST['nameS']);

                if(count($matching)!=0){
                //var_dump($matching);
                foreach($matching as $k=>$v){
                $employeeModel=new EmployeeModel();
                $employeeModel->setId($v['id']);
                $employeeModel->setName($v['name']);
                $employeeModel->setBirthdate($v['birthdate']);
                $employeeModel->setGender($v['gender']);
                $employeeModel->setAdress($v['address']);
                $employeeModel->setPosition($v['position']);
                $employeeModel->setDate($v['date_salary_up']);
                $employeeModel->setRange($v['salary_range']);
                
                array_push($arr_obj_models,$employeeModel);
                }
                $d['employee']=$arr_obj_models;
            }
            else{
                $d['error']='No result! Please try later';
                
            }
            
                
            

            }
            else{
            $arr=array();
            $arr=$this->empRepo->getInfo();
            foreach($arr as $key=>$value)
            {
                $employeeModel=new EmployeeModel();
                $employeeModel->setId($value['id']);
                $employeeModel->setName($value['name']);
                $employeeModel->setBirthdate($value['birthdate']);
                $employeeModel->setGender($value['gender']);
                $employeeModel->setAdress($value['address']);
                $employeeModel->setPosition($value['position']);
                $employeeModel->setDate($value['date_salary_up']);
                $employeeModel->setRange($value['salary_range']);
                
                array_push($arr_obj_models,$employeeModel);
            }
            $d['employee']=$arr_obj_models;
           
            
        }
            $d['number']=$this->empRepo->countRows();
            $this->set($d);
            $this->render("index");
            
        }

        public function addEmployee()
        {
           if(isset($_POST['name']))
           {
              
              $this->empModel->setName($_POST['name']);
              $this->empModel->setBirthdate($_POST['birth']);
              $this->empModel->setGender($_POST['gender']);
              $this->empModel->setAdress($_POST['address']);
              $this->empModel->setPosition($_POST['position']);
              $this->empModel->setDate($_POST['date']);
              $this->empModel->setRange($_POST['range']);

            
              var_dump($this->empModel);
              
              if($this->empRepo->create($this->empModel))
              {
                header("Location: " . WEBROOT."employeeController/index");
              }

              
           }
          
          

            $this->render("create");
        }

        public function edit($id)
        {
            $array_edit=array();
            $array_edit=$this->empRepo->getOne($id);
            $info=new EmployeeModel();
            $info->setName($array_edit['name']);
            $info->setBirthdate($array_edit['birthdate']);
            $info->setGender($array_edit['gender']);
            $info->setAdress($array_edit['address']);
            $info->setPosition($array_edit['position']);
            $info->setDate($array_edit['date_salary_up']);
            $info->setRange($array_edit['salary_range']);

            $d["edits"]=$info;
            $this->set($d);

            if(isset($_POST['name']))
           {
              
              $this->empModel->setName($_POST['name']);
              $this->empModel->setBirthdate($_POST['birth']);
              $this->empModel->setGender($_POST['gender']);
              $this->empModel->setAdress($_POST['address']);
              $this->empModel->setPosition($_POST['position']);
              $this->empModel->setDate($_POST['date']);
              $this->empModel->setRange($_POST['range']);

            
              
              
              if($this->empRepo->update($id))
              {
                header("Location: " . WEBROOT."employeeController/index");
              }

              
           }

            $this->render("edit");
        }

        public function remove($id)
        {
            if($this->empRepo->del($id))
            {
                header("Location: " . WEBROOT."employeeController/index");
            }
        }
    }