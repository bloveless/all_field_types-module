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
        'text'         => [
            'type' => 'anomaly.field_type.text',
        ],
        'slug'         => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'text',
                'type'    => '_'
            ]
        ],
        'addon'        => [
            'type' => 'anomaly.field_type.addon',
        ],
        'boolean'      => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => false,
                'on_color'      => 'danger',
                'off_color'     => 'info',
                'on_text'       => 'anomaly.field_type.boolean::choice.yes',
                'off_text'      => 'anomaly.field_type.boolean::choice.no'
            ]
        ],
        'checkboxes'   => [
            'type'   => 'anomaly.field_type.checkboxes',
            'config' => [
                'options' => "1:test 1\n2:test 2\n3:test 3"
            ]
        ],
        'colorpicker'  => [
            'type' => 'anomaly.field_type.colorpicker',
        ],
        'country'      => [
            'type' => 'anomaly.field_type.country',
        ],
        'datetime'     => [
            'type' => 'anomaly.field_type.datetime'
        ],
        'date'         => [
            'type'   => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date'
            ]
        ],
        'time'         => [
            'type'   => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'time'
            ]
        ],
        'decimal'      => [
            'type'   => 'anomaly.field_type.decimal',
            'config' => [
                'separator' => ',',
                'point'     => '.',
                'decimals'  => 3,
                'min'       => 0
            ]
        ],
        'editor'       => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'theme'  => 'monokai',
                'mode'   => 'html',
                'height' => 500
            ]
        ],
        'email'        => [
            'type' => 'anomaly.field_type.email',
        ],
        'encrypted'    => [
            'type' => 'anomaly.field_type.encrypted',
        ],
        'file'         => [
            'type'   => 'anomaly.field_type.file',
            'config' => [
                'disk' => 'local',
                'path' => 'tests-module'
            ]
        ],
        'files'        => [
            'type'   => 'anomaly.field_type.files',
            'config' => [
                'disk' => 'local',
                'path' => 'tests-module'
            ]
        ],
        'integer'      => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'min'  => 5,
                'step' => 2
            ]
        ],
        'language'     => [
            'type'   => 'anomaly.field_type.language',
            'config' => [
                'default_value' => 'de'
            ]
        ],
        'markdown'     => [
            'type'   => 'anomaly.field_type.markdown',
            'config' => [
                'height' => 300
            ]
        ],
        'multiple'     => [
            'type'   => 'anomaly.field_type.multiple',
            'config' => [
                'related' => 'Anomaly\UsersModule\User\UserModel'
            ]
        ],
        // 'polymorphic',
        'relationship' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\UsersModule\User\UserModel'
            ]
        ],
        'select'       => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '1' => 'One',
                    '2' => 'Two',
                    '3' => 'Three',
                    '4' => 'Four',
                    '5' => 'Five',
                ]
            ]
        ],
        'slider'       => [
            'type'   => 'anomaly.field_type.slider',
            'config' => [
                'max'  => 20,
                'min'  => 2,
                'step' => 2
            ]
        ],
        'state'        => [
            'type'   => 'anomaly.field_type.state',
            'config' => [
                'country'       => 'US',
                'default_value' => 'UT'
            ]
        ],
        'tags'         => [
            'type' => 'anomaly.field_type.tags',
        ],
        'textarea'     => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows' => 10
            ]
        ],
        'url'          => [
            'type' => 'anomaly.field_type.url',
        ],
        'user'         => [
            'type' => 'anomaly.field_type.user'
        ],
        'wysiwyg'      => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'config' => [
                'line_breaks' => false,
                'buttons'     => 'default',
                'plugins'     => 'default',
                'height'      => 200
            ]
        ]
    ];
}
