<div>
    <a href="{{ route('companies.create') }}" class="btn btn-md btn-success mb-3">TAMBAH Companies</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Logo</th>
                <th scope="col">Website</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $companiess)
            <tr>
                <td>{{ $companiess->nama }}</td>
                <td>{{ $companiess->email }}</td>
                <td class="border px-4 py-2"><img  src="{{ asset('storage/company/'.$companiess->logo) }}" id="myImg" alt="{{ $companiess->nama }}">
                <td><a href="{{ $companiess->website }}" target=_blank>{{ $companiess->website }}</td>
                <td class="text-center">
                    <a href="{{ route('companies.edit', $companiess->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    <button wire:click="destroy({{ $companiess->id }})" class="btn btn-sm btn-danger">DELETE</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $companies->links() }}
</div>