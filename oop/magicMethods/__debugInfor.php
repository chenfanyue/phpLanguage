<?php
class C {
	private $prop;
	public function __construct($val) {
		$this->prop = $val;
	}
	public function __debugInfo() {
		return [ 
				'propSquared' => $this->prop ** 5 
		];
	}
}

var_dump ( new C ( 2 ) );
