<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class Control4ModuleTestsCreateTestsFields extends Migration
{
    /**
     * The module fields
     *
     * @var array
     */
    protected $fields = [
        'text'        => [
            'type'        => 'anomaly.field_type.text',
        ],
        'slug'        => [
            'type'        => 'anomaly.field_type.slug',
            'config'      => [
                'slugify' => 'text',
                'type'    => '_'
            ]
        ],
        'addon'       => [
            'type'        => 'anomaly.field_type.addon',
        ],
        'boolean'     => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => false,
                'on_color'      => 'danger',
                'off_color'     => 'info',
                'on_text'       => 'anomaly.field_type.boolean::choice.yes',
                'off_text'      => 'anomaly.field_type.boolean::choice.no'
            ]
        ],
        'checkboxes'  => [
            'type'   => 'anomaly.field_type.checkboxes',
            'config' => [
                'default_value' => '1',
                'options' => "1:test 1\n2:test 2\n3:test 3"
            ]
        ],
        'colorpicker' => [
            'type'        => 'anomaly.field_type.colorpicker',
        ],
        'country'     => [
            'type'        => 'anomaly.field_type.country',
        ]
    ];
}
