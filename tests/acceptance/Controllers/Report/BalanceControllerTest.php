<?php
/**
 * BalanceControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

namespace Report;

use TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-12-10 at 05:51:42.
 */
class BalanceControllerTest extends TestCase
{


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @covers \FireflyIII\Http\Controllers\Report\BalanceController::general
     */
    public function testGeneral()
    {
        $this->be($this->user());
        $this->call('get', route('report-data.balance.general', ['1', '20120101', '20120131']));
        $this->assertResponseStatus(200);
    }
}
