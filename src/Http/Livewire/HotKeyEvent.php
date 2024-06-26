<?php
namespace Jiny\Widgets\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;
use Livewire\Attributes\On;

class HotKeyEvent extends Component
{
    use \Jiny\Widgets\Http\Trait\DesignMode;

    public function render()
    {
        $viewFile = 'jiny-widgets::hotkey_event';
        return view($viewFile);
    }

}
