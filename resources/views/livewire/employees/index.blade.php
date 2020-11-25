<div>
    <a href="{{ route('employees.create') }}" class="btn btn-md btn-success mb-3">TAMBAH employees</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Company</th>
                <th scope="col">Email</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employeess)
            <tr>
                <td>{{ $employeess->nama }}</td>
                <td>{{ $employeess->companies }}</td>
                <td>{{ $employeess->email }}</td>
                <td class="text-center">
                    <a href="{{ route('employees.edit', $employeess->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    <button wire:click="destroy({{ $employeess->id }})" class="btn btn-sm btn-danger">DELETE</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $employees->links() }}
</div>