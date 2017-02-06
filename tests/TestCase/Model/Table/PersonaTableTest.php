<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonaTable Test Case
 */
class PersonaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonaTable
     */
    public $Persona;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persona'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Persona') ? [] : ['className' => 'App\Model\Table\PersonaTable'];
        $this->Persona = TableRegistry::get('Persona', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Persona);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
