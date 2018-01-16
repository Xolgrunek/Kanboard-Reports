<?php

namespace Kanboard\Plugin\KanboardReports;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Kanboard-Reports';
    }

    public function getPluginDescription()
    {
        return t('Ability to run reports up to 90 days in the past');
    }

    public function getPluginAuthor()
    {
        return 'Elfmagi';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/elfmagi/Kanboard-Reports';
    }
}

