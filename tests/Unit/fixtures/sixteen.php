<?php

return new class {
	public function foo() {
		return new class {
			public function foo() {
				if (1 === 2) {
				}
				return new class {
					public function faa() {
						do {

						} while (1);
					}
				};
			}
		};
	}
};