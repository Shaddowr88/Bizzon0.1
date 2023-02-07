@extends('layouts/dashAdmin')
@section('dash')
<!-- EMPLACEMENT PICT + CALLENDIER -->
            <div class="col-xl-3 col-md-6 mb-4 mt-6">
              <div class="">

                <div id="calMain"> </div>
              <div>
              <p>Sed ut tum ad senem senex de senectute, sic hoc libro ad amicum amicissimus scripsi de amicitia.
              Tum est Cato locutus, quo erat nemo fere senior temporibus illis, nemo prudentior.</p>
              </div>
              <div class="col-xl-3 col-md-6 mb-4"> </div>
              <div class="card  shadow h-25 py-2">
             <div id="calendarWrap">
               <div class="row row-striped p-3">
               			<div class="col-3 text-right">
               				<h3 class="display-5"><span class="badge badge-secondary">23</span></h3>
               				<h1>OCT</h1>
               			</div>
               			<div class="col-9 ">
               				<h3 class="text-uppercase"><strong>Ice Social</strong></h3>
               				<ul class="list-inline">
               				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
               					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
               				</ul>
               				<p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               			</div>
               		</div>
               <div id="calendar"></div>
             </div>
           </div>
           </div>
             <div class="col-xl-3 col-md-6 mb-4"></div>
         </div>

<!-- EMPLACEMENT TAB -->

        <div class=" col-xl-8 col-md-6 mb-4">
        <div class="py-1">
          <h2 class="m-0 font-weight-bold text-primary">Ilot</h2>
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>

        </div>
<div class="col-xl-12 text-align-center">

<div class=" row text-center">
 @foreach($appartements as $appartement)
    <div class=" col_2 card m-2 shadow-sm">
      <div class="card-header">
       <h1 class="card-title pricing-card-title">{{$appartement->numero}}</h1>
      </div>
      <div class="col_2 card-body">
        <h4 class=" "><small class="text-muted"></small>{{$appartement->batiment_id}}</h4>
        <ul class="list-unstyled mt-3 mb-4">
         <li>propietaire</li>
         <li>Etage {{$appartement->etage}}</li>
          <li>{{$appartement->description}}</li>
        </ul>
      </div>
    </div>
    @endforeach



    </div>
  </div>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
        </div>
@endsection
