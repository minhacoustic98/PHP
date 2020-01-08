<?php
    namespace Main\Controllers;
    
    use Main\Core\Controller;
    use Main\Models\EmployeeModel;
    use Main\Models\WorkerModel;
    use Main\Models\EngineerModel;
    use Main\Models\EngineerRepository;
    use Main\Models\EmployeeRepository;
    use Main\Models\WorkerRepository;

    class dashboardController extends Controller
    {
        
        private $empModel,$wModel,$eModel;
        private $empRepo,$wRepo,$eRepo;

        public function __construct()
        {
            $this->empModel=new EmployeeModel();
            $this->wModel=new WorkerModel();
            $this->eModel=new EngineerModel();

            $this->empRepo=new EmployeeRepository($this->empModel);
            $this->wRepo=new WorkerRepository($this->wModel);
            $this->eRepo=new EngineerRepository($this->eModel);
        }

        public function index()
        {
         
            $num_of_emp=$this->empRepo->countRows();
            $num_of_w=$this->wRepo->countRows();
            $num_of_e=$this->eRepo->countRows();

            $total=array($num_of_emp,$num_of_w,$num_of_e);
            $d['total']=$total;
            $this->set($d);
            $this->render("index");
        }
    }