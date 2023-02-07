@extends('layouts/dash')
@section('dash')


        <div class=" card  shadow col-xl-8 col-md-6 mb-4">
        <div class="py-3">
          <h6 class="m-0 font-weight-bold text-primary">Title</h6>
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class= id="home-tab" data-toggle="tab" href="#home"
                  role="tab" aria-controls="home">Home</a>
                   <p></p> </div>
                </li>
                <div class="col-xl-12 text-align-center">
                <table class="table table-striped table-sm ">
                                        <thead class="table-dark">
                                        <tr>


                                            <th>Entrprise</th>
                                            <th>activité</th>
                                            <th>contact</th>
                                            <th></th>
                                            <th>mail</th>

                                        </tr>
                                        </thead>
                                        <tbody>
{{--                                        @foreach($batiments as $batiment)--}}
                                            <tr>

                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
<td></td>

                                        </tr>
{{--                                            @endforeach--}}
                                        </tbody>
                                    </table>
                </div>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
        </div>
@endsection
