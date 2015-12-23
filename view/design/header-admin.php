<?php
/*
//exemples d'utilisation :
//========================

//compatible avec navbar-sidebar uniquement
$menu_recursif = array(
    'url' => '#',
    'icon' => '<i class="glyphicon glyphicon-user"></i>',
    'recursive_menu' => array(
        'Sub 1' => array(
            'url' => '#',
            'icon' => '<i class="glyphicon glyphicon-user"></i>',
        ),
        'Sub 2' => array(
            'url' => '#',
            'icon' => '<i class="glyphicon glyphicon-user"></i>',
            'recursive_menu' => array(
                'SubSub 1' => array(
                    'url' => '#',
                    'icon' => '<i class="glyphicon glyphicon-user"></i>',
                ),
                'SubSub 2' => array(
                    'url' => '#',
                    'icon' => '<i class="glyphicon glyphicon-user"></i>',
                ),
            ),
        ),
    ),
    'badge' => 1,
);

//compatible avec navbar-toplinks et navbar-breadcrumb uniquement
$menu_avec_dropdown = array(
    'url' => '#',
    'icon' => '<i class="glyphicon glyphicon-user"></i>',
    'dropdown' => array(
        'block' => 'dummy/messages',
        'data' => ''
    ),
    'badge' => 2,
);

//compatible avec navbar-toplinks, navbar-breadcrumb et navbar-sidebar
$menu_simple = array(
    'url' => '#',
    'icon' => '<i class="glyphicon glyphicon-user"></i>',
    'badge' => 3,
);

//affectation d'un menu
//=====================

$data['navbar-sidebar'] = array (
    'Texte 1' => $menu_recursif,
    'divider',
    $menu_simple,
);

$data['navbar-toplinks'] = array (
    'Texte 1' => $menu_avec_dropdown,
    'divider',
    $menu_simple,
);

$data['navbar-breadcrumb'] = $data['navbar-toplinks'];
*/
$is_iframe_class = 'not-an-iframe';
if ($request->get('int', 'is_iframe')) {
    $is_iframe_class = 'is-an-iframe';
}
Clementine::getBlock('bootstrap3/cssjs', $data, $request);
if (!$request->AJAX && !(isset($data['return_json']) && $data['return_json'])) {
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=<?php echo __HTML_ENCODING__; ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php
    if (!empty($data['meta_title'])) {
        echo $data['meta_title'] . ' - ';
    }
    echo Clementine::$config['clementine_global']['site_name'];
?></title>
    <meta name="description" content="<?php
    if (!empty($data['meta_description'])) {
        echo $data['meta_description'] . ' - ';
    }
?>" />
    <meta name="keywords" content="<?php
    if (!empty($data['meta_keywords'])) {
        echo $data['meta_keywords'];
    }
?>" />
        <meta name="robots" content="index, follow, all" />
<?php
    Clementine::getBlock('cssjs/head', $data, $request);
?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body class="<?php echo $is_iframe_class; ?>">
        <div id="wrapper">
<?php
    Clementine::getBlock('design/header-admin-navbar', $data, $request);
?>
            <div id="page-wrapper">
<?php
    Clementine::getBlock('design/header-admin-breadcrumb', $data, $request);
}
