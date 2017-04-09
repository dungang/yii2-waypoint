<?php
/**
 * Author: dungang
 * Date: 2017/4/9
 * Time: 14:53
 */

namespace dungang\waypoint;


use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class WayPointsWidget extends Widget
{
    public $options = [];
    public $clientOptions = [];
    public function init() {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::beginTag('div', $this->options);
    }
    /**
     * @inheritdoc
     */
    public function run() {
        echo Html::endTag('div');
        $this->registerClientScript();
    }
    protected function registerClientScript() {
        $id = $this->options['id'];
        $view = $this->getView();
        WayPointsAsset::register($view);
        $options = Json::encode($this->clientOptions);
        $view->registerJs("jQuery('#" . $id . "').waypoint($options)");
    }
}