@extends('adminlte::page')

@section('content')
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>CLIENT LISTS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Client List</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <a href="{{ route('candidates.registration')}}" class="btn btn-primary">Create Client</a>
            
        </div>
    </div>
</section>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">jsGrid</h3>
    </div>
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap text-center" id="jsgrid">
        <tr>
            <th>reg id</th>
            <th>Name/Surname</th>
            <th>Age</th>
            <th>NEW/CHANGE</th>
            <th>Process</th>
            <th></th>
        </tr>

            @foreach($candidates as $candidates)
            
       
            <tr>
            <td>{{ $candidates->registration_number}}</td>
            <td>{{$candidates->first_name}} {{ $candidates->last_name}}</td>
            <td></td>
            <td>{{ \App\Enums\WorkingStatus::from ($candidates->status)->label() }}</td>
            <td>{{ \App\Enums\Process::from($candidates->process)->label() }}</td>
            <td>
                <a type="button" oneclick="showDetail()" class="link-icon"><i class="fa fa-info-circle"
                    aria-hidden="true"></i></a>
                    <button class="btn btn-primary" onclick="showUserDetail({{ $candidates->id}})">View Details</button>
            </td>
            </tr>
            @endforeach
    </table>
</div>

@stop

@section('js')


<script>
    $(document).ready(function() {
        $('#jsGrid1').DataTable({
            "pagingType": "numbers",
            "pageLength": 5,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": false
        });
    });

    function showUserDetail(id) {
        window.location.href = 'candidates/detail/' + id;
    }
</script>


@stop

