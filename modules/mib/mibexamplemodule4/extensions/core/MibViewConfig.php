<?php
        /**
         * OXID extension: MibViewConfig
         */
        class MibViewConfig extends MibViewConfig_parent
        {
            /**
             * @param $ident
             * @return mibtest|null
             */
            public function getDataFromIdent($ident)
            {
                $oTest = oxNew('mibtest');
                if ($oTest->loadByIdent($ident)) {
                    return $oTest;
                }
                return null;
            }
        }