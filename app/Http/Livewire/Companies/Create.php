<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;
use App\Models\Companies;
class Create extends Component
{
    public $nama;
    public $email;
    public $logo;
    public $website;

    /**
     * store function
     */
    public function store()
    {
        $this->validate([
            'nama'   => 'required|string',
            'email' => 'required|string',
            'logo' => 'required|mimes:png|max:2048|dimensions:max_width=100,max_height=100',
            'website' => 'required|string',
        ]);
        $logo = md5($this->logo . microtime()).'.'.$this->logo->extension();
        $this->logo->storeAs('public/companies', $logo);
        $companies = Companies::create([
            'nama'     => $this->nama,
            'email'   => $this->email,
            'logo'   => $logo,
            'website'   => $this->website
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('companies.index');
    }

    public function render()
    {
        return view('livewire.companies.create');
    }
}
