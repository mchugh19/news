<?php
/**
 * ownCloud - News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Bernhard Posselt <dev@bernhard-posselt.com>
 * @copyright Bernhard Posselt 2015
 */

class CommandTest extends \PHPUnit_Framework_TestCase {

    public function testCommandOk() {
        $command = __DIR__ . '/../../../../../occ news:create-search-indices';
        exec($command, $_, $success);

        $this->assertSame(0, $success);
    }

}
