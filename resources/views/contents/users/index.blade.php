@extends('layouts.main')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="card">
            <div class="card-header">
                <h2>Daftar User</h2>
                <span>
                    <h5>Tambah User</h5>
                    <a href="/admin/user/create"><button class="btn btn-sm btn-primary btn-outline-primary"><i class="icofont icofont-plus"></i></button></a>
                </span>

                <!-- <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div> -->
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th class="text-center" scope="row">1</th>
                                <td class="text-center">Lorem ipsum dolor sit amet.</td>
                                <td class="text-center">@mdo</td>
                                <td class="text-center">@mdo</td>
                                <td class="text-center">@mdo</td>
                                <td class="text-center"><a href="/admin/user/edit"><button class="btn btn-success btn-outline-success"><i class="icofont icofont-edit"></i></button></a> <a href="/user/submissions/delete"><button class="btn btn-danger btn-outline-danger"><i class="icofont icofont-trash"></i></button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>  
@endsection