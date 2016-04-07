<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vl', array (
  'messages' => 
  array (
    'STR_FIRSTWORD' => 'aquesta es la primera paraula',
    'STR_SECONDWORD' => 'Segona paraula',
  ),
));


return $catalogue;
