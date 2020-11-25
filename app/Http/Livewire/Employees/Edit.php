<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

use App\Models\Employees;
use Illuminate\Http\Request;
class Edit extends Component
{
    /**
    * define public variable
    */
    public $employeesId;
    public $nama;
    public $email;
    public $companies_id;

    /**
     * mount or construct function
     */
    public function mount($id)
    {
        $employees = Employees::find($id);
        
        if($employees) {
            $this->employeesId   = $employees->id;
            $this->nama    = $employees->nama;
            $this->email  = $employees->email;
            $this->companies  = $employees->companies_id;
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
            'companies_id' => 'required',
        ]);

        if($this->employeesId) {

            $employees = Employees::find($this->employeesId);
            if($employees) {
                $employees->update([
                    'nama'     => $this->nama,
                    'email'   => $this->email,
                    'companies_id'   => $this->companies,
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('employees.index');
    }
    public function render()
    {
        return view('livewire.employees.edit');
    }
}
