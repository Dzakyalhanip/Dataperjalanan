@extends('user.master')

@section('content')
@section('judul','Input Data')
@section('b1','Form Input')
 <!-- Content -->
 <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
          
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Basic Form</strong> Elements
                    </div>
                    <div class="card-body card-block">
                  
                        <form action="{{route('simpan')}}" method="POST">
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
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                                <div class="col-12 col-md-9"><input type="date" id="tanggal" name="tanggal" placeholder="Text" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jam</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="waktu" name="waktu"  class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lokasi Yang Dituju</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="lokasi" name="lokasi"  class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Suhu Tubuh</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="suhu_tubuh" name="suhu_tubuh"  class="form-control"></div>
                            </div>             
                            
                     
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
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