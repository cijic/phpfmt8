<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;

#[ApiResource(
	processor: 'App\State\UserStateProcessor',
	provider: 'App\State\UserStateProvider',
	operations: [
		new Get(
			input: false,
			output: false,
		),
	],
)]
class User {

}

#[AttributeWithClassNameAndConstants(PDO::class, PHP_VERSION_ID)]

#[FooAttribute]
function foo_func(#[FooParamAttrib('Foo1')] $foo) {}

#[FooAttribute('hello')]
#[BarClassAttrib(42)]
class Foo {
	#[ConstAttr]
	#[FooAttribute(null)]
	private const FOO_CONST = 28;
	private const BAR_CONST = 28;

	#[PropAttr(Foo::BAR_CONST, 'string')]
	private string $foo;

	#[SomeoneElse\FooMethodAttrib]
	public function getFoo(#[FooClassAttrib(28)] $a): string {}
}