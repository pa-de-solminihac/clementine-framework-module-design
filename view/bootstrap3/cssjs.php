<?php
$cssjs = $this->getModel('cssjs');
$this->getParentBlock($data, $request);
$cssjs->register_css('module_design-timeline', array(
    'src' => __WWW_ROOT_DESIGN__ . '/skin/css/timeline.css'
));
$cssjs->register_css('module_metismenujs-metismenu', array(
    'src' => __WWW_ROOT_METISMENUJS__ . '/skin/css/metisMenu.css',
));
$cssjs->register_css('module_design-sb-admin-2', array(
    'src' => __WWW_ROOT_DESIGN__ . '/skin/css/sb-admin-2.css'
));
$cssjs->register_css('module_fontawesome-fontawesome', array(
    'src' => __WWW_ROOT_FONTAWESOME__ . '/skin/css/font-awesome.min.css'
));
$cssjs->register_css('module_design-clementine-design', array(
    'src' => __WWW_ROOT_DESIGN__ . '/skin/css/clementine-design.css'
));
$cssjs->register_foot('module_metismenujs-metismenu', array(
    'src' => __WWW_ROOT_METISMENUJS__ . '/skin/js/metisMenu.js',
));
$cssjs->register_foot('module_metismenujs-metismenu_foot',
    $this->getBlockHtml('metismenujs/js_metismenu', $this->data, $request)
);
$cssjs->register_foot('module_design-sbadmin2',
    $this->getBlockHtml('design/js_sbadmin2', $this->data, $request)
);
