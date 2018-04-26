<?php

namespace proeflesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class proeflesBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
