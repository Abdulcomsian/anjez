{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/payment.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@200;400;500;600;700&family=Manrope:wght@400;500;600;700&family=Noto+Sans:wght@400;500;600;700;800&family=Nunito:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">



        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    </head> --}}

    @extends('frontend.layouts.main')

    @section('content')

    <div>
        <!-- Navbar code -->
        <!-- style="z-index: 1; top: 0; position: fixed; width: 100%" -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/images/Group 6.png') }}" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <i class="bi bi-bell-fill" style="color: #7e5bf6"></i>
                            </li>
                            <li class="nav-item">
                                <div class="profile-content">
                                    <div>
                                        <img src="{{ url('assets/profile-images/profile1.jpg') }}" alt="" />
                                    </div>
                                    <div class="jane"><span> Jane Doe </span></div>
                                    <div><i class="bi bi-chevron-down"></i></div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="language-change">
                                    <div>
                                        <i class="bi bi-globe"></i>
                                    </div>
                                    <div class="jane"><span> English </span></div>
                                    <div><i class="bi bi-chevron-down"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <!-- content  -->

        <div class="container pricing">
            <div class="row d-flex justify-content-between mt-5 px-5 py-5">
                <!-- left  -->
                <div class="col-lg-6 mt-2">
                    <div class="row">
                        <div class="price"> Pricing </div>
                    </div>
                    <div class="row ">
                        <div class="price-heading"> Make Your Payment</div>
                    </div>
                    <div class="row">
                        <div class="price-text">Select a plan to watch unlimited videos </div>
                    </div>
                    <!-- accordian  -->
                    <div class="row mt-5">
                        <!-- <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long does it take to subscribe?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What payment methods do you accept?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What shipping options do you have?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                                </div>
                              </div>
                            </div>
                          </div> -->

                          <div class="accordion " id="accordionExample" style="padding-left: 0.8rem !important;">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   How long does it take to subscribe? <i class="fas fa-plus"></i>
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item mt-3">
                              <h2 class="accordion-header " id="headingTwo">
                                <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  What payment methods do you accept?  <i class="fas fa-plus"></i>
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item mt-3">
                              <h2 class="accordion-header " id="headingThree">
                                <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              What shipping options do you have?      <i class="fas fa-plus"></i>
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
                <div class="col-lg-5 mt-5">
                     <div class="cards" >
                        <div class="cards-heading m-auto "> <p class="pt-2">Enter Card Information </p>  </div>
                        <div class="row">
                            <form>
                                <div id="cards ">
                                  <label for="card-number" class="form-label labelss mt-4 px-2 d-flex justify-content-start">Card Number</label>
                                 <div class="centers d-flex justify-content-center">
                                    <input
                                    type="number"
                                    class="form-control"
                                    id="card-number"
                                    placeholder="1234 1234 1234 1234"
                                  />
                                 </div>

                                </div>
                             </form>
                        </div>
                       <div class="row mt-4 mb-4">
                        <div class="col-sm-5 ">
                            <form>
                                <div id="expire">
                                  <label for="expiry" class="form-label labelss px-2">Expiry Date</label>
                                  <div class="centers ps-2">
                                    <input
                                    type="date"
                                    class="form-control"
                                    id="expiry"
                                    placeholder=" MM / YY"
                                  />
                                  </div>

                                </div>
                             </form>
                        </div>

                        <div class="col-sm-5 ">
                          <form>
                              <div id="expire">
                                <label for="security" class="form-label labelss px-2">Security Code</label>
                                <div class="centers ps-2">
                                  <input
                                  type="number"
                                  class="form-control"
                                  id="security"
                                  placeholder=" CVV"
                                />
                                </div>

                              </div>
                           </form>
                      </div>

                        <div class="col-sm-2 mt-4">
                          <div class="card-icond d-flex justify-content-center pe-4 mt-2">
                            <img src="{{ url('assets/images/cvv 1.png') }}" alt="" srcset="">
                          </div>

                        </div>
                       </div>


                    </div>
                    <button class="card-button mt-3" type="submit">Continue</button>
                </div>
            </div>
        </div>
@endsection
