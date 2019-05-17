<?php
/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2019/5/17
 * Time: 8:43
 */

class math
{
	//丑数算法
	public static function GetUglyNumber_Solution($index){
		$num=0;//记录丑数个数
		$arr = range(1,$index);//将丑数存入数组
//		for ($i=0;$i<count($arr);$i++){
//
//		}
//		for ($index=1;;$index++)

			if ($index==0){
				return '0不是丑数';
			}
			while ($index%2==0) {
				$index/=2;
			}
			while($index%3==0){
				$index/=3;
			}
			while ($index%5==0){
				$index/=5;
			}
			if ($index==1){
				return '丑数';
			}else{
				return '非丑数';
			}

		}

//	}
}
print_r(math::GetUglyNumber_Solution(26));