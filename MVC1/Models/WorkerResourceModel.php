<?php
    namespace Main\Models;

    use Main\Core\ResourceModel;
    use Main\Models\WorkerModel;
    class WorkerResourceModel extends ResourceModel
    {
        public function __construct(WorkerModel $wModel)
        {
            $this->_init("workers","id",$wModel);
        }
    }