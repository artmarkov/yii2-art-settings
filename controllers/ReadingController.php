<?php

namespace artsoft\settings\controllers;

/**
 * ReadingController implements Reading Settings page.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class ReadingController extends SettingsBaseController
{
    public $modelClass = 'artsoft\settings\models\ReadingSettings';
    public $viewPath = '@vendor/artsoft/yii2-art-settings/views/reading/index';

}