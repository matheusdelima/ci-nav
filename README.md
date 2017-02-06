CodeIgniter Navigation Helper
=============================

This is a small helper to create dynamic navigation menus with icons and sub-menu in codeigniter.

The idea is to easily have a way to show a complex list or paragraph menu with the current section highlighted.

How to use it
-------------

The helper is pretty easy to use. You just need an array with the menu:

$config['nav_painel'] = array(
    'Dashboard' => array(
        'id' => 'dashboard',
        'title'  => 'Dashboard',
        'icon' => 'fa fa-fw fa-dashboard'
        'link'   => 'painel'
    ),
    'Users' => array(
        'id' => 'users',
        'title'  => 'Users',
        'icon' => 'fa fa-fw fa-user'
        'link'   => 'painel/users'
    ),
);

And then call the menu

$data->['main_menu'] = menu($items, $selected_item, $css_class);

Both the selected item and the css class are optional parameters, if not sent, the menu will be created with no highlighted item and it will not have a class added to the list.

There is also a menup() function that creates a menu inside a paragraph tag, and includes a separator variable.

    $data->['footer_menu'] = menup($items, $selected_item, $css_class, $separator);

Requeriments
------------

The helper uses the function base_url() which is part of the url_helper, you will need to autoload the URL helper.

Options
-------

You can create a navigation config file with all your arrays, and save it in 'application/config/', autoload the file and you'll have all menu items available for the application:

    $items = $config['nav_painel'];
