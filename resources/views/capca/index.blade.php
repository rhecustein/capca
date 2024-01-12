@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
<div class="card-body px-4 py-3">
<div class="row align-items-center">
<div class="col-9">
  <h4 class="fw-semibold mb-8">Capca</h4>
</div>
<div class="col-3">
  <div class="text-center mb-n5">
    <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
  </div>
</div>
</div>
</div>
</div>

    <div class="row">
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <a href="./page-user-profile.html" class="p-4 text-center bg-primary-subtle card shadow-none rounded-2">
          <img src="../assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-6 mx-auto" alt="">
          <p class="fw-semibold text-primary mb-1">Total Capca</p>
          <h4 class="fw-semibold text-primary mb-0">3,685</h4>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <a href="javascript:void(0)" class="p-4 text-center bg-warning-subtle card shadow-none rounded-2">
          <img src="../assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-6 mx-auto" alt="">
          <p class="fw-semibold text-warning mb-1">Identify</p>
          <h4 class="fw-semibold text-warning mb-0">256</h4>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <a href="./app-calendar.html" class="p-4 text-center bg-info-subtle card shadow-none rounded-2">
          <img src="../assets/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-6 mx-auto" alt="">
          <p class="fw-semibold text-info mb-1">Pending</p>
          <h4 class="fw-semibold text-info mb-0">932</h4>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <a href="./app-email.html" class="p-4 text-center bg-danger-subtle card shadow-none rounded-2">
          <img src="../assets/images/svgs/icon-favorites.svg" width="50" height="50" class="mb-6 mx-auto" alt="">
          <p class="fw-semibold text-danger mb-1">Persentase</p>
          <h4 class="fw-semibold text-danger mb-0">80%</h4>
        </a>
      </div>
    </div>
    <div class="row">
        <!-- row -->
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body p-4 text-center">
            <img src="{{ asset('capcaimg/capca1.jpeg')}}" alt="" width="130" height="130">
            <h3 class="mb-2 fw-bold fs-4 text-center list-unstyled"><b>1974</b></h3>
            <div class="row">
            <!-- A -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex">
                    <div class="p-2 bg-primary-subtle rounded-2 d-flex align-items-center justify-content-center me-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Font_A.svg/848px-Font_A.svg.png"
                            alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-danger-subtle text-danger w-100">25%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-warning-subtle text-warning w-100">50%</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-info-subtle text-info w-100">75%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-success-subtle text-success w-100">100%</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- B -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex">
                    <div class="p-2 bg-primary-subtle rounded-2 d-flex align-items-center justify-content-center me-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Font_B.svg/1874px-Font_B.svg.png"
                            alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-danger-subtle text-danger w-100">25%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-warning-subtle text-warning w-100">50%</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-info-subtle text-info w-100">75%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-success-subtle text-success w-100">100%</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- C -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex">
                    <div class="p-2 bg-primary-subtle rounded-2 d-flex align-items-center justify-content-center me-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Font_C.svg/450px-Font_C.svg.png"
                            alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-danger-subtle text-danger w-100">25%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-warning-subtle text-warning w-100">50%</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-info-subtle text-info w-100">75%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-success-subtle text-success w-100">100%</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- D -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex">
                    <div class="p-2 bg-primary-subtle rounded-2 d-flex align-items-center justify-content-center me-6">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Font_D.svg/817px-Font_D.svg.png"
                            alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-danger-subtle text-danger w-100">25%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-warning-subtle text-warning w-100">50%</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn bg-info-subtle text-info w-100">75%</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn bg-success-subtle text-success w-100">100%</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn bg-secondary-subtle text-secondary w-100">Identify</button>
            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
   
@endsection