@extends('user.master')

@section('content')
@section('judul', 'Dashboard')


    
       


 <!-- Content -->
 <div class="content">
    <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
                <div class="row">
                        <div class="card ">
                                <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                            <a class="nav-link active"  href="{{route('user')}}">Akun</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{route('usergambar')}}">Klik</a>
                                            </li>
                                        </ul>
                                </div>
                                
                                <div class="row mt-3 mb-4 ml-2">
                                   
                                        <div class="col-md-3">
                                           
                                            <img src="{{Auth::user()->foto_user}}" width="190px" height="200px" alt="" style="">
                                        
                                        </div>
                                

                                        <div class="col-md-9">
                                            <h5>Selamat datang   {{ Auth::user()->name }} </h5>
                                            <p class="card-text">Aplikasi untuk mendata kemana kamu pergi.</p>
                                        </div>

                                </div>
                                {{-- bot --}}
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        {{-- <i class="fa fa-dot-circle-o"></i> Submit --}}
                                    </button>
                                    {{-- <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button> --}}
                                </div>
                        </div>
                        
                    </div>
                        

        </div>
</div>
<!-- /.content -->
        
    
@endsection