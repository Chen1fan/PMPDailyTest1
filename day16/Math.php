<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/28
 * Time: 8:40
 */

class Math
{
	public static function find($target, $array){
		for ($i=0;$i<count($array[1]);$i++)
		foreach ($array as $v){
			$arr[] =$v[$i];
		}
		if (in_array($target,$arr)){
			return 'true';
		}
		return 'false';
	}
}
$target = 15;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
print_r(Math::find($target,$array));