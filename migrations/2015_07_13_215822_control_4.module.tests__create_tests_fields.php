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
        'text'  => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'placeholder' => 'Text Placeholder Test'
            ]
        ],
        'slug'  => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'text',
                'type' => '_'
            ]
        ],
        'addon' => 'anomaly.field_type.addon',
        'boolean' => [
            'type' => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => false,
                'on_color'      => 'success',
                'off_color'     => 'default',
                'on_text'       => 'anomaly.field_type.boolean::choice.yes',
                'off_text'      => 'anomaly.field_type.boolean::choice.no'
            ]
        ],
    ];
}
