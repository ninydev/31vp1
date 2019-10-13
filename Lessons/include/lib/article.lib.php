<?php

class Article {
	var $header;
	var $body;
	var $footer;
	
	public function Print () {
		echo " Class " . $this->header;
	}
 }