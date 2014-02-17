<?php
/**
 * Created by PhpStorm.
 * User: tonydspaniard
 * Date: 13/02/14
 * Time: 00:34
 */
namespace dosamigos\leaflet;

use yii\web\AssetBundle;

/**
 * LeafLetAsset Registers widget requires files. Please, use the following in order to override bundles for CDN:
 *
 * ```
 *  return [
 *		// ...
 * 		'components' => [
 * 			'bundles' => [
 * 				'dosamigos\leaftlet\LeafLetAsset' => [
 * 					'sourcePath' => null,
 * 					'js' => [ 'http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js' ],
 * 					'css' => [ 'http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css' ]
 * 				]
 * 			]
 * 		]
 * 	]
 * ```
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\leaflet
 */
class LeafLetAsset extends AssetBundle
{
	public $sourcePath = '@vendor/2amigos/yii2-leaflet-extension/assets';

	public $css = [
		'css/leaftlet.css'
	];

	public function init()
	{
		$this->js = YII_DEBUG ? ['js/leaflet-src.js'] : ['js/leaflet.js'];
	}
}