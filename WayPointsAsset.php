<?php
/**
 * Author: dungang
 * Date: 2017/4/9
 * Time: 14:52
 */

namespace dungang\waypoint;


use yii\web\AssetBundle;

class WayPointsAsset extends AssetBundle
{
    public $sourcePath = '@bower/waypoints/lib';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        if (YII_DEBUG) {
            $this->js = ['jquery.waypoints.js'];
        } else {
            $this->js = ['jquery.waypoints.min.js'];
        }
    }
}