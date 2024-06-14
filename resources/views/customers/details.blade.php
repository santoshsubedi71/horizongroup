<!-- resources/views/user_detail.blade.php -->

@extends('adminlte::page')

@section('title', 'User Detail')

@section('content_header')
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
    <div class="row">
        <div class="col-md-6 mt-5">
            <a href="{{ route('customers.index') }}" class="btn btn-primary">BACK</a>  
        </div>
        <div class="col-md-12 text-right">
            <button type="button" onclick="buttonClick({{ $customers->id}})">Edit</button> 
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">User Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-circle elevation-2" width="150" height="150">
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="250px">名前</th>
                                    <td>{{ $customers->first_name }}{{ $customers->last_name}}</td>
                                </tr>
                                <tr>
                                    <th>名前カナ</th>
                                    <td>{{ $customers->first_name_kana }}{{ $customers->last_name_kana }}</td>
                                </tr>
                                <tr>
                                    <th>生年月日</th>
                                    <td>{{ $customers->dob }}</td>
                                </tr>
                                <tr>
                                    <th>性別</th>
                                    <td>
                                        @foreach (\App\Enums\Gender::cases() as $gender)
                                            @if($gender->value === $customers->gender)
                                                {{ $gender->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>{{ $customers->phone }}</td>
                                </tr>
                                <tr>
                                    <th>配偶者</th>
                                    <td>
                                        @foreach (\App\Enums\MaritalStatus::cases() as $maritalStatus)
                                            @if($maritalStatus->value === $customers->marital_status)
                                                {{ $maritalStatus->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td>{{ $customers->email }}</td>
                                </tr>
                                <tr>
                                    <th>郵便番号</th>
                                    <td>{{ $customers->postal_code }}</td>
                                </tr>
                                <tr>
                                    <th>住所</th>
                                    <td>{{ $customers->address }}</td>
                                </tr>
                                <tr>
                                    <th>ビーサ有効期限</th>
                                    <td>{{ $customers->visa_expiry }}</td>
                                </tr>
                                <tr>
                                    <th>在留資格</th>
                                    <td>
                                        @foreach (\App\Enums\visaStatus::cases() as $visaStatus)
                                            @if($visaStatus->value === $customers->visa_status)
                                                {{ $visaStatus->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>最終学歴</th>
                                    <td>
                                        @foreach (\App\Enums\educationLevel::cases() as $educationLevel)
                                            @if($educationLevel->value === $customers->education_level)
                                                {{ $gender->label() }}
                                            @endif
                                        @endforeach
                                </tr>
                                <tr>
                                    <th>学科</th>
                                    <td> 
                                    </td>
                                </tr>
                                <tr>
                                    <th>活動ステータス</th>
                                    <td>@foreach (\App\Enums\visaStatus::cases() as $visaStatus)
                                        @if($visaStatus->value === $customers->visa_status)
                                            {{ $visaStatus->label() }}
                                        @endif
                                    @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>日本語能力レベル</th>
                                    <td>@foreach (\App\Enums\jlptlevel::cases() as $jlptLevel)
                                        @if($jlptLevel->value === $customers->jlpt_level)
                                            {{ $jlptLevel->label() }}
                                        @endif
                                    @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>運転免許証</th>
                                    <td>@foreach (\App\Enums\licenseStatus::cases() as $licenseStatus)
                                        @if($licenseStatus->value === $customers->driving_license)
                                            {{ $licenseStatus->label() }}
                                        @endif
                                    @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>限状況</th>
                                    <td>@foreach (\App\Enums\Process::cases() as $process)
                                        @if($process->value === $customers->process)
                                            {{ $process->label() }}
                                        @endif
                                    @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>メーモ</th>
                                    <td>{{ $customers->memo }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

<script>

function buttonClick($id){

    location.href = "/edit/" + $id;
}


</script>




@endsection
