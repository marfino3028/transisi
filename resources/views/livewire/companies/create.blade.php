<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Data Companies
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
            <form wire:submit.prevent="store">
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
                            <label for="logo" class="block text-gray-700 text-sm font-bold mb-2">Logo:</label>
                            <div class="mb-3">
                            <input type="file" wire:model="logo" class="">
                            <div>
                                @error('logo') <span class="text-sm text-red-500 italic">{{ $message }}</span>@enderror
                            </div>
                            <div wire:loading wire:target="logo" class="text-sm text-gray-500 italic">Uploading...</div>
                            </div>
                        </div>

                    <div class="form-group">
                    <label>Website</label>
                   <input type="text" wire:model="website" class="form-control @error('website') is-invalid @enderror" rows="4" placeholder="Masukkan website">
                   @error('website')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</div>