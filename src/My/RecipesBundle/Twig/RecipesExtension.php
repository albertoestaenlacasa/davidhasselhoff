<?php

namespace My\RecipesBundle\Twig;


class RecipesExtension extends \Twig_Extension { 

	public function getFilters()
	{ 
		return array( new \Twig_SimpleFilter('textoSizeAlberto', array($this, 'textoSizeAlberto')), ); 
	}

	public function textoSizeAlberto($receta)
	{

		if ($receta->getDifficulty() == 'facil')   return '20';

		if ($receta->getDifficulty() == 'medio')   return '40';

		if ($receta->getDifficulty() == 'dificil') return '60';

		return '0';

	}


	public function getName()
	{
		return 'my_recipes_extension';
	}


}