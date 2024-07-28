@extends('adminlte::page')

@section('content')
    <style>
        .form-group, .form-check {
            flex: 1;
            min-width: 300px; /* Adjust this value as needed for your layout */
            margin: 10px;
        }
        .d-flex.w-100 {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
        }
    </style>

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
                    <a href="{{ route('jobs.index')}}" class="btn btn-outline-info">Back</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Job Add</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('jobs.store') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-wrap">
                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <select class="form-control" name="companyName" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jobType" class="form-label">Job Type</label>
                                    <input type="text" class="form-control" id="jobType" name="jobType"
                                           value="{{ old('jobType') }}" placeholder="例　ヤマダ">
                                    @error('jobType')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>Job Category</label>
                                    <select class="form-control" name="jobCategory" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Career Level</label>
                                    <select class="form-control" name="careerLevel" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                        <option value="bachelor">Bachelor</option>
                                        <option value="vocational">Vocational</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="salaryFrom" class="form-label">Salary From</label>
                                    <input type="text" class="form-control" id="salaryFrom" name="salaryFrom"
                                           value="{{ old('salaryFrom') }}" placeholder="例　ヤマダ">
                                    @error('salaryFrom')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="salaryTo" class="form-label">Salary To</label>
                                    <input type="text" class="form-control" id="salaryTo" name="salaryTo"
                                           value="{{ old('salaryTo') }}" placeholder="例　ヤマダ">
                                    @error('salaryTo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>Employee Type</label>
                                    <select class="form-control" name="employeeType" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                        <option value="permanent">Permanent</option>
                                        <option value="contract">Contract</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>New OR Changes</label>
                                    <select class="form-control" name="newOrChanges" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                        <option value="new">New</option>
                                        <option value="jobChange">Job Change</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                        <option value="male">Men</option>
                                        <option value="female">Women</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Apply From</label>
                                    <select class="form-control" name="applyFrom" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                        <option value="insideJapan">Inside Japan</option>
                                        <option value="outsideJapan">Outside Japan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label>Japanese Skill</label>
                                    <select class="form-control" name="japaneseSkill" style="width: 100%;">
                                        <option value="" selected>▼</option>
                                        <option value="n1">N1</option>
                                        <option value="n2">N2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jobTag" class="form-label">Job Tag</label>
                                    <input type="text" class="form-control" id="jobTag" name="jobTag"
                                           value="{{ old('jobTag') }}" placeholder="例　ヤマダ">
                                    @error('jobTag')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex w-100 p-2">
                                <div class="form-group">
                                    <label for="memo" class="form-label">Memo</label>
                                    <textarea class="form-control" name="memo" rows="5"
                                              placeholder="メーモ">{{ old('memo') }}</textarea>
                                    @error('memo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        // Custom JS can be added here
    </script>
@endsection
