@extends('adminlte::page')

@section('content')

<div class="content-header">
    <div class="row">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Candidate Registration</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName" class="form-label">お名前（性）</label>
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                value="{{ old('firstName')}}" 例　山田">
                            @error('firstName')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="firstNameKana" class="form-label">フリカナ (セイ)</label>
                            <input type="text" class="form-control" id="firstNameKana" name="firstNameKana"
                                value="{{ old('firstNameKana')}}" placeholder="例　ヤマダ">
                            @error('firstNameKana')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName" class="form-label">（名）</label>
                            <input type="text" class="form-control" id="lastName" name="lastName"
                                value="{{ old('lastName')}}" placeholder="例　太朗">
                            @error('lastName')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="lastNameKana" class="form-label">（メイ）</label>
                            <input type="text" class="form-control" id="lastNameKana" name="lastNameKana"
                                value="{{ old('lastNameKana')}}" placeholder="例　タロウ">
                            @error('lastNameKana')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob" class="form-label">生年月日</label>
                            <input type="date" class="form-control" id="BirthDate" name="birthDate"
                                value="{{ old('birthDate')}}">
                            @error('birthDate')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">携帯番号番号</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone' )}}"
                                placeholder="ハイフン無し携帯電話番号" maxlength="11">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label mt-2">性別</label>
                            <div class="row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="maleRadio"
                                    value="MALE" {{ old('gender')=='MALE' ? 'checked' : '' }}>
                                <label class="form-check-label" for="maleRadio">男性</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="femaleRadio"
                                    value="FEMALE" {{ old('gender')=='FEMALE' ? 'checked' : '' }}>
                                <label class="form-check-label" for="femaleRadio">女性</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="otherRadio"
                                    value="OTHERS" {{ old('gender')=='OTHERS' ? 'checked' : '' }}>
                                <label class="form-check-label" for="otherRadio">その他</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mt-2">配偶者</label>
                            <div class="row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maritalStatus" id="singleRadio"
                                    value="single" {{ old('maritalStatus')=='single' ? 'checked' : '' }}>
                                <label class="form-check-label" for="singleRadio">あり</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maritalStatus" id="marriageRadio"
                                    value="marriage" {{ old('maritalStatus')=='marriage' ? 'checked' : '' }}>
                                <label class="form-check-label" for="marriageRadio">無し</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">メールアドレス</label>
                            <input type="mail" class="form-control" id="email" name="email" value="{{ old('email')}}"
                                placeholder="メールアドレス入力して下さい">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="postalCode" class="form-label">郵便番号</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode"
                                value="{{ old('postalCode')}}" placeholder="000-0000" maxlength="8">
                            @error('postalCode')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">住所</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{'address'}}"
                                placeholder="住所入力して下さい">
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">

                        {{-- dont delete --}}
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>在留資格</label>
                            <select class="form-control" name="visaStatus" style="width: 100%;">
                                <option value="" selected>ここ選んでください</option>
                                @foreach (App\Enums\visaStatus::cases() as $visaStatus)
                                <option value="{{ $visaStatus->value }}" {{ old('visaStatus')==$visaStatus->value ?
                                    'selected' : '' }}>
                                    {{ $visaStatus->label() }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Faculty" class="form-label">学科</label>
                            <input type="text" class="form-control" id="faculty" name="faculty"
                                value="{{ old('faculty')}}" placeholder="学科入力して下さい">
                            @error('faculty')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>日本能力試験</label>

                            <select class="form-control" name="jlptLevel">
                                <option value="" selected>ここ選んでください</option>
                                @foreach (App\Enums\jlptLevel::cases() as $jlptLevel)
                                <option value="{{ $jlptLevel->value }}" {{old('jlptLevel')==$jlptLevel->value ?
                                    'selected' : '' }}>{{ $jlptLevel->label() }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>活動ステータス</label>
                            <div class="row">
                                <select class="form-control" id="WorkingStatus" name="WorkingStatus"
                                    style="width: 100%;">
                                    <option value="" selected>ここ選んでください</option>
                                    @foreach($statuses as $status)
                                    <option value="{{ $status->value }}">{{ $status->label() }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="memo" class="form-label">メーモ</label>
                            <textarea class="form-control" name="memo" value="{{ old('memo')}}"
                                placeholder="メーモ"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="">ビーサ有効期限:</label>
                            <input type="date" class="form-control" name="visaExpiry" value="{{ old('visaExpiry')}}">
                            @error('visaExpiry')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="">最終学歴</label>
                            <select class="form-control" name="educationLevel">
                                <option value="" selected>ここ選んでください</option>
                                @foreach (App\Enums\educationLevel::cases() as $educationLevel)
                                <option value="{{ $educationLevel->value }}" {{ old('educationLevel')==$educationLevel->
                                    value ? 'selected' : ''}}>
                                    {{ $educationLevel->label() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>運転免許証</label>
                            <select class="form-control" name="licenseStatus" style="width: 100%;">
                                <option value="" selected>ここ選んでください</option>
                                @foreach (App\Enums\licenseStatus::cases() as $licenseStatus)
                                <option value="{{ $licenseStatus->value }}" {{ old('licenseStatus')==$licenseStatus->
                                    value ? 'selected' : '' }}>
                                    {{ $licenseStatus->label() }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

<script>

const postalCodeInput = document.getElementById('postalCode');

postalCodeInput.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); 
    if (value.length > 3) {
        value = value.substring(0, 3) + '-' + value.substring(3);
    }
    e.target.value = value.substring(0, 8); 
});

</script>

@endsection