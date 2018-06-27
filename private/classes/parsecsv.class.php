<?php

class ParseCSV {

	// properties
	public $filename;
	private $header;
	private $data=[];


	// constructor
	public function __construct($filename='') {
		if ( $filename != '' ) {
			$this->filename = $filename;
		}
	}


	// methods
	public function parse() {
		$file = fopen($this->filename, 'r');
		while ( !feof($file) ) {
			$row = fgetcsv($file, 0, ',');
			if ( $row == NULL || $row === false ) { continue; }
			if ( !$this->header ) {
				$this->header = $row;
			} else {
				$this->data[] = array_combine($this->header, $row);	
			}
		}
		fclose($file);
		return $this->data;
	}



}

?>