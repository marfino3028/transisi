<?php

namespace App\Http\Livewire\Employees;

use App\Models\Employees;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($employeesId)
    {
    $employees = Employees::find($employeesId);

    if($employees) {
        $employees->delete();
    }
    //flash message
    session()->flash('message', 'Data Berhasil Dihapus.');

    //redirect
    return redirect()->route('employees.index');
}
    public function render()
    {
        $this->employees = Employees::join('companies', 'employees.companies_id', '=', 'companies.id')
        ->select('employees.*', 'companies.nama AS companies')->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('livewire.employees.index', [
            'employees' => Employees::latest()->paginate(5)
        ]);
    }
}