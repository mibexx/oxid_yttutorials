<?php

    class liveshopping_List extends oxAdminList
    {
        /**
         * @var string
         */
        protected $_sThisTemplate = 'liveshopping_list.tpl';

        /**
         * @var string
         */
        protected $_sListClass = 'mibliveshopping';

        /**
         * @return string
         */
        public function render()
        {
            parent::render();
            return $this->_sThisTemplate;
        }
    }
