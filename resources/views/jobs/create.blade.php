@extends('adminlte::page')

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
                <a href="{{ route('jobs.index')}}" class="btn btn-outline-info">Back</a>

            </div>
        </div>
    </div>
</div>


<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Job add</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">  
                  <div class="col-md-6">
                      <div class="form-group">
                            <label>Company Name</label>
                            <select class="form-control" name="visaStatus" style="width: 100%;">
                                <option value="" selected>ここ選んでください</option>
                            </select>
                      </div>
                      <div class="form-group">
                          <label for="firstNameKana" class="form-label">Job Type</label>
                          <input type="text" class="form-control" id="firstNameKana" name="firstNameKana"
                              value="{{ old('firstNameKana')}}" placeholder="例　ヤマダ">
                          @error('firstNameKana')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                        <label>Job Type</label>
                        <select class="form-control" name="visaStatus" style="width: 100%;">
                            <option value="" selected>ここ選んでください</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Job Categoty</label>
                        <select class="form-control" name="visaStatus" style="width: 100%;">
                            <option value="" selected>ここ選んでください</option>
                        </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Career Level</label>
                      <select class="form-control" name="visaStatus" style="width: 100%;">
                          <option value="" selected>ここ選んでください</option>
                          <option value="" >batchler</option>
                          <option value="" >vocational</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="firstNameKana" class="form-label">Salary From</label>
                      <input type="text" class="form-control" id="firstNameKana" name="firstNameKana"
                          value="{{ old('firstNameKana')}}" placeholder="例　ヤマダ">
                      @error('firstNameKana')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label>Employee Type</label>
                      <select class="form-control" name="visaStatus" style="width: 100%;">
                          <option value="" selected>ここ選んでください</option>
                          <option value="">seisyain</option>
                          <option value="">keiyaku syain</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>New OR Changes</label>
                      <select class="form-control" name="visaStatus" style="width: 100%;">
                          <option value="" selected>choose option</option>
                          <option value="">new</option>
                          <option value="">job chnage</option>
                      </select>
                    </div>
                    
                    
                  </div>


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>gender</label>
                        <select class="form-control" name="visaStatus" style="width: 100%;">
                            <option value="" selected>ここ選んでください</option>
                            <option value="">men</option>
                            <option value="">women</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="firstNameKana" class="form-label">Salary To</label>
                        <input type="text" class="form-control" id="firstNameKana" name="firstNameKana"
                            value="{{ old('firstNameKana')}}" placeholder="例　ヤマダ">
                        @error('firstNameKana')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Apply From</label>
                        <select class="form-control" name="visaStatus" style="width: 100%;">
                            <option value="" selected>ここ選んでください</option>
                            <option value="">inside japan</option>
                            <option value="">outside japan</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Japanese Skill</label>
                        <select class="form-control" name="visaStatus" style="width: 100%;">
                            <option value="" selected>ここ選んでください</option>
                            <option value="">n1</option>
                            <option value="">n2</option>
                        </select>
                      </div>
                    </div>



                    


                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstNameKana" class="form-label">Job Tag</label>
                      <input type="text" class="form-control" id="firstNameKana" name="firstNameKana"
                          value="{{ old('firstNameKana')}}" placeholder="例　ヤマダ">
                      @error('firstNameKana')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="firstNameKana" class="form-label">memo</label>
                      <input type="text" class="form-control" id="firstNameKana" name="firstNameKana"
                          value="{{ old('firstNameKana')}}" placeholder="例　ヤマダ">
                      @error('firstNameKana')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
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