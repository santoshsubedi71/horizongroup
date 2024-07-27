@extends('adminlte::page')

@section('title', 'jsGrid Example')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Job Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Job Types</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('jobs.create')}}" class="btn btn-outline-info">Create Jobs</a>

            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">jsGrid</h3>
        </div>
        <div class="card-body">
            <div id="jsGrid1"></div>
        </div>
    </div>
</section>
@endsection

@section('css')
<!-- Include jsGrid CSS -->

@endsection

@section('js')
<!-- Include jsGrid JS -->

<script>
  $(function() {
    $("#jsGrid1").jsGrid({
        width: "100%",
        height: "400px",

        search: true,
        sorting: true,
        paging: true,

        data: [
            { Name: "John Doe", Age: 30, Address: "1234 Elm Street", Country: "USA" },
            { Name: "Jane Smith", Age: 25, Address: "5678 Oak Avenue", Country: "Canada" },
            { Name: "Sam Johnson", Age: 40, Address: "9101 Pine Road", Country: "UK" },
            { Name: "Lisa Brown", Age: 35, Address: "1122 Maple Lane", Country: "Australia" },
            { Name: "John Doe", Age: 30, Address: "1234 Elm Street", Country: "USA" },
            { Name: "Jane Smith", Age: 25, Address: "5678 Oak Avenue", Country: "Canada" },
            { Name: "Sam Johnson", Age: 40, Address: "9101 Pine Road", Country: "UK" },
            { Name: "Lisa Brown", Age: 35, Address: "1122 Maple Lane", Country: "Australia" },
            { Name: "John Doe", Age: 30, Address: "1234 Elm Street", Country: "USA" },
            { Name: "Jane Smith", Age: 25, Address: "5678 Oak Avenue", Country: "Canada" },
            { Name: "Sam Johnson", Age: 40, Address: "9101 Pine Road", Country: "UK" },
            { Name: "Lisa Brown", Age: 35, Address: "1122 Maple Lane", Country: "Australia" },
        ],

        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: [
                { Name: "", Id: 0 },
                { Name: "USA", Id: "USA" },
                { Name: "Canada", Id: "Canada" },
                { Name: "UK", Id: "UK" },
                { Name: "Australia", Id: "Australia" }
            ], valueField: "Id", textField: "Name" }
        ],

        onDataLoaded: function(args) {
            // Custom logic after data is loaded, if needed
        }
    });
});

</script>
@endsection
