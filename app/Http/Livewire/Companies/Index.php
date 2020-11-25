<?php

namespace App\Http\Livewire\Companies;

use App\Models\Companies;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.companies.index', [
            'companies' => Companies::latest()->paginate(5)
        ]);
    }
}