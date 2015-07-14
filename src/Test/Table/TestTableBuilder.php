<?php namespace Control4\TestsModule\Test\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class TestTableBuilder
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\TestsModule\Test\Table
 */
class TestTableBuilder extends TableBuilder
{
    protected $actions = [
        'edit',
        'delete'
    ];

    protected $buttons = [
        'edit',
        // 'delete'
    ];
}