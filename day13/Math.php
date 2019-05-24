<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/24
 * Time: 8:41
 */

class Math
{
	public static function Add($num1,$num2){
		$a[] = $num1;
		$a[] = $num2;
		return array_sum($a);
	}

}
print_r(Math::Add(11,28));