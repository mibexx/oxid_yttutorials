<?php

    class mibexample4_main extends oxAdminDetails
    {

        public function render()
        {
            parent::render();
            $soxId = $this->_aViewData["oxid"] = $this->getEditObjectId();


            $oTest = oxNew("mibtest");
            if ($soxId != "-1" && isset($soxId)) {
                $oTest->load($soxId);
            }

            $this->_aViewData["edit"] = $oTest;


            return "mibexample4_main.tpl";
        }

        /**
         * Saves content contents.
         *
         * @return mixed
         */
        public function save()
        {
            parent::save();
            $soxId = $this->getEditObjectId();
            $aParams = $this->getConfig()->getRequestParameter("editval");

            $oTest = oxNew("mibtest");
            if ($soxId != "-1") {
                $oTest->loadInLang($this->_iEditLang, $soxId);
            } else {
                $aParams['mib_test__oxid'] = null;
            }

            $oTest->assign($aParams);
            $oTest->save();

            $this->setEditObjectId($oTest->getId());
        }
    }
