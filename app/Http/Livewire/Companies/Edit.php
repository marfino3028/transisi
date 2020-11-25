<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;
use App\Models\Companies;
use Illuminate\Http\Request;
class Edit extends Component
{
    /**
    * define public variable
    */
    public $companiesId;
    public $nama;
    public $email;
    public $logo;
    public $website;

    /**
     * mount or construct function
     */
    public function mount($id)
    {
        $companies = Companies::find($id);
        
        if($companies) {
            $this->companiesId   = $companies->id;
            $this->nama    = $companies->nama;
            $this->email  = $companies->email;
            $this->logo  = $companies->logo;
            $this->website  = $companies->website;
        }
    }

    /**
     * update function
     */
    public function update()
    {
        $this->validate([
            'nama'   => 'required',
            'email' => 'required',
            'logo' => 'required|mimes:png|max:2048|dimensions:max_width=100,max_height=100',
            'website' => 'required',
        ]);

        if($this->companiesId) {

            $companies = Companies::find($this->companiesId);
            $logo = md5($this->logo . microtime()).'.'.$this->logo->extension();
            $this->logo->storeAs('public/companies', $logo);
            if($companies) {
                $companies->update([
                    'nama'     => $this->nama,
                    'email'   => $this->email,
                    'logo'   => $logo,
                    'website'   => $this->website,
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('companies.index');
    }
    public function render()
    {
        return view('livewire.companies.edit');
    }
}
