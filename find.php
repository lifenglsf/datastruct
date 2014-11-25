<?php
Class Find{
	private $isFind = FALSE;
	public function __construct(){

	}

	//监视哨查找
	public function monitorFind($source,$needle){
		array_unshift($source, $needle);
		for($i=count($source)-1;$i>=0;$i--){
			if($source[$i] == $needle){
				$key = $i;
				$this -> isFind = TRUE;
				break;
			}
		}
		if($this -> isFind ===FALSE || $key == 0){
			echo "未找到".$needle."元素";
		}else{
			echo "找到元素".$needle."为第".($i)."个位置";
		}

	}
}
$find = new Find();
$res = $find ->monitorFind(array(1,2,3,4,5),2);
//执行结果：
//找到元素2为第2个位置

