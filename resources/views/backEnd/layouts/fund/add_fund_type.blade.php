
@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="margin-box">
    <div class="row">
        <div class="col-sm-10">
            
                <strong> Services Home / Add Fund</strong>
            
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
                <form method="post" action="{{url('admin/insert/fund/type')}}">
                    @csrf
                    <div class="card card-body">

                          <h5 class="card-header  text-center py-4">
                            <strong>Add Fund Type</strong>
                          </h5>
                          <br>
                        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Fund Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control {{ $errors->has('fund_type_name') ? ' is-invalid' : '' }}"value="{{ old('fund_type_name') }}" name="fund_type_name"placeholder="enter a new fund type">
       @if ($errors->has('fund_type_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fund_type_name') }}</strong>
                                    </span>
                                @endif
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