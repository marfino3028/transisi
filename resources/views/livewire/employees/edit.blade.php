<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit  Data Employees
    </h2>
</x-slot>
   @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="postId">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" wire:model="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama">
                    @error('nama')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                   <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" rows="4" placeholder="Masukkan Email">
                   @error('email')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>

                    <div class="form-group">
                    <label>Company</label>
                   <input type="text" wire:model="companies" class="form-control @error('companies') is-invalid @enderror" rows="4" placeholder="Masukkan companies">
                   @error('companies')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
</div>