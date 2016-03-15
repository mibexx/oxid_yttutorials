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

        public function loadByIdent($ident)
        {
            $oxid = oxDb::getDb(oxDb::FETCH_MODE_ASSOC)->getOne(
                'SELECT oxid FROM mib_test WHERE mibident = ?',
                array(
                    $ident
                )
            );
            return $this->load($oxid);
        }
    }