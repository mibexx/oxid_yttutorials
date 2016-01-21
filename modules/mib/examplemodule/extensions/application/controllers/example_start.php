<?php

    class example_start extends example_start_parent
    {
        public function render()
        {
            $service = oxNew('stringGetter');
            $this->_aViewData['exampleModule'] = $service->getTitle();

            return parent::render();
        }
    }