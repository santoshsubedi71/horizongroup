@extends('adminlte::page')

@section('title', 'Dashboard')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number">
                    10
                    <small>%</small>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Sales</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">New Members</span>
                  <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>


<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">recent inteviews</h3>
        </div>
        <div class="card-body">
            <div id="jsGrid1"></div>
        </div>
    </div>
</section>

<section class="content">
  <div class="card">
      <div class="card-header">
          <h3 class="card-title">recent applied job</h3>
      </div>
      <div class="card-body">
          <div id="jsGrid2"></div>
      </div>
  </div>
</section>

@endsection

@section('css')
<!-- Include jsGrid CSS -->

@endsection

@section('js')
<script>
  $(function() {
    $("#jsGrid1").jsGrid({
    width: "100%",
    height: "300px",

    search: true,
    sorting: true,
    paging: true,

    data: [
        { Name: "John Doe", Email: "sample@gmail.com", Interview_Date: "2023-07-27", Interview_Time: "10:00 AM", Assign_Member: "USA" },
        { Name: "Jane Smith", Email: "sample@gmail.com", Interview_Date: "2023-07-28", Interview_Time: "11:00 AM", Assign_Member: "Canada" },
        { Name: "Sam Johnson", Email: "sample@gmail.com", Interview_Date: "2023-07-29", Interview_Time: "12:00 PM", Assign_Member: "UK" },
        { Name: "Lisa Brown", Email: "sample@gmail.com", Interview_Date: "2023-07-30", Interview_Time: "01:00 PM", Assign_Member: "Australia" },
        { Name: "John Doe", Email: "sample@gmail.com", Interview_Date: "2023-07-27", Interview_Time: "10:00 AM", Assign_Member: "USA" },
        { Name: "Jane Smith", Email: "sample@gmail.com", Interview_Date: "2023-07-28", Interview_Time: "11:00 AM", Assign_Member: "Canada" },
        { Name: "Sam Johnson", Email: "sample@gmail.com", Interview_Date: "2023-07-29", Interview_Time: "12:00 PM", Assign_Member: "UK" },
        { Name: "Lisa Brown", Email: "sample@gmail.com", Interview_Date: "2023-07-30", Interview_Time: "01:00 PM", Assign_Member: "Australia" }
    ],

    fields: [
        { name: "Name", type: "text", width: 150 },
        { name: "Email", type: "text", width: 150 },
        { name: "Interview_Date", type: "text", width: 200 },
        { name: "Interview_Time", type: "text", width: 100 },
        { name: "Assign_Member", type: "text", width: 100 }
    ],

    onDataLoaded: function(args) {
        // Custom logic after data is loaded, if needed
    }
});
$("#jsGrid2").jsGrid({
    width: "100%",
    height: "300px",

    search: true,
    sorting: true,
    paging: true,

    data: [
        { Name: "John Doe", Apply_For: "manager", Applied_Date: "2023-07-27", Experience: "USA", Stage: "review" },
        { Name: "Jane Smith", Apply_For: "developer", Applied_Date: "2023-07-28", Experience: "Canada", Stage: "review" },
        { Name: "Sam Johnson", Apply_For: "senior developer", Applied_Date: "2023-07-29", Experience: "UK", Stage: "making cv" },
        { Name: "Lisa Brown", Apply_For: "project manager", Applied_Date: "2023-07-30", Experience: "Australia", Stage: "waiting for interview" },
        { Name: "John Doe", Apply_For: "manager", Applied_Date: "2023-07-27", Experience: "USA", Stage: "review" },
        { Name: "Jane Smith", Apply_For: "developer", Applied_Date: "2023-07-28", Experience: "Canada", Stage: "review" },
        { Name: "Sam Johnson", Apply_For: "senior developer", Applied_Date: "2023-07-29", Experience: "UK", Stage: "making cv" },
        { Name: "Lisa Brown", Apply_For: "project manager", Applied_Date: "2023-07-30", Experience: "Australia", Stage: "waiting for interview" }
    ],

    fields: [
        { name: "Name", type: "text", width: 150 },
        { name: "Apply_For", type: "text", width: 150 },
        { name: "Applied_Date", type: "text", width: 200 },
        { name: "Experience", type: "text", width: 150 },
        { name: "Stage", type: "text", width: 150 }
    ],

    onDataLoaded: function(args) {
        // Custom logic after data is loaded, if needed
    }
});

});

</script>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
