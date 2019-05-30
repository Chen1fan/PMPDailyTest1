<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/30
 * Time: 8:40
 */

class Math
{
	public static function  numberOf1($n){
		$num =decbin($n);
		$a= substr_count($num,1);
		return $n.'的二进制为'.$num.'  其中1有'.$a.'个';
	}
}
print_r(Math::numberOf1(10));