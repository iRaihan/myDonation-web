@extends('frontEnd.layouts.donor.donor_account')

@section('donor_content')


<div class="container">
    <div class="row">
       
        <div class="col-sm-12 ">
            
        </div>
                  
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-11">
            
            <div class="account_table_box">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 3%">Sl.No.</th>
                            <th style="width: 20%">Title</th>
                            <th style="width: 12%">Area</th>
                            <th style="width: 10%" >Given Peson</th>
                            <th style="width: 10%" >Total Cost</th>
                            <th style="width: 8%"> Date</th>
                            <th style="width: 12%">Message</th>
                            <th style="width: 10%">Details Link</th>
                        </tr>
                        </thead>
                        @foreach($alls as $all)
                        <tbody>
                        <tr>
                            <td>1</td>
                          
                            <td>{{$all->title}}</td>
                            <td>{{$all->place}}</td>
                            <td>{{$all->num_person}}</td>
                            <td>{{$all->amount}}</td>
                            <td>{{$all->e_date}}</td>
                            <td>{{$all->message}}</td>
                            <td><a href="https://www.facebook.com">{{$all->details}} </a></td>
                            
                            
                          

                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                </table>
            </div>
        </div>
        
    </div>
</div>

@endsection
