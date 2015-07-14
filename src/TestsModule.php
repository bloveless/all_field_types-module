<?php namespace Control4\TestsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class TestsModule
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\TestsModule
 */
class TestsModule extends Module
{
    /**
     * The module icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-book';

    /**
     * The addon sections.
     *
     * @var array
     */
    protected $sections = [
        'tests' => [
            'buttons' => [
                'new_test',
            ]
        ]
    ];
}