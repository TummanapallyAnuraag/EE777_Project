<?php
	function read_csv($filename){
		$file = fopen($filename,"r");
		$data = array();
		while(! feof($file)){
			if( $temp = fgetcsv($file) ){
				$data[] = $temp[0];
			}
		}
		fclose($file);
		$data = array_reverse($data);
		$ret = "<ul>";
		foreach ($data as $key=>$entry) {
			$ret .= "<li>".$entry."</li>";
		}
		$ret .= "</ul>";
		return $ret;
	}

	function clear_csv($filename){
		$file = fopen($filename,"w");
		fclose($file);
	}
