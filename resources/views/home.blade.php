<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('layouts.slidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Pegawai</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $dataTotalPegawai }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Cuti</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $dataTotalCuti }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pegawai Terbaru</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
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
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div>
                </div>
            </footer>
        </div>
    </div>
    @include('layouts.js')
    <!-- General JS Scripts -->
</body>

</html>
