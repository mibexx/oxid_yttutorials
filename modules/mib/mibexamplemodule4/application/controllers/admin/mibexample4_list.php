<?php
    class mibexample4_list extends oxAdminList
    {

        /**
         * Name of chosen object class (default null).
         *
         * @var string
         */
        protected $_sListClass = 'mibtest';

        /**
         * @return string
         */
        public function render()
        {
            parent::render();
            return "mibexample4_list.tpl";
        }
    }
