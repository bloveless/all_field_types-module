<?php namespace Control4\AllFieldTypesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class AllFieldTypesModule
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\AllFieldTypesModule
 */
class AllFieldTypesModule extends Module
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