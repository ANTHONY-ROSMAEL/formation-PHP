<?php

// dossier dans lequel on est située.

//var_drump(__dir__);

/**include_once permet d'inclure le fichier une seule fois et UNIQUE fois
 * -----------------------------------------------------
 * include permet d'inclure le fichier autant de fois que souhaité.
 */

include_once 'a.php';
include 'a.php';
include 'a.php';
include_once 'a.php'; // Ne s'affiche pas...
include_once 'c.php'; // Ne s'affichera pas
# include 'c.php';  //Warning: include_once(): Failed opening 'c.php'

require 'b.php';
require_once 'b.php'; // ne s'affichera pas ...
require_once 'b.php'; // ne s'affichera pas ...

require_once 'c.php'; // Fatal:error require_once()
echo 'reste du site ...';

/**include : genere un warning, le script continue normalement
 * require : génère un fatal error , le script s'arrête.
 */