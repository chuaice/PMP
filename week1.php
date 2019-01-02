<?php
	// 乘法表方法
	function Cheng()
	{
		for ($i=1; $i <= 9; $i++) 
		{ 
			echo "<table border='1'>";
			echo "<tr>";
			for ($j=1; $j <= $i; $j++) 
			{ 
				echo "<td>";
				echo $j."*".$i."=".$j*$i;
				echo "</td>";
			}
			echo "</tr>";
			echo "</table>";
		}
		 
	}
	// 杨辉三角行数
	$num = 10;
	// 杨辉三角方法
	function Yang($num)
	{
		$arr = array();
		for ($i=1; $i < $num; $i++) 
		{ 
			for ($j=1; $j <= $i; $j++) 
			{ 
				if ($j == 1 || $j == $i) 
				{
					echo $arr[$i][$j]=1;
				}else
				{
					echo $arr[$i][$j] = $arr[$i-1][$j-1]+$arr[$i-1][$j];
				}
				echo "     ";
			}
			echo "<br>";
		}
	}
	// 水仙花数字
	$number = 127;
	// 水仙花方法
	function Shui($number)
	{
		$len = strlen($number);
		$shui = 0;
		for ($i=0; $i < $len; $i++) 
		{ 
			$shui = $shui+$number[$i]*$number[$i];
		}
		if ($number == $shui) 
		{
			echo "yes";
		}else
		{
			echo "no";
		}
	}
	shui($number);
?>