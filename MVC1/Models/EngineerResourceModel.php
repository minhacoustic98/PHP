<?php
    namespace Main\Models;

    use Main\Core\ResourceModel;
    use Main\Models\EngineerModel;
    class EngineerResourceModel extends ResourceModel
    {
        public function __construct(EngineerModel $engModel)
        {
            $this->_init("engineers","id",$engModel);
        }
    }