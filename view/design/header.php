<?php
$is_iframe_class = 'not-an-iframe';
$is_iframe = $request->get('int', 'is_iframe');
if ($is_iframe) {
    $is_iframe_class = 'is-an-iframe';
}
$this->getBlock('bootstrap3/cssjs', $data, $request);
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
    $this->getBlock('cssjs/head', $data, $request);
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
    if (!$is_iframe) {
        $this->getBlock('design/header-navbar', $data, $request);
        $this->getBlock('design/header-breadcrumb', $data, $request);
    }
}
