<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2016  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
$sMetadataVersion = '1.1';
$aModule = array(
    'id'            => 'ecs_betterstart',
    'title'         => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>BetterStart</i>',
    'description'   => 'Starthilfe f&uuml;r den OXID eShop!',
    'thumbnail'     => 'ecs.png',
    'version'       => '1.5',
    'author'        => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'         => 'info@ecomstyle.de',
    'url'           => 'https://ecomstyle.de',
    'extend'        => array(
	    'start' => 'ecs/ecs_betterstart/controllers/start_custom'
    ),
    'templates' => array(
        'start_custom.tpl' => 'ecs/ecs_betterstart/views/azure/tpl/start_custom.tpl',
    ),
    'blocks' => array(
        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar_partners', 'file'=>'/views/blocks/sidebar_partners_custom.tpl','position' => '1'),
        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar_shopluperatings', 'file'=>'/views/blocks/sidebar_shopluperatings_custom.tpl')
     ),
    'settings' => array(
        array('group' => 'ecs_main', 'name' => 'ecs_bsstarttpl',    'type' => 'bool',  'value' => '0'),
        array('group' => 'ecs_main', 'name' => 'ecs_bspartnerbox',  'type' => 'bool',  'value' => '0'),
        array('group' => 'ecs_main', 'name' => 'ecs_bsshoplupe',    'type' => 'bool',  'value' => '1')
    )
);
?>
