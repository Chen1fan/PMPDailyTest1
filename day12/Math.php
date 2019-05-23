<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/23
 * Time: 8:38
 */

class Math
{
	public static function Sum_Solution($n) {
		$arr = range(1,$n);
		return array_sum($arr);
	}
}
$n=8;

print_r(Math::Sum_Solution($n));