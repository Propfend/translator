<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Counter extends Component
{
    public $message = "Hello, World!!";

    public $textToCopy;

    public function render(): View
    {
        $tr = new GoogleTranslate('pt');
        $translation = $tr->translate($this->message);
        return view('livewire.counter', compact('translation'));
    }

    public function copy()
    {
        $this->emit('textCopied', $this->textToCopy);
    }
}