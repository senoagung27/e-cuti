 @extends('layouts.app')
 @section('content')

     <div class="main-content">
         <section class="section">
             <div class="section-header">
                 <h1>Forms Pegawai Baru</h1>
                 <div class="section-header-breadcrumb">
                     <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                     <div class="breadcrumb-item"><a href="#">Pegawai</a></div>
                     <div class="breadcrumb-item">Forms Pegawai Baru</div>
                 </div>
             </div>

             <div class="section-body">

                 <div class="row">
                     <div class="col-12">
                         <div class="card">
                             <div class="card-header">
                                 <h4>Input Pegawai Baru</h4>
                             </div>
                             <form role="form" method="POST" action="/SimpanPegawai">
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
                                                     <input type="text" name="nip" class="form-control" placeholder="NIP">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Nama Pegawai</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="nama_pegawai" class="form-control"
                                                         placeholder="Nama Pegawai">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Alamat</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fa fa-address-card" aria-hidden="true"></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="alamat" class="form-control"
                                                         placeholder="Alamat">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Tanggal Lahir</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="date" name="tanggal_lahir" class="form-control"
                                                         placeholder="Nama Pegawai">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Tanggal Join</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="date" name="tanggal_join" class="form-control"
                                                         placeholder="Nama Pegawai">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-footer">
                                         <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
                                         <button type="reset" class="btn btn-danger">
                                             Reset
                                         </button>
                                         <a href="/Pegawai" class="btn btn-primary fa-pull-right">Back</a>
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
