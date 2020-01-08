<?php
    namespace Main\Models;

    use Main\Core\ResourceModel;
    use Main\Models\EmployeeModel;
    class EmployeeResourceModel extends ResourceModel
    {
        public function __construct(EmployeeModel $empModel)
        {
            $this->_init("employee","id",$empModel);
        }
    }