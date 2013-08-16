<?php

class SupriReadFilter implements PHPExcel_Reader_IReadFilter {
	private $_startRow = 0;
	private $_endRow = 0;
	private $_columns = array();
	
	
	public function __construct($start, $end, $col) {
		$this->_startRow = $start;
		$this->_endRow = $end;
		$this->_columns = $col;
	}
	
	
	public function readCell($column, $row, $worksheet = '') {
		if($row >= $this->_startRow && $row <= $this->_endRow){
			if(in_array($column, $this->_columns)) {
				return true;
			}
		}
		return false;
	}
	
}