<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Codeigniter Navigation Helper
*
* This is a small helper to create dynamic navigation menus in codeigniter.
*
* @author Ramon Lapenta <me@ramonlapenta.com>
* @copyright Public Domain
* @license http://ramonlapenta.com/license.txt
*
*/

$config['nav_painel'] = array(
    'dashboard' => array(
        'id' => 'dashboard',
        'title'  => 'Dashboard',
        'icon' => 'fa fa-fw fa-dashboard',
        'link'   => 'painel'
        ),
    'users' => array(
        'id' => 'users',
        'title'  => 'Users',
        'icon' => 'fa fa-fw fa-user',
        'link'   => 'painel/users',
        'parent-item' => array(
            'all-users' => array(
                'id' => 'allusers',
                'title'  => 'All Users',
                'link'   => 'painel/users',
                ),
            'create-user ' => array(
                'id' => 'createusers',
                'title'  => 'Create User',
                'link'   => 'painel/users/create-user',
                )
            ),
        ),
    );


/* End of file nav.php */
/* Location: ./application/config/nav.php */