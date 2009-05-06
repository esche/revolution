<?php
/**
 * Import properties from a file
 *
 * @package modx
 * @subpackage processors.element
 */
$modx->lexicon->load('propertyset','element');

/* verify file exists */
if (!isset($_FILES['file'])) return $modx->error->failure($modx->lexicon('properties_import_err_upload'));
$_FILE = $_FILES['file'];
if ($_FILE['error'] != 0) return $modx->error->failure($modx->lexicon('properties_import_err_upload'));

$o = file_get_contents($_FILE['tmp_name']);

$properties = $modx->fromJSON($o);
if (!is_array($properties)) {
    return $modx->error->failure($modx->lexicon('properties_import_err_invalid'));
}

$data = array();
foreach ($properties as $property) {
    $data[] = array(
        $property['name'],
        empty($property['desc']) ? '' : $property['desc'],
        $property['xtype'],
        $property['options'],
        $property['value'],
        false, /* overridden set to false */
    );
}

return $modx->error->success('',$data);