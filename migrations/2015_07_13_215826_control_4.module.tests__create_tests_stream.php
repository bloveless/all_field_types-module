<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class Control4ModuleTestsCreateTestsStream extends Migration
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
        'text'  => [
            'required'    => true,
            'unique'      => true,
            'placeholder' => 'Text Placeholder'
        ],
        'slug'  => [
            'required'    => true,
            'unique'      => true,
            'placeholder' => 'Slug Placeholder'
        ],
        'addon' => [
            'placeholder' => 'Addon Placeholder'
        ],
        'boolean',
        'checkboxes',
        'colorpicker' => [
            'placeholder' => 'Colorpicker Placeholder'
        ],
        'country' => [
            'placeholder' => 'Country Placeholder'
        ]
    ];
}
