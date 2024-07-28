@extends('adminlte::page')

@section('title', 'User Detail')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="margin: 35px;">
            <div class="col-sm-6">
                <a href="{{ route('candidates.index') }}" class="btn btn-primary">BACK</a>  
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" onclick="buttonClick({{ $candidate->id }})" class="btn btn-outline-info">Edit</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-fixed-height">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">User Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-circle elevation-2" width="100" height="100">
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th width="250px">名前</th>
                                    <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>名前カナ</th>
                                    <td>{{ $candidate->first_name_kana }} {{ $candidate->last_name_kana }}</td>
                                </tr>
                                <tr>
                                    <th>生年月日</th>
                                    <td>{{ $candidate->dob }}</td>
                                </tr>
                                <tr>
                                    <th>性別</th>
                                    <td>
                                        @foreach (\App\Enums\Gender::cases() as $gender)
                                            @if($gender->value === $candidate->gender)
                                                {{ $gender->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>{{ $candidate->phone }}</td>
                                </tr>
                                <tr>
                                    <th>配偶者</th>
                                    <td>
                                        @foreach (\App\Enums\MaritalStatus::cases() as $maritalStatus)
                                            @if($maritalStatus->value === $candidate->marital_status)
                                                {{ $maritalStatus->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td>{{ $candidate->email }}</td>
                                </tr>
                                <tr>
                                    <th>郵便番号</th>
                                    <td>{{ $candidate->postal_code }}</td>
                                </tr>
                                <tr>
                                    <th>住所</th>
                                    <td>{{ $candidate->address }}</td>
                                </tr>
                                <tr>
                                    <th>ビーサ有効期限</th>
                                    <td>{{ $candidate->visa_expiry }}</td>
                                </tr>
                                <tr>
                                    <th>在留資格</th>
                                    <td>
                                        @foreach (\App\Enums\VisaStatus::cases() as $visaStatus)
                                            @if($visaStatus->value === $candidate->visa_status)
                                                {{ $visaStatus->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>最終学歴</th>
                                    <td>
                                        @foreach (\App\Enums\EducationLevel::cases() as $educationLevel)
                                            @if($educationLevel->value === $candidate->education_level)
                                                {{ $educationLevel->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>学科</th>
                                    <td>{{ $candidate->subject }}</td> <!-- Assuming you have this data -->
                                </tr>
                                <tr>
                                    <th>活動ステータス</th>
                                    <td>
                                        @foreach (\App\Enums\VisaStatus::cases() as $visaStatus)
                                            @if($visaStatus->value === $candidate->visa_status)
                                                {{ $visaStatus->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>日本語能力レベル</th>
                                    <td>
                                        @foreach (\App\Enums\JlptLevel::cases() as $jlptLevel)
                                            @if($jlptLevel->value === $candidate->jlpt_level)
                                                {{ $jlptLevel->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>運転免許証</th>
                                    <td>
                                        @foreach (\App\Enums\LicenseStatus::cases() as $licenseStatus)
                                            @if($licenseStatus->value === $candidate->driving_license)
                                                {{ $licenseStatus->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>限状況</th>
                                    <td>
                                        @foreach (\App\Enums\Process::cases() as $process)
                                            @if($process->value === $candidate->process)
                                                {{ $process->label() }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>メーモ</th>
                                    <td>{{ $candidate->memo }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-fixed-height">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Activity</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            here will be some activity
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .card-fixed-height {
            height: 600px;
            overflow-y: auto;
        }
    </style>
@endsection

@section('js')
<script>
function buttonClick(id) {
    location.href = "{{ route('candidates.edit', '') }}/" + id;
}
</script>
@endsection
