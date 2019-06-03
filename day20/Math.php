<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/6/3
 * Time: 8:44
 */

class Math
{
	public static function CountSteps($x,$y){
		if ($x==1 && $y==1){
			return 2;
		}
		if ($x==1 && $y!=1){
			return $y+1;
		}
		if ($x!=1 && $y==1){
			return $x+1;
		}
		return ($x+1)*($y);
	}
}
$x=2;$y=6;
print_r(Math::CountSteps($x,$y));