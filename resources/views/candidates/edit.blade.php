@extends('adminlte::page')

@section('content')
    <style>
        .form-group, .form-check {
            flex: 1;
            min-width: 300px; /* Adjust this value as needed for your layout */
            margin: 10px;
        }
    </style>

    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>Candidate Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Candidate Edit</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="d-flex flex-wrap">
                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">お名前（性）</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName', $candidate['firstName']) }}" placeholder="例　山田">
                                    </div>
                                    @error('firstName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="form-label">（名）</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName', $candidate['lastName']) }}" placeholder="例　太朗">
                                    </div>
                                    @error('lastName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="firstNameKana" class="form-label">フリカナ (セイ)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="firstNameKana" name="firstNameKana" value="{{ old('firstNameKana', $candidate['firstNameKana']) }}" placeholder="例　ヤマダ">
                                    </div>
                                    @error('firstNameKana')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="lastNameKana" class="form-label">（メイ）</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="lastNameKana" name="lastNameKana" value="{{ old('lastNameKana', $candidate['lastNameKana']) }}" placeholder="例　タロウ">
                                    </div>
                                    @error('lastNameKana')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="dob" class="form-label">生年月日</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" class="form-control" id="BirthDate" name="birthDate" value="{{ old('birthDate', $candidate['dateOfBirth']) }}">
                                    </div>
                                    @error('birthDate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">性別</label>
                                    <div class="d-flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="MALE" {{ old('gender', $candidate['gender']) == 'MALE' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="maleRadio">男性</label>
                                            &nbsp;&nbsp;&nbsp;
                                            <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="FEMALE" {{ old('gender', $candidate['gender']) == 'FEMALE' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="femaleRadio">女性</label>
                                            &nbsp;&nbsp;&nbsp;
                                            <input class="form-check-input" type="radio" name="gender" id="otherRadio" value="OTHERS" {{ old('gender', $candidate['gender']) == 'OTHERS' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="otherRadio">その他</label>
                                        </div>
                                    </div>
                                    @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="phone" class="form-label">携帯番号番号</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $candidate['phone']) }}" placeholder="ハイフン無し携帯電話番号" maxlength="11">
                                    </div>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">配偶者</label>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="maritalStatus" id="singleRadio" value="single" {{ old('maritalStatus', $candidate['maritalStatus']) == 'single' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="singleRadio">あり</label>
                                            &nbsp;&nbsp;&nbsp;
                                            <input class="form-check-input" type="radio" name="maritalStatus" id="marriageRadio" value="marriage" {{ old('maritalStatus', $candidate['maritalStatus']) == 'marriage' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="marriageRadio">無し</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="email" class="form-label">メールアドレス</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $candidate['email']) }}" placeholder="メールアドレス入力して下さい">
                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <!-- Empty Field -->
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="postalCode" class="form-label">郵便番号</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="postalCode" name="postalCode" value="{{ old('postalCode', $candidate['postalCode']) }}" placeholder="000-0000" maxlength="8">
                                    </div>
                                    @error('postalCode')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <!-- Empty Field -->
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="address" class="form-label">住所</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $candidate['address']) }}" placeholder="住所入力して下さい">
                                    </div>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <!-- Empty Field -->
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>在留資格</label>
                                    <select class="form-control" name="visaStatus" style="width: 100%;">
                                        <option value="" selected>ここ選んでください</option>
                                        @foreach (App\Enums\visaStatus::cases() as $visaStatus)
                                            <option value="{{ $visaStatus->value }}" {{ old('visaStatus', $candidate['visaStatus']) == $visaStatus->value ? 'selected' : '' }}>
                                                {{ $visaStatus->label() }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('visaStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="visaExpiry" class="form-label">ビーサ有効期限:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="visaExpiry" value="{{ old('visaExpiry', $candidate['visaExpiry']) }}">
                                    </div>
                                    @error('visaExpiry')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="educationLevel" class="form-label">最終学歴</label>
                                    <select class="form-control" name="educationLevel">
                                        <option value="" selected>ここ選んでください</option>
                                        @foreach (App\Enums\educationLevel::cases() as $educationLevel)
                                            <option value="{{ $educationLevel->value }}" {{ old('educationLevel', $candidate['educationLevel']) == $educationLevel->value ? 'selected' : '' }}>
                                                {{ $educationLevel->label() }}</option>
                                        @endforeach
                                    </select>
                                    @error('educationLevel')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="faculty" class="form-label">学科</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="faculty" name="faculty" value="{{ old('faculty', $candidate['faculty']) }}" placeholder="学科入力して下さい">
                                    </div>
                                    @error('faculty')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>日本能力試験</label>
                                    <select class="form-control" name="jlptLevel">
                                        <option value="" selected>ここ選んでください</option>
                                        @foreach (App\Enums\jlptLevel::cases() as $jlptLevel)
                                            <option value="{{ $jlptLevel->value }}" {{ old('jlptLevel', $candidate['jlptLevel']) == $jlptLevel->value ? 'selected' : '' }}>
                                                {{ $jlptLevel->label() }}</option>
                                        @endforeach
                                    </select>
                                    @error('jlptLevel')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>運転免許証</label>
                                    <select class="form-control" name="licenseStatus" style="width: 100%;">
                                        <option value="" selected>ここ選んでください</option>
                                        @foreach (App\Enums\licenseStatus::cases() as $licenseStatus)
                                            <option value="{{ $licenseStatus->value }}" {{ old('licenseStatus', $candidate['licenseStatus']) == $licenseStatus->value ? 'selected' : '' }}>
                                                {{ $licenseStatus->label() }}</option>
                                        @endforeach
                                    </select>
                                    @error('licenseStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>活動ステータス</label>
                                    {{-- <select class="form-control" id="WorkingStatus" name="WorkingStatus" style="width: 100%;">
                                        <option value="" selected>ここ選んでください</option>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->value }}" {{ old('WorkingStatus', $candidate['WorkingStatus']) == $status->value ? 'selected' : '' }}>
                                                {{ $status->label() }}</option>
                                        @endforeach
                                    </select> --}}
                                    @error('WorkingStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <!-- Empty Field -->
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                {{-- <div class="form-group">
                                    <label for="workExperence" class="form-label">職務経歴</label>
                                    <textarea class="form-control" name="workExperence" rows="5" placeholder="
                                    アルバイト=> セブンイレブン新宿３丁目店
                                    正社員 => sample株式会社">{{ old('workExperence', $candidate['workExperence']) }}</textarea>
                                    @error('workExperence')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <!-- Empty Field -->
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="memo" class="form-label">メーモ</label>
                                    <textarea class="form-control" name="memo" rows="5" placeholder="メーモ">{{ old('memo', $candidate['memo']) }}</textarea>
                                    @error('memo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <!-- Empty Field -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">更新する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        const postalCodeInput = document.getElementById('postalCode');

        postalCodeInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 3) {
                value = value.substring(0, 3) + '-' + value.substring(3);
            }
            e.target.value = value.substring(0, 8);
        });
    </script>
@endsection
