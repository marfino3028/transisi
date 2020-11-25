<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $companies_id;
    public $email;

    /**
     * store function
     */
    public function store()
    {
        $this->validate([
            'nama'   => 'required|string',
            'email' => 'required|string',
            'companies_id' => 'required|string'
            ]);
            
            $employees = Employees::create([
                'nama'     => $this->nama,
            'email'   => $this->email,
            'companies_id'   => $this->companies
        ]);
        
        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');
        
        //redirect
        return redirect()->route('companies.index');
    }
    
    public function render()
    {
    
        $this->employees = Employees::join('companies', 'employees.companies_id', '=', 'companies.id')
        ->select('employees.*', 'companies.nama AS companies')->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA  
        return view('livewire.employees.create');
    }
}
