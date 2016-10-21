<?php 

namespace zheselevko\material;

use yii\web\AssetBundle;

/**
* 
*/
class MaterialDesingAsset extends AssetBundle
{
	
public 	$sourcePath = '@bower/materialize';
public $css = [
		'dist/css/material.min.css'	
	];
	public $js = [	
		'dist/js/material.min.js'	
	];	
}