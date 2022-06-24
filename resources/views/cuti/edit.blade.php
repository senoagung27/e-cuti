 @extends('layouts.app')
 @section('content')

     <div class="main-content">
         <section class="section">
             <div class="section-header">
                 <h1>Forms Update Pengajuan Cuti</h1>
                 <div class="section-header-breadcrumb">
                     <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                     <div class="breadcrumb-item"><a href="#">Pegawai</a></div>
                     <div class="breadcrumb-item">Forms Update Pengajuan Cuti</div>
                 </div>
             </div>

             <div class="section-body">

                 <div class="row">
                     <div class="col-12">
                         <div class="card">
                             <div class="card-header">
                                 <h4>Update Pengajuan Cuti</h4>
                             </div>
                             <form role="form" method="POST" action="/SimpanEditCuti/{{ $dataCuti->id }}">
                                 @csrf
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Tanggal Cuti</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fa fa-address-card" aria-hidden="true"></i>
                                                         </div>
                                                     </div>
                                                     <input type="date" name="tanggal_cuti" class="form-control"
                                                         value="{{ $dataCuti->tanggal_cuti }}">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Lama Cuti</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="lama_cuti" class="form-control"
                                                         value="{{ $dataCuti->lama_cuti }}">
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Sisa Cuti</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="sisa_cuti" class="form-control"
                                                         value="{{ $dataCuti->sisa_cuti }}">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Keterangan</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <input type="text" name="keterangan" class="form-control"
                                                         value="{{ $dataCuti->keterangan }}">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-6">
                                             <div class="form-group">
                                                 <label>Status</label>
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <div class="input-group-text">
                                                             <i class="fas fa-user"></i>
                                                         </div>
                                                     </div>
                                                     <select class="custom-select" name="status" required>
                                                         <option value="Pending" @if ($dataCuti->status == 'Pending') selected @endif>Pending</option>
                                                         <option value="Accept" @if ($dataCuti->status == 'Accept') selected @endif>Accept</option>
                                                         <option value="Reject" @if ($dataCuti->status == 'Reject') selected @endif>Reject</option>>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-footer">
                                         <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
                                         <button type="reset" class="btn btn-danger">
                                             Reset
                                         </button>
                                         <a href="/Cuti" class="btn btn-primary fa-pull-right">Back</a>
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
