@extends('backEnd.layouts.master')

@section('content-header')
 <h3 class="m-0 text-dark">Dashboard</h3>
@endsection
@section('dashboard')
  <!-- Content Wrapper. Contains page content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$totalfunds}} <strong>৳</strong></h3>
                <p>Total Funds</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$todaydonate->count()}}<sup style="font-size: 20px"></sup></h3>

                <p>Today Donate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <?php
              $i=1;
            $sum=0;
            ?>
                <h3>{{$allvolantier->count()}}</h3>
                
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('admin/view_volunteer_list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                
                <h3>{{$evenservices->count()}}</h3>

                <p>Service Events Alart</p>
              </div>
              
            
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('admin/service/event/alert')}}" class="small-box-footer">View Deatils <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                
                <h3>{{$evencauses->count()}}</h3>

                <p>Causes Events Alart</p>
              </div>
              
            
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('admin/causes/event/alert')}}" class="small-box-footer">View Deatils <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>
@endsection