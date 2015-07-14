<?php namespace Control4\AllFieldTypesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class AllFieldTypesModuleServiceProvider
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\AllFieldTypesModule
 */
class AllFieldTypesModuleServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'admin/all_field_types'           => 'Control4\AllFieldTypesModule\Http\Controller\Admin\AllFieldTypesController@index',
        'admin/all_field_types/create'    => 'Control4\AllFieldTypesModule\Http\Controller\Admin\AllFieldTypesController@create',
        'admin/all_field_types/edit/{id}' => 'Control4\AllFieldTypesModule\Http\Controller\Admin\AllFieldTypesController@edit'
    ];
}
