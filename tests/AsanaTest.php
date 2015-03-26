<?php

use JeroenDesloovere\Asana\tests;

// required to load
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../examples/credentials.php';

/*
 * This file is part of the Asana PHP class from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\Asana\Asana;

/**
 * In this class we test all generic functions from Asana.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class AsanaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testEchoPhrase()
    {
        $api = new Asana();

        $this->assertEquals(true, true);
    }
}
