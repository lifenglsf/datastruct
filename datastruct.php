<?php
Class linearList{
	private $sequenceTable;
	private $MAXSIZE=10;
	private $error;
	private $succeMsg = array();
	private $length;
	//初始化线性表
	function initList(){
		$this -> sequenceTable = array();
		$this -> length = 0;
	}
	//销毁线性表
	function destroyList(){
		$this -> sequenceTable = null;
		$this -> length = 0;
	}

	function clearList(){
		$this -> sequenceTable = array();
		$this -> length = 0;
	}
	function ListEmpty(){
		if(!is_array($this -> sequenceTable)){
			echo "线性表不存在";
			exit;
		}else{
			if(empty($this -> sequenceTable)){
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}


	function listLength(){
		if(is_array($this -> sequenceTable)){
			return $this -> length;
		}
	}

	function getElem($pos){
		if($pos > $this -> length || $pos <0){
			echo "溢出";
			exit ;
		}else{
			return $this -> sequenceTable[$pos];
		}
	}

	function LocateItem(){

	}

	function PriorElem($pos){
		if($pos>$this -> length || $pos < 1 ){
			echo "溢出";
			exit;
		}else{
			return $this -> sequenceTable[$pos -1];
		}
	}

	function NextElem($pos){
		if($pos >= $this -> length || $pos < 0){
			echo "溢出";
			exit;
		}else{
			return $this -> sequenceTable[$pos+1];
		}
	}

	function listInsert($pos,$data){
		if($pos < 1 || $pos > $this -> length+1){
			echo "溢出";
			exit;
		}
		if($this -> length == 0){
			$this -> sequenceTable = array($data);
		}else{
			
			for($i=$this -> length;$i>=$pos;$i--){
				$this -> sequenceTable[$i] = $this -> sequenceTable[$i-1];
			}
			$this -> sequenceTable[$pos-1] = $data;
		}
		$this -> length++;

		return $this -> sequenceTable;
	}
	function listDelete($pos){
		if($pos > $this -> length || $pos < 1){
			echo "溢出";
			exit;
		}
		if(isset($this -> sequenceTable) &&（is_array($this-> sequenceTable)){
			if($i == $this -> length){
				unset($this -> sequenceTable[$pos-1]);
			}else{
				for($i=$pos;$i<$this -> length;$i++){
					$this -> sequenceTable[$i-1] = $this -> sequenceTable[$i];
				}
				unset($this -> sequenceTable[$this -> length-1]);
			}
			
		}
		$this -> length--;
		return $this -> sequenceTable;
	}

	function listTraverse(){

	}

	/*function initList($arr,$n){
		if($n > MAXSIZE){
			$this -> errno = array('msg' => '对不起，长度超出限制，最多只能'.MAXSIZE.'长度');
		}elseif($n<0){
			$this -> errno = array('msg' => '对不起，长度不能为负数');
		}elseif($n == 0){
			$this -> sequenceTable = array();
			$this -> succeMsg = array('msg' => '你创建了一个空表');
			$this -> length = n;
		}else{
			$this -> sequenceTable = $arr;
			$this -> succeMsg = array('msg' => '你创建了一个表');
			$this -> length = n;
		}
	}
	public function initSequence(){
		$this -> sequenceTable = array(1,2,3,4,5,6,7,89,10);
	}
	function addElementToSequence($pos,$data,$flag){
		if($flag == "before"){

		}elseif($flag == "after"){

		}else{
			return $this -> sequenceTable;
		}
	}	
}*/
}


$obj = new linearList();
$list = $obj -> initList();
//创建第一个元素
$first = $obj -> listInsert(1,1);
$second = $obj -> listInsert(2,2);
$third = $obj -> listInsert(3,3);
$fourth = $obj -> listInsert(4,4);
$fifth = $obj -> listInsert(5,5);
$sixth = $obj -> listInsert(6,6);
$seventh = $obj -> listInsert(7,7);
$eighth = $obj -> listInsert(8,8);
$ninth = $obj -> listInsert(9,9);
$tenth = $obj -> listInsert(10,10);


$tenth1 = $obj -> listInsert(3,15);
print_r($first);
echo "<hr/>";
print_r($second);
echo "<hr/>";
print_r($third);
echo "<hr/>";
print_r($fourth);
echo "<hr/>";
print_r($fifth);
echo "<hr/>";
print_r($sixth);
echo "<hr/>";
print_r($seventh);
echo "<hr/>";
print_r($eighth);
echo "<hr/>";
print_r($ninth);
echo "<hr/>";
print_r($tenth);
echo "<hr/>";
print_r($tenth1);