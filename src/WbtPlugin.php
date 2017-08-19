<?php

namespace wbtranslator\wbt;

use yii\db\Exception;

/**
 * wbt-plugin module definition class
 */
class WbtPlugin extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'wbtranslator\wbt\controllers';

    /**
     * @var array
     */
    public $langMap;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'wbtranslator\wbt\commands';
        }
    }
}
