<?php

use artsoft\db\SourceMessagesMigration;

class m151121_235015_i18n_art_settings_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'art/settings';
    }

    public function getMessages()
    {
        return [
            'General Settings' => 1,
            'Reading Settings' => 1,
            'Site Title' => 1,
            'Site Description' => 1,
            'Admin Email' => 1,
            'Timezone' => 1,
            'Date Format' => 1,
            'Time Format' => 1,
            'Page Size' => 1,
            'Admin Phone' => 1,
            'Admin Facebook' => 1,
            'Admin Instagram' => 1,
            'Phone Mask' => 1,
            'Date Mask' => 1,
            'Time Mask' => 1,
            'Date & Time Mask' => 1,
            'Your settings have been saved.' => 1,
        ];
    }
}