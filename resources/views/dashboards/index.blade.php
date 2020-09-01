@extends('layout.master_layout')

@section('content')

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
    <h2>Coronavirus Global Live</h2>
    </div>
</div>

<div class="clearfix"></div>
<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
<div class="tile-stats">
<div class="icon"><i class="fa fa-caret-square-o-right"></i>
</div>
<div class="count">179</div>
<h3>New Sign ups</h3>
<p>Lorem ipsum psdea itgum rixt.</p>
</div>
</div>

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
    <div class="tile-stats">
    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
    </div>
    <div class="count">179</div>
    <h3>New Sign ups</h3>
    <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
    </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
        <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
        </div>
        <div class="count">179</div>
        <h3>New Sign ups</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
        </div>
        </div>

        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
            <div class="icon"><i class="fa fa-caret-square-o-right"></i>
            </div>
            <div class="count">179</div>
            <h3>New Sign ups</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
            </div>

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
    <div class="x_title">
    <h2>Coronavirus Global Live</h2>
    <ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>
    <li class="dropdown">
      
    </li>
    <li><a class="close-link"><i class="fa fa-close"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    </div>
    <div class="x_content">
    <div class="row">
    <div class="col-sm-12">
    <div class="card-box table-responsive">
    
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Country Region</th>
            <th>Confirmed</th>
            <th>Deaths</th>
            <th>Recovered</th>
            <th>Active</th>

        </tr>
    </thead>
    <tbody>
        <?php $no=0; ?>
        @foreach ($data as $datacovid)
        <?php $no++ ?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $datacovid['attributes']['Country_Region'] }}</td>
            <td>{{ $datacovid['attributes']['Confirmed'] }}</td>
            <td>{{ $datacovid['attributes']['Deaths'] }}</td>
            <td>{{ $datacovid['attributes']['Recovered'] }}</td>
            <td>{{ $datacovid['attributes']['Active'] }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
       
    <script>
        $(document).ready( function () {
    $('datatable-responsive').DataTable();
} );
    </script>

@endsection