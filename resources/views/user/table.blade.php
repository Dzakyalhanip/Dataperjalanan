@extends('user.master')

@section('content')
@section('judul','Table Data')
    
@section('b1','Data')

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Name</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi </th>
                                    <th>Suhu Tubuh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Datauser as $no => $Datauser) 
                                <tr>
                                    {{-- <td>{{$Datauser->$no}}</td> --}}
                                    <td>{{$Datauser->user->name}}</td>
                                    <td>{{$Datauser->tanggal}}</td>
                                    <td>{{$Datauser->waktu}}</td>
                                    <td>{{$Datauser->lokasi}}</td>
                                    <td>{{$Datauser->suhu_tubuh}}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->

        
    
@endsection