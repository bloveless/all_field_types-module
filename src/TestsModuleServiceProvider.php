<?php namespace Control4\TestsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class TestsModuleServiceProvider
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\TestsModule
 */
class TestsModuleServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'admin/tests'           => 'Control4\TestsModule\Http\Controller\Admin\TestsController@index',
        'admin/tests/create'    => 'Control4\TestsModule\Http\Controller\Admin\TestsController@create',
        'admin/tests/edit/{id}' => 'Control4\TestsModule\Http\Controller\Admin\TestsController@edit'
    ];
}
