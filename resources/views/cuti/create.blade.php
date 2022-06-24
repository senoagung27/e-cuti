 @extends('layouts.app')
 @section('content')
     <div class="main-content">
         <section class="section">
             <div class="section-header">
                 <h1>Forms Pengajuan Cuti</h1>
                 <div class="section-header-breadcrumb">
                     <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                     <div class="breadcrumb-item"><a href="#">Cuti</a></div>
                     <div class="breadcrumb-item">Forms Pengajuan Cuti</div>
                 </div>
             </div>

             <div class="section-body">

                 <div class="row">
                     <div class="col-12">
                         <div class="card">
                             <div class="card-header">
                                 <h4>Input Pegajuan Cuti</h4>
                             </div>
                             <form role="form" method="POST" action="/SimpanCuti">
                                 @csrf
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>NIP</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-id-card"></i>
                                                         </div>
                                                     </div>
                                                     <select class="custom-select" name="id_pegawai" required>
                                                         <option value="">-Pilihan-</option>
                                                         @foreach ($dataPegawai as $item)
                                                             <option value="{{ $item->id }}">
                                                                 {{ $item->nip }} - {{ $item->nama_pegawai }}
                                                             </option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Tanggal Cuti</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="date" name="tanggal_cuti" class="form-control"
                                                         placeholder="Nama Pegawai">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Lama Cuti</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fa fa-address-card" aria-hidden="true"></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="lama_cuti" class="form-control"
                                                         placeholder="Lama Cuti">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Sisa Cuti</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-building    "></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="sisa_cuti" class="form-control"
                                                         placeholder="Sisa Cuti">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Keterangan</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-newspaper    "></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="keterangan" class="form-control"
                                                         placeholder="Keterangan">
                                                 </div>
                                             </div>
                                         </div>
                                         {{-- <div class="col-6">
                                             <div class="form-group">
                                                 <label>Status</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <select class="custom-select" name="status" required>
                                                         <option value="">-Pilihan-</option>
                                                         @foreach ($dataCuti as $item)
                                                             <option value="{{ $item->id }}">
                                                                 {{ $item->status }}
                                                             </option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                             </div>
                                         </div> --}}
                                         <div class="col-6">
                                             <div class="card-footer">
                                                 <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
                                                 <button type="reset" class="btn btn-danger">
                                                     Reset
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 @endsection
