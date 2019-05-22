<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/22
 * Time: 8:37
 */

class Math
{
	public static function ReverseSentence($str){
		//字符串分割数组
		$arr = explode(' ',$str);
		//逆序排序
		$arr = array_reverse($arr);
		//分割成字符串并返回
		return implode(' ',$arr);
	}
}
$str = 'student. a am I';
//打印输出，测试数据
print_r(Math::ReverseSentence($str));