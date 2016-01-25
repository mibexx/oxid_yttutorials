<?php

    class mibtest extends oxI18n
    {
        protected $_sClassName = 'mibtest';

        /**
         * Class constructor
         *
         * @return null
         */
        public function __construct()
        {
            parent::__construct();
            $this->init('mib_test');
        }
    }