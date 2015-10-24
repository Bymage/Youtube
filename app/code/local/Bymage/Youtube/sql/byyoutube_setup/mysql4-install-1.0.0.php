<?php
/**
 * @author Bymage Team
 * @copyright Bymage
 * @package Bymage_Youtube
 */

$installer = $this;
$installer->startSetup();
try {
    $installer->run("
     INSERT INTO `{$this->getTable('cms/page')}` (`title`, `root_template`, `meta_keywords`, `meta_description`, `identifier`, `content_heading`, `content`, `creation_time`, `update_time`, `is_active`, `layout_update_xml`, `custom_theme`, `custom_root_template`, `custom_layout_update_xml`, `custom_theme_from`, `custom_theme_to`)
     VALUES ('Youtube Page',
            'one_column', NULL, NULL,
            'byyoutube', NULL,
            '{{block type=\"byyoutube/config\" block_id=\"byyoutube_config\"}} ',
            NOW(),
            NOW(), '0', NULL, NULL, NULL, NULL, NULL, NULL)
");
}catch(Exception $ex){}

$installer->endSetup();