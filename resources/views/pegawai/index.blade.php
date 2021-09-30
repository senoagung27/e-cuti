 @extends('layouts.app')
 @section('content')

     <div class="main-content">
         <section class="section">
             @if (('session')('edit'))
                 <div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                     {{ session('edit') }}
                 </div>
             @endif
             @if (('session')('tambah'))
                 <div class="alert alert-success alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                     {{ session('tambah') }}
                 </div>
             @endif
             <div class="section-header">
                 <h1>Data Pegawai</h1>
                 <div class="section-header-breadcrumb">
                     <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                     <div class="breadcrumb-item">Pegawai</div>
                 </div>
             </div>

             <div class="section-body">

                 <div class="row">
                     <div class="col-12">
                         <div class="card">
                             <div class="card-header">
                                 <a href="{{ route('pegawai.create') }}" class="btn btn-icon icon-left btn-primary"><i
                                         class="far fa-edit"></i>
                                     Tambah Data</a>
                             </div>
                             <div class="card-body">
                                 <div class="table-responsive">
                                     <table class="table table-striped" id="table-1">
                                         <thead>
                                             <tr>
                                                 <th class="text-center">
                                                     #
                                                 </th>
                                                 <th>NIP</th>
                                                 <th>Name</th>
                                                 <th>Alamat</th>
                                                 <th>Tanggal Lahir</th>
                                                 <th>Tanggal Join</th>
                                                 <th width="150">Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 @foreach ($dataPegawai as $data)
                                                     <td>
                                                         {{ $loop->iteration }}
                                                     </td>
                                                     <td>{{ $data->nip }}</td>
                                                     <td>{{ $data->nama_pegawai }}</td>
                                                     <td>{{ $data->alamat }}</td>
                                                     <td>{{ date('d F Y', strtotime($data->tanggal_lahir)) }}</td>
                                                     <td>{{ date('d F Y', strtotime($data->tanggal_join)) }}</td>
                                                     <td> <a href="/EditPegawai/{{ $data->id }}"
                                                             class="btn btn-primary btn-action mr-1"><i
                                                                 class="fas fa-pencil-alt"></i></a>
                                                         <a href="/HapusPegawai/{{ $data->id }}"
                                                             class="btn btn-danger btn-action"><i
                                                                 class="fas fa-trash"></i></a>
                                                     </td>

                                             </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                     {{ $dataPegawai->links() }}
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     </div>
     </section>
     </div>

 @endsection
