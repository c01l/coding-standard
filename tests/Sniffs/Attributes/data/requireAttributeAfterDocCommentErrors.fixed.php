<?php

/** Class comment */
#[Attribute1, Attribute2('var'), Attribute3(option: PDO::class, option2: true, option3: 'False')]
#[Attribute4(), Attribute5]
class Whatever
{

	/**
	 * Method comment
	 */
	#[Attribute1, Attribute2('var'), Attribute3(option: PDO::class, option2: true, option3: 'False')]
	#[Attribute4(), Attribute5]
	public function method(
		/** @param int $parameter */
		#[Attribute1] #[Attribute2] #[Attribute3]

		#[Attribute4] #[Attribute5] #[Attribute6]
		$parameter
	)
	{
	}

}
