@extends('layouts/user')
@section('dash')
<div class="row">


<!-- EMPLACEMENT PICT + CALLENDIER -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card  shadow h-25 py-2">
                <p>
                  <input type="text" name="date" id="dateField" value="" />
                </p>
                <div id="calMain">
<div id="calendarWrap">
                <ul>

                      <li> </li>
                      <li id="calendarTitle"> </li>
                      <li> </li>
                      <li> </li>
                </ul>
                    <div id="calendar"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4"> </div>
<div class="col-xl-3 col-md-6 mb-4"> </div>
            </div>




<!-- EMPLACEMENT TAB -->
                          <div class="col-xl-8 col-md-6 mb-4">
                              <div class="py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                              </div>


                              <div class="card-body">
								  <div class="col-xl-10 col-md-6 mb-4">

					<div class="card border-left-warning shadow h-100 py-2 mb-3">
            		<div class="card-body">
						Home
					<div >
                     <p>Quam ob rem circumspecta cautela observatum est deinceps et cum edita montium petere coeperint grassatores, loci iniquitati milites cedunt.</p>
                    </div>
           			</div>
          			</div>

					<div class="card border-left-warning shadow h-100 py-2 mb-3">
            			<div class="card-body">
						Home
							<div class="col-xl-8">
								 <p>Quam ob rem circumspecta cautela observatum est deinceps et cum edita montium petere coeperint grassatores, loci iniquitati milites cedunt.</p>
							</div>
           				</div>
          			</div>

</div>

</div>

<!-- Carte bas de pagee -->
<!-- Approach
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>
            -
      <!-- Footer
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
     End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

           </div>

@endsection
