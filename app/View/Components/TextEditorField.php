<?php

namespace App\View\Components;


use Illuminate\View\Component;

class TextEditorField extends Component
{
    public string $name;
    public string $label;
    public ?string $placeholder;
    public string $value;

    public function __construct(
        string $name,
        string $label,
        ?string $placeholder = null,
         string $value = '',
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.text-editor-field');
    }
}

