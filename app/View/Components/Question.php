<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Question extends Component
{
    public $question;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question)
    {
        $this->question = $question;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.question');
    }
}
