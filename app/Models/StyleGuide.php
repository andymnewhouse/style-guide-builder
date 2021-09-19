<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleGuide extends Model
{
    use HasFactory;

    public $guarded = [];

    public $casts = ['settings' => 'array'];

    public static function defaultSettings() {
        return [
            'headings' => [
                'h1' => [
                    'text-size' => 'text-4xl',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-extrabold',
                    'margin-top' => 'mt-0',
                    'margin-bottom' => 'mb-4',
                ],
                'h2' => [
                    'text-size' => 'text-2xl',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-bold',
                    'margin-top' => 'mt-2',
                    'margin-bottom' => 'mb-4',
                ],
                'h3' => [
                    'text-size' => 'text-xl',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-semibold',
                    'margin-top' => 'mt-6',
                    'margin-bottom' => 'mb-2',
                ],
                'h4' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-semibold',
                    'margin-top' => 'mt-6',
                    'margin-bottom' => 'mb-2',
                ],
            ],
            'typography' => [
                'p' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-normal',
                ],
                'p-strong' => [
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-semibold',
                ],
                'ul' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-normal',
                    'list-style-type' => 'list-disc',
                    'list-style-position' => 'list-inside',
                ],
                'ol' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-normal',
                    'list-style-type' => 'list-decimal',
                    'list-style-position' => 'list-inside',
                ]
            ],
            'links' => [
                'a' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-normal',
                    'text-decoration' => 'no-underline',
                ],
                'a:hover' => [
                    'text-color' => 'text-gray-900',
                    'text-decoration' => 'underline',
                ]
            ]
        ];
    }
}
