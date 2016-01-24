<?php
    /**
     * This file is part of OXID eShop Community Edition.
     *
     * OXID eShop Community Edition is free software: you can redistribute it and/or modify
     * it under the terms of the GNU General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     *
     * OXID eShop Community Edition is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU General Public License for more details.
     *
     * You should have received a copy of the GNU General Public License
     * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
     *
     * @link      http://www.oxid-esales.com
     * @copyright (C) OXID eSales AG 2003-2014
     * @version   OXID eShop CE
     */

    /**
     * Metadata version
     */
    $sMetadataVersion = '1.0';

    /**
     * Module information
     */
    $aModule = array(
        'id'          => 'liveshopping',
        'title'       => 'Liveshopping',
        'description' => 'Unser Liveshopping-Modul',
        'version'     => '1.0',
        'author'      => 'Mibexx',
        'extend'      => array(),
        'files'       => array(
            'liveshopping'      => 'mib/liveshopping/application/controllers/admin/liveshopping.php',
            'liveshopping_list' => 'mib/liveshopping/application/controllers/admin/liveshopping_list.php',
            'liveshopping_main' => 'mib/liveshopping/application/controllers/admin/liveshopping_main.php',
            'mibliveshopping'   => 'mib/liveshopping/application/models/mibliveshopping.php'
        ),
        'templates'   => array(
            'liveshopping.tpl'      => 'mib/liveshopping/application/views/admin/tpl/liveshopping.tpl',
            'liveshopping_list.tpl' => 'mib/liveshopping/application/views/admin/tpl/liveshopping_list.tpl',
            'liveshopping_main.tpl' => 'mib/liveshopping/application/views/admin/tpl/liveshopping_main.tpl',
        ),
    );
