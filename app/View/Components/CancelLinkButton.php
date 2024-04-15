<?php
namespace App\View\Components;

use Illuminate\View\Component;

class CancelLinkButton extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.cancel-link-button');
    }
}