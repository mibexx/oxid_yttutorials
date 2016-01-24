<?php

    class liveshopping_main extends oxAdminDetails
    {
        /**
         * @return string
         */
        public function render()
        {
            parent::render();

            return "liveshopping_main.tpl";
        }

        /**
         * @return void
         */
        public function save()
        {

        }
    }
