
@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Bank Patner - Add Bank Patner</strong>
            
        </div>
        <div class="col-sm-2">
            
                <div class="manage_btn">
                    <a href="{{url('/admin/fund/manage')}}"><i class="fa fa-cog" aria-hidden="true"></i> Manage</a>
                </div>
            
        </div>
    </div>
</div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            </div>
        <div class="col-sm-6">
            <div class="fund-type-category-form">
          @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                <form action="{{url('/admin/add/bank/patner')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-body">

                          <h5 class="card-header  text-center py-4">
                            <strong>Add Bnak Patner</strong>
                          </h5>
                          <br>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Patner Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control {{ $errors->has('bank_patner_name') ? ' is-invalid' : '' }}"value="{{ old('bank_patner_name') }}" name="bank_patner_name"placeholder="enter a new bank patnar name">
       @if ($errors->has('bank_patner_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bank_patner_name') }}</strong>
                                    </span>
                                @endif
    </div>
    <br><br>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Bank Account:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control {{ $errors->has('bank_patner_account') ? ' is-invalid' : '' }}"value="{{ old('bank_patner_account') }}" name="bank_patner_account"placeholder="enter a bank account number">
       @if ($errors->has('bank_patner_account'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bank_patner_account') }}</strong>
                                    </span>
                                @endif
    </div>
    <br><br>

    <label for="inputEmail3" class="col-sm-3 col-form-label">Upload Logo:</label>
      <div class="col-sm-9">
      <input type="file" class="form-control" name="image">
       
    </div>

  </div>
  <br>
  <button type="submit"class="btn btn-success">Add</button><br>

  
                    </div>
                </form>
                
            </div>
        </div>
        <div class="col-sm-3">
            </div>


    </div>
</div>

@endsection