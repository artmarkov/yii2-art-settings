<?php

namespace artsoft\settings\assets;

use yii\web\AssetBundle;

/**
 * SettingsAsset.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class SettingsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/artsoft/yii2-art-settings/assets/source';
    public $css = [
        'css/settings.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'artsoft\assets\ArtAsset'
    ];

}