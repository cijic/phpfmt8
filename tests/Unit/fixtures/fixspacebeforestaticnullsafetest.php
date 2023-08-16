<?php

class User {
	private ?string $id = null;

	public function setId(string $id): ?static
	{
		$this->id = $id;
		return $this;
	}
}