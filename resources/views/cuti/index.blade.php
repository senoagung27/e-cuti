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
                 <h1>Data Cuti</h1>
                 <div class="section-header-breadcrumb">
                     <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                     <div class="breadcrumb-item">Cuti</div>
                 </div>
             </div>

             <div class="section-body">

                 <div class="row">
                     <div class="col-12">
                         <div class="card">
                             <div class="card-header">
                                 <a href="{{ route('cuti.create') }}" class="btn btn-icon icon-left btn-primary"><i
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
                                                 <th>Nama Pegawai</th>
                                                 <th>Tanggal Cuti</th>
                                                 <th>Lama Cuti</th>
                                                 <th>Sisa Cuti</th>
                                                 <th>Keterangan</th>
                                                 <th>Status</th>
                                                 <th width="150">Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 @foreach ($dataCuti as $data)
                                                     <td>
                                                         {{ $loop->iteration }}
                                                     </td>
                                                     <td>{{ $data->isiPegawai->nip }}</td>
                                                     <td>{{ $data->isiPegawai->nama_pegawai }}</td>
                                                     <td>{{ date('d F Y', strtotime($data->tanggal_cuti)) }}</td>
                                                     <td>{{ $data->lama_cuti }}</td>
                                                     <td>{{ $data->sisa_cuti }}</td>
                                                     <td>{{ $data->keterangan }}</td>
                                                     <td class="project-state">
                                                         @if ($data->status === 'Accept')
                                                             <span class="badge badge-success">{{ $data->status }}</span>

                                                         @elseif ($data->status === 'Pending')
                                                             <span class="badge badge-warning">{{ $data->status }}</span>
                                                         @else
                                                             <span class="badge badge-danger">{{ $data->status }}</span>
                                                         @endif
                                                     </td>

                                                     <td> <a href="/EditCuti/{{ $data->id }}"
                                                             class="btn btn-primary btn-action mr-1"><i
                                                                 class="fas fa-pencil-alt"></i></a>
                                                         <a href="/HapusCuti/{{ $data->id }}"
                                                             class="btn btn-danger btn-action"><i
                                                                 class="fas fa-trash"></i></a>
                                                     </td>

                                             </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                     {{-- {{ $dataCuti->links() }} --}}
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
