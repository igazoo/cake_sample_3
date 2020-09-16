<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BoadsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BoadsTable Test Case
 */
class BoadsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BoadsTable
     */
    public $Boads;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.boads'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Boads') ? [] : ['className' => BoadsTable::class];
        $this->Boads = TableRegistry::getTableLocator()->get('Boads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Boads);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
