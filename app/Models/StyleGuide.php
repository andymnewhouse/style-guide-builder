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
            'nav' => [
                'a' => [
                    'text-size' => 'text-lg',
                    'text-color' => 'text-blue-700',
                    'font-weight' => 'font-bold',
                    'rounded' => 'rounded-md',
                ],
                'a:hover' => [
                    'text-color' => 'text-white',
                    'background-color' => 'from-sapphire hover:to-blue-700',
                ]
            ],
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
                'subtitle' => [
                    'text-size' => 'text-xl',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-semibold',
                    'text-transform' => 'uppercase',
                    'margin-top' => 'mt-6',
                    'margin-bottom' => 'mb-2',
                ],
                'panel' => [
                    'text-size' => 'text-xl',
                    'text-color' => 'text-blue-700',
                    'font-weight' => 'font-semibold',
                    'text-transform' => 'normal-case',
                ],
            ],
            'typography' => [
                'p' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-normal',
                    'margin-top' => 'mt-6',
                    'margin-bottom' => 'mb-2',
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
                    'margin-top' => 'mt-6',
                    'margin-bottom' => 'mb-2',
                ],
                'ol' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-900',
                    'font-weight' => 'font-normal',
                    'list-style-type' => 'list-decimal',
                    'list-style-position' => 'list-inside',
                    'margin-top' => 'mt-6',
                    'margin-bottom' => 'mb-2',
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
            ],
            'buttons' => [
                'gradient' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-100',
                    'font-weight' => 'font-normal',
                    'text-decoration' => 'no-underline',
                    'text-transform' => 'normal-case',
                ],
                'gray' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-blue-700',
                    'font-weight' => 'font-normal',
                    'text-decoration' => 'no-underline',
                    'text-transform' => 'normal-case',
                ],
            ],
            'testimonials' => [
                'image' => [
                    'width' => 'w-64',
                    'height' => 'h-64',
                    'rounded' => 'rounded-full',
                ],
                'quote' => [
                    'text-size' => 'text-xl',
                    'text-color' => 'text-white',
                    'font-weight' => 'font-medium',
                    'text-decoration' => 'no-underline',
                    'text-transform' => 'normal-case',
                ],
                'author' => [
                    'text-size' => 'text-base',
                    'text-color' => 'text-gray-200',
                    'font-weight' => 'font-medium',
                    'text-decoration' => 'no-underline',
                    'text-transform' => 'normal-case',
                ],
                'credits' => [
                    'text-size' => 'text-sm',
                    'text-color' => 'text-gray-200',
                    'font-weight' => 'font-medium',
                    'text-decoration' => 'no-underline',
                    'text-transform' => 'normal-case',
                ],
            ]
        ];
    }
}
