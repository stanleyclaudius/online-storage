<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Drive;

class SearchDropdown extends Component
{
	public $search = '';

    public function render()
    {
    	$drives = [];

    	if (strlen($this->search) >= 2) {
    		$drives = Drive::where('user_id', auth()->user()->id)->where('file_name', 'like', '%'.$this->search.'%')->get();
    	}

        return view('livewire.search-dropdown', [
        	'drives' => collect($drives)->take(5),
        ]);
    }
}
