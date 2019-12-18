<HTML>
<HEAD>
<TITLE>donate4humanity</TITLE>
<STYLE>
body, input{
  font-family: Calibri, Arial;
}

</STYLE>
<script type="020a8834d3de2da50ef7992d-text/javascript">
  window.history.forward();
  function noBack(){ window.history.forward(); }
</script>
</HEAD>
<link rel="stylesheet" href="{{asset('public/frontEnd')}}/assets/css/bootstrap.min.css">
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="020a8834d3de2da50ef7992d-|49"></script>
<BODY onload="noBack();" onpageshow="if (!window.__cfRLUnblockHandlers) return false; if (event.persisted) noBack();" onunload="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-020a8834d3de2da50ef7992d-="">

                                         @php
                        $donor_id=Session::get('donor_id');

                        @endphp

                        @if (Session::has('message'))
                           <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="020a8834d3de2da50ef7992d-|49"></script>

<BODY onload="noBack();" onpageshow="if (!window.__cfRLUnblockHandlers) return false; if (event.persisted) noBack();" onunload="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-020a8834d3de2da50ef7992d-="">



<br>


<div class="container">
    <div class="row">
        <div class="col-sm-3">
            </div>
        <div class="col-sm-6">

            <div class="fund-type-category-form">
        
                <form method="post" action="{{url('donate/confirm/transaction/id')}}">
                    @csrf
                    <div class="card card-body">

                          <h5 class="card-header  text-center py-4">
                            <strong> Confirm Your Transaction ID</strong>
                          </h5>
                          <br>
                        <div class="form-group row">
                          <input type="hidden" value="{{$donor_id}}"name="donator_id">
                          <input type="hidden" value="0"name="status">
                       
                          <input type="hidden" name="last_id" value="{{$last_inserted_id}}">
                         
                          

    <div class="col-sm-12">
      <input type="text" class="form-control {{ $errors->has('transaction_id') ? ' is-invalid' : '' }}"value="{{ old('transaction_id') }}" name="transaction_id" placeholder="enter your transaction id" required>
       @if ($errors->has('transaction_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('transaction_id') }}</strong>
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

</BODY>

</html>