<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class Control4ModuleAllFieldTypesCreateTestsStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'test',
        'title_column' => 'text',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'text'         => [
            'required'    => true,
            'unique'      => true,
            'placeholder' => 'Text Placeholder'
        ],
        'slug'         => [
            'required'    => true,
            'unique'      => true,
            'placeholder' => 'Slug Placeholder'
        ],
        'addon'        => [
            'placeholder' => 'Addon Placeholder'
        ],
        'boolean',
        'checkboxes',
        'colorpicker'  => [
            'placeholder' => 'Colorpicker Placeholder'
        ],
        'country'      => [
            'placeholder' => 'Country Placeholder'
        ],
        // 'datetime',
        // 'date',
        // 'time',
        'decimal'      => [
            'placeholder' => 'Decimal Placeholder'
        ],
        'editor'       => [
            'placeholder' => 'Editor Placeholder'
        ],
        'email'        => [
            'placeholder' => 'Email Placeholder'
        ],
        'encrypted'    => [
            'placeholder' => 'Encrypted Placeholder'
        ],
        'file'         => [
            'placeholder' => 'File Placeholder'
        ],
        // 'files',
        'integer'      => [
            'placeholder' => 'Integer Placeholder'
        ],
        'language'     => [
            'placeholder' => 'Language Placeholder'
        ],
        'markdown'     => [
            'placeholder' => 'Markdown Placeholder'
        ],
        'multiple'     => [
            'placeholder' => 'Multiple Placeholder'
        ],
        'relationship' => [
            'placeholder' => 'Relationship Placeholder'
        ],
        'select'       => [
            'placeholder' => 'Select Placeholder'
        ],
        'slider'       => [
            'placeholder' => 'Slider Placeholder'
        ],
        'state'        => [
            'placeholder' => 'State Placeholder'
        ],
        'tags'         => [
            'placeholder' => 'Tags Placeholder'
        ],
        'textarea' => [
            'placeholder' => 'Textarea placeholder'
        ],
        'url' => [
            'placeholder' => 'Url Placeholder'
        ],
        'user' => [
            'placeholder' => 'User Placeholder'
        ],
        'wysiwyg' => [
            'placeholder' => 'WYSIWYG Placeholder'
        ]
    ];
}
