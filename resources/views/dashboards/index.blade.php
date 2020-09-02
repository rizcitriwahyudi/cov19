@extends('layout.master_layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboards Global & Indonesia <strong>Covid-19</strong></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{ $data_global_positif["value"] }}<sup style="font-size: 20px"> Orang</sup></h3>
    
                    <p>{{ $data_global_positif["name"] }}</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-frown"></i>
                  </div>
                  {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
              </div>
              
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                  <h3>{{ $data_global_sembuh["value"] }}<sup style="font-size: 20px"> Orang</sup></h3>
    
                    <p>{{ $data_global_sembuh["name"] }}</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-smile"></i>
                  </div>
                  {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
              </div>
             <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $data_global_meninggal["value"] }}<sup style="font-size: 20px"> Orang</sup></h3>

                <p>{{ $data_global_meninggal["name"] }}</p>
              </div>
              <div class="icon">
                <i class="fa fa-sad-tear"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>{{ $data_indo[0]['name'] }}</h4>
                <p><small>Positif {{ $data_indo[0]['positif'] }} | Sembuh {{ $data_indo[0]['sembuh'] }} | 
                Meninggal {{ $data_indo[0]['meninggal'] }}  </small></p>
              </div>
              <div class="icon">
                <i class="fa fa-sad-cry"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->          
          <!-- ./col -->
        </div>
        <!-- /.row -->
          </section>
          <!-- right col -->

          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h5 class="m-0 text-dark">Data Covid Indonesia Provinsi</h5>
                </div><!-- /.col -->
                
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Provinsi</th>
                  <th>Kasus Positif</th>
                  <th>Kasus Sembuh</th>
                  <th>Kasus Meninggal</th>
                </tr>
                </thead>
                <tbody>
                    @php
                       $no = 0; 
                    @endphp
                    @foreach ($data_provinsi as $data)
                    @php
                        $no++;
                    @endphp
                <tr>
                <td>{{ $no }}</td>
                <td>{{ $data['attributes']['Provinsi'] }}</td>
                <td>{{ $data['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $data['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $data['attributes']['Kasus_Meni'] }}</td>
                  
                </tr>
                
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    <!-- /.content -->
  

@endsection