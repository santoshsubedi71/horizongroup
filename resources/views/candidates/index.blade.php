@extends('adminlte::page')


@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('candidates.registration')}}" class="btn btn-outline-info">Create candidates</a>

            </div>
        </div>
    </div>
</div>
@endsection


@section('content')

      
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
                <a type="button" oneclick="showDetail()" class="link-icon">
                    <button class="btn btn-dark" onclick="showUserDetail({{ $candidates->id }})">
                        <i class="fa fa-info-circle bg-transparents mr-1" aria-hidden="true" style="color: white;"></i>
                        View Details
                    </button>
                </a>
                
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

