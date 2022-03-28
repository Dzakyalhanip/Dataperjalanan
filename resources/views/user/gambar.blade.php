@extends('user.master')

@section('content')
@section('judul','Dashboard')

 <!-- Content -->
 <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
          
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                            <a class="nav-link "  href="{{route('user')}}">Akun</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('usergambar')}}">Klik</a>
                            </li>
                        </ul>
                </div>
                    <div class="card-body card-block">
                  
                        <form action="{{route('simpangambar')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Username</p>
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="user_id"  name="user_id" placeholder="name" value=" {{ Auth::user()->id }}">
                              </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Gambar</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="gambar" name="gambar" placeholder="gambars" class="form-control"></div>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            
                        </div>
                    </form>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- /Widgets -->
        
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
        
    
@endsection