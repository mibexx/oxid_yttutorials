<?php
    class mibliveshopping extends oxBase
    {
        /**
         * @var string
         */
        protected $_sClassName = 'mibliveshopping';

        /**
         * @var null
         */
        protected $_sCoreTable = 'mib_liveshoppinglist';

        /**
         * mibliveshopping constructor.
         */
        public function __construct()
        {
            parent::__construct();
            $this->init($this->_sCoreTable);
        }
    }