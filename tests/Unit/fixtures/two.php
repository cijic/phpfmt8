<?php

enum Enum {
case A;
case B;
}

class TestClass implements MyInterface {
	public function __construct(
		public readonly $v
	) {

	}

	public function handle() {
		match ($x) {
			$a => 1,
		}
	}
}