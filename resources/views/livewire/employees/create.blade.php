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
                   <input type="text" wire:model="companies" class="form-control @error('companies') is-invalid @enderror" rows="4" placeholder="Masukkan Company">
                   @error('companies')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>