<?php 

/**
 * Doc comment short description: examen de despliegue
 * 
 * PHP version 7.4
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Conversor
 * @package   Conversor
 * @author    Mikellf <mikellf2000@hotmail.com>
 * @copyright 2020 Arista Web Studio
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */


/**
 * Short description for class
 *
 * @category  Conversor
 * @package   Conversor
 * @author    Mikellf <mikellf2000@hotmail.com>
 * @copyright 2020 Arista Web Studio
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */

class Conversor
{   private $dolar = 1.0835;
    private $yen = 119.05;
    /**
     * Doc comment for function sumar.
     * 
     * @param $dolar operador
     * 
     * @return $dolar*$euro
     */
    public function eurosADolares($euros)
    {
        
        return $this->dolar * $euros;
    }


    /**
     * Doc comment for function sumar.
     * 
     * @param $yen operador
     * 
     * @return $yen*$euro
     */
    public function eurosAYenes($euros)
    {
        
        return $this->yen * $euros;
    }

}


?>