@extends('admin.master')

@section('content')
@section('judul','Table Data')
    
       

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
                                    <th>Name</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi </th>
                                    <th>Suhu Tubuh</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Admin as $no => $Admins) 
                                <tr>
                                    <td>{{$Admins->user->name}}</td>
                                    <td>{{$Admins->tanggal}}</td>
                                    <td>{{$Admins->waktu}}</td>
                                    <td>{{$Admins->lokasi}}</td>
                                    <td>{{$Admins->suhu_tubuh}}</td>
                                    <td>
                                        <div class="btn-group me-2" role="group" aria-label="Second group">
                                            
                                            <form action="/hapus{{$Admins->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-block btn-danger"><i class="far fa-times-circle"></i></button>
                                              
                                                <a href="{{route('edit',$Admins->id)}}" class="btn btn-block btn-primary "><i class="fas fa-edit"></i></a></td>
                                            </form>
                                          </div>
                                       
                                    </td>
                                    
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