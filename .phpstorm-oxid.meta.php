<?php
    /**
     * An helper file for OXID, to provide autocomplete information to your IDE
     * Generated with PhpStorm / PS-143.1770 / OXID Plugin 0.4 on 2016-01-21 17:41:28.
     *
     * @author Daniel Espendiller <daniel@espendiller.net>
     * @see https://github.com/Haehnchen/idea-php-oxid-plugin
     */

    namespace {
        exit("This file should not be included, only analyzed by your IDE");

        class example_start_parent extends Start
        {
        }

        class InvoicepdfOrder_Overview_parent extends Order_Overview
        {
        }

        class InvoicepdfOxOrder_parent extends oxOrder
        {
        }

        trait InvoicepdfOrder_OverviewTrait
        {
            /**
             * Add Languages to parameters.
             *
             * @return string
             * @see \InvoicepdfOrder_Overview::render
             */
            public function render()
            {
            }

            /**
             * Performs PDF export to user (outputs file to save).
             * @see \InvoicepdfOrder_Overview::createPDF
             */
            public function createPDF()
            {
            }

        }

        trait InvoicepdfOxOrderTrait
        {
            /**
             * Set language for pdf generation.
             *
             * @param integer $iLang Language id.
             * @see \InvoicepdfOxOrder::setSelectedLang
             */
            public function setSelectedLang($iLang)
            {
            }

            /**
             * Returns active shop object.
             *
             * @return oxshop $oUser
             * @see \InvoicepdfOxOrder::_getActShop
             */
            protected function _getActShop()
            {
            }

            /**
             * Returns translated string.
             *
             * @param string $sString string to translate
             *
             * @return string
             * @see \InvoicepdfOxOrder::translate
             */
            public function translate($sString)
            {
            }

            /**
             * Formats pdf page footer.
             *
             * @param object $oPdf pdf document object
             * @see \InvoicepdfOxOrder::pdfFooter
             */
            public function pdfFooter($oPdf)
            {
            }

            /**
             * Adds shop logo to page header. Returns position for next texts in pdf.
             *
             * @param object $oPdf pdf document object
             *
             * @return int
             * @see \InvoicepdfOxOrder::pdfHeaderPlus
             */
            public function pdfHeaderPlus($oPdf)
            {
            }

            /**
             * Creating new page with shop logo. Returning position to continue data writing.
             *
             * @param object $oPdf pdf document object
             *
             * @return int
             * @see \InvoicepdfOxOrder::pdfHeader
             */
            public function pdfHeader($oPdf)
            {
            }

            /**
             * Generates order pdf report file.
             *
             * @param string $sFilename name of report file
             * @param int $iSelLang active language
             * @see \InvoicepdfOxOrder::genPdf
             */
            public function genPdf($sFilename, $iSelLang = 0)
            {
            }

            /**
             * Set billing address info to pdf.
             *
             * @param object $oPdf pdf document object
             * @see \InvoicepdfOxOrder::_setBillingAddressToPdf
             */
            protected function _setBillingAddressToPdf($oPdf)
            {
            }

            /**
             * Set delivery address info to pdf.
             *
             * @param object $oPdf pdf document object
             * @see \InvoicepdfOxOrder::_setDeliveryAddressToPdf
             */
            protected function _setDeliveryAddressToPdf($oPdf)
            {
            }

            /**
             * Set order articles info and articles VAT's to pdf.
             *
             * @param object $oPdf pdf document object
             * @param int &$iStartPos text start position from top
             * @param bool $blShowPrice show articles prices / VAT info or not
             * @see \InvoicepdfOxOrder::_setOrderArticlesToPdf
             */
            protected function _setOrderArticlesToPdf($oPdf, &$iStartPos, $blShowPrice = true)
            {
            }

            /**
             * Exporting standard invoice pdf
             *
             * @param object $oPdf pdf document object
             * @see \InvoicepdfOxOrder::exportStandart
             */
            public function exportStandart($oPdf)
            {
            }

            /**
             * Generating delivery note pdf.
             *
             * @param object $oPdf pdf document object
             * @see \InvoicepdfOxOrder::exportDeliveryNote
             */
            public function exportDeliveryNote($oPdf)
            {
            }

            /**
             * Replaces some special characters to HTML compatible symbol codes.
             * SWITCHED OFF NOW ( 2.2 )
             *
             * @param string $sValue initial value
             * @param bool $blReverse (default false) if false - checks if we do have already htmlentities inside
             *
             * @return string
             * @see \InvoicepdfOxOrder::_replaceExtendedChars
             */
            protected function _replaceExtendedChars($sValue, $blReverse = false)
            {
            }

            /**
             * Returns order articles VATS's.
             *
             * @return array
             * @see \InvoicepdfOxOrder::getVats
             */
            public function getVats()
            {
            }

            /**
             * Returns order currency object.
             *
             * @return object
             * @see \InvoicepdfOxOrder::getCurrency
             */
            public function getCurrency()
            {
            }

            /**
             * Returns order currency object.
             *
             * @return object
             * @see \InvoicepdfOxOrder::getSelectedLang
             */
            public function getSelectedLang()
            {
            }

            /**
             * Method returns config param iPaymentTerm, default value is 7;
             *
             * @return int
             * @see \InvoicepdfOxOrder::getPaymentTerm
             */
            public function getPaymentTerm()
            {
            }

            /**
             * PDF language
             *
             * @var int
             * @see \InvoicepdfOxOrder::_iSelectedLang
             */
            protected $_iSelectedLang;
            /**
             * Order arctiles VAT's
             *
             * @var array
             * @see \InvoicepdfOxOrder::_aVATs
             */
            protected $_aVATs;
            /**
             * Cached active shop object
             *
             * @var object
             * @see \InvoicepdfOxOrder::_oActShop
             */
            protected $_oActShop;
            /**
             * Order currency object
             *
             * @var object
             * @see \InvoicepdfOxOrder::_oCur
             */
            protected $_oCur;
        }

        trait example_startTrait
        {
            /**
             * @see \example_start::render
             */
            public function render()
            {
            }

        }

    }