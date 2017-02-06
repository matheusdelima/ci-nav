<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Codeigniter Navigation Helper
*
* This is a small helper to create dynamic navigation menus in codeigniter.
*
* @author Ramon Lapenta <me@ramonlapenta.com>
*
* @copyright Public Domain
* @license http://ramonlapenta.com/license.txt
*
*/
// menu()  ------------------------------------------------------------------------
if ( ! function_exists('menu'))
{

    /**
     * Menu Walker
     *
     * @author Ramon Lapenta <me@ramonlapenta.com>
     * @author Matheus De Lima Gomes <matheusdelimagomes@gmail.com>
     * @param $items = Array with all itens of menu
     * @param $sel = Key for indentify item of menu active
     * @param $class = Class for Ul menu
     *
     *  @return  array
    */
    function menu( $items, $sel = '', $class = '' )
   {

        if( ! empty( $class ) ) {
            $menu = '<ul class="' . $class . '">';
        } else {
            $menu = '<ul>';
        }

        $id = ( ! empty( $item['id'] ) ) ? ' id="'. $item['id'] . '"' : '';

        foreach( $items as $item ) {

            $current = ( $item['id'] == 'users' ) ? ' class="active"' : '';

            $menu .= '<li' . $current . '>';

            if (isset($item['parent-item']) && is_array($item['parent-item'])) {

                $menu .= '<a href="javascript://" data-toggle="collapse" data-target="#menu-'.$item['id'].'"><i class="'. $item['icon'] .'"></i> ' . $item['title'] . '<i class="fa fa-fw fa-caret-down"></i></a>';
                $menu .= '<ul id="menu-'.$item['id'].'" class="collapse">';

                      foreach ($item['parent-item'] as $value) {
                            $menu .= '<li>';
                            $menu .= '<a href="' .$value['link']. '" title="' .$value['title'] .'">'. $value['title'].'</a>';
                            $menu .= '</li>';
                      }

                $menu.= '</ul>';

            }
            else{

                $menu .= '<a href="' . base_url() . $item['link'] . '"><i class="'. $item['icon'] .'"></i> ' . $item['title'] . '</a>';

           }


            $menu .= '</li>';

        }

        $menu .= '</ul>';
        return $menu;
    }

}
// menup() ------------------------------------------------------------------------
if ( ! function_exists('menup'))
{
    function menup( $items, $sel = '', $class = '', $sep = '|' )
   {
        if( ! empty( $class ) ) {
            $menup = '<p class="' . $class . '">' . "\n";
        } else {
            $menup = '<p>' . "\n";
        }
        $count = count($items);
        $i = 0;
        foreach( $items as $item )
        {
            $id = ( ! empty( $item['id'] ) ) ? ' id="'. $item['id'] . '"' : '';
            $current = ( in_array( $sel, $item ) ) ? ' class="current"' : '';
            $menup .= '<a href="' . base_url() . $item['link'] . '"'.$id . ' ' . $current . '>' . $item['title'] . '</a>' . "\n";
            $i++;
            if( $count != $i )
            {
                $menup .= ' ' . trim( $sep ) . ' ';
            }
        }
        $menup .= '</p>' . "\n";
        return $menup;
    }
}
/* End of file nav_helper.php */
/* Location: ./system/helpers/nav_helper.php */