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
        'id'          => 'mibexamplemodule4',
        'title'       => 'Example Module #4',
        'description' => 'Beispiel Backend Erweiterung',
        'version'     => '1.0',
        'author'      => 'Mibexx',
        'extend'      => array(
            'article_main' => 'mib/mibexamplemodule4/extensions/controllers/admin/mibexamplemodule4_article_main'
        ),
        'files'       => array(
            'mibtest'          => 'mib/mibexamplemodule4/application/models/mibtest.php',
            'mibexample4'      => 'mib/mibexamplemodule4/application/controllers/admin/mibexample4.php',
            'mibexample4_list' => 'mib/mibexamplemodule4/application/controllers/admin/mibexample4_list.php',
            'mibexample4_main' => 'mib/mibexamplemodule4/application/controllers/admin/mibexample4_main.php'
        ),
        'blocks'      => array(
            array(
                'template' => 'article_main.tpl',
                'block'    => 'admin_article_main_form',
                'file'     => 'application/views/admin/blocks/mibarticle_main.tpl'
            ),
        ),
        'templates'   => array(
            'mibexample4.tpl' => 'mib/mibexamplemodule4/application/views/admin/tpl/mibexample4.tpl',
            'mibexample4_list.tpl' => 'mib/mibexamplemodule4/application/views/admin/tpl/mibexample4_list.tpl',
            'mibexample4_main.tpl' => 'mib/mibexamplemodule4/application/views/admin/tpl/mibexample4_main.tpl'
        )
    );
