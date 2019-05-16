<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/16
 * Time: 8:40
 */

class Math
{
	public static function calFn($n,$m){
		//将n-m之间的数列出来，可以使用数组区间函数
		$arr = range($n,$m);
		//数组分割字符串
		$str = implode($arr);
		//字符串统计函数，统计1的个数，并返回
		return substr_count($str,1);
	}
}
echo Math::calFn(100,1301);
