<?php

namespace App\Http\Livewire\Builder;

use App\Models\StyleGuide;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
    public $colors = [
        'gray' => 'Gray',
        'sapphire' => 'Sapphire',
        'blue' => 'Blue',
    ];

    public StyleGuide $guide;
    public $form;

    public function mount() {
        $this->form = $this->guide->settings ?? StyleGuide::defaultSettings();
    }

    public function render()
    {
        return view('livewire.builder.edit');
    }

    // Properties

    // Methods

    public function classesFor($key)
    {
        $classes = Arr::get($this->form, $key) ?? Arr::get(StyleGuide::defaultSettings(), $key);

        $values = array_values($classes);
        if(Str::contains($key, 'hover')) {
            $values = array_map(fn($value) => 'hover:'.$value, $values);
        }
        return implode(" ", $values);
    }

    public function save() {
        $this->guide->settings = $this->form;

        $this->guide->save();

        $this->emit('notify', ['message' => 'Saved.', 'type' => 'success']);
    }
}
