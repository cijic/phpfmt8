<?php declare (strict_types = 1);

abstract class FOO {
	public array $d = ['a', 'b'];
	public string $a = 'b';
	public static float $b = 0.0;
	public static array $c = ['a', 'b'];
	public ?float $e;
	public static ?float $f;
	abstract protected function zim();
	final public static function bar() {
		$a = array();
		$b = $_GET['user'] ?? 'nobody';
		$c = isset($_GET['user']) ? $_GET['user'] : 'nobody';
	}
}

class Cache extends BaseConfig {

}

class Cache extends BaseConfig implements B {

}