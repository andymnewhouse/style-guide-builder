<?php

namespace App\Http\Livewire\Builder;

use App\Models\StyleGuide;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public StyleGuide $form;

    public $rules = [
        'form.name' => 'required',
    ];

    public function mount()
    {
        $this->form = new StyleGuide;
    }

    public function render()
    {
        return view('livewire.builder.create');
    }

    public function save() {
        $this->form->slug = Str::slug($this->form->name);
        $this->form->settings = StyleGuide::defaultSettings();
        $this->form->save();

        return redirect()->route('style-guide.edit', $this->form);
    }
}
