<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="/assets/style/payment.css"> -->
  <!-- <link rel="stylesheet" href="./assets/style/payment-en.css"> -->

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

</head>

<body>

  <div>
    <!-- Navbar code -->
    <!-- style="z-index: 1; top: 0; position: fixed; width: 100%" -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light px-5">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="./assets/images/Group 6.png" /></a>
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
                    <img src="./assets/profile-images/profile1.jpg" alt="" />
                  </div>
                  <div class="jane"><span> Jane Doe </span></div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </div>
              </li>
              <!-- <li class="nav-item">
                <div class="language-change">
                  <div>
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="jane"><span> English </span></div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </div>
              </li> -->
              <li class="nav-item">
                <div class="dropdown">
                  <div class="language-div dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div>
                      <i class="bi bi-globe"></i>
                    </div>
                    <!-- <div class="jane"><span> English </span></div> -->
                    <div class="language">
                      <span id="lang-select" data-translate="lang"> </span>
                    </div>
                    <div><i class="bi bi-chevron-down"></i></div>
                  </div>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li>
                      <button class="dropdown-item" type="button" id="englishButton" onclick="onLangChange('English')">
                        English
                      </button>
                    </li>
                    <li>
                      <button class="dropdown-item" type="button" id="arabicButton" onclick="onLangChange('Arabic')">
                        Arabic
                      </button>
                    </li>
                  </ul>
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
            <div class="price" data-translate="pricing"> Pricing </div>
          </div>
          <div class="row ">
            <div class="price-heading" data-translate="make-your-payment"> Make Your Payment</div>
          </div>
          <div class="row">
            <div class="price-text" data-translate="Select-a-plan-to-watch-unlimited-videos">Select a plan to watch
              unlimited videos </div>
          </div>
          <!-- accordian  -->
          <div class="row mt-5">
            <div class="accordion" id="accordionExample" style="padding-left: 0.8rem !important;">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button d-flex justify-content-between mb-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    <span data-translate="How-long-does-it-take-to-subscribe?">How long does it take to subscribe?
                    </span>
                    <span class="accordion-icon">
                      <i class="bi bi-plus-circle"></i>
                    </span>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" data-translate="accordian">
                    Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna
                    egestas amet maecenas.
                  </div>
                </div>
              </div>
              <div class="accordion-item mt-3">
                <h2 class="accordion-header " id="headingTwo">
                  <button class="accordion-button collapsed d-flex justify-content-between mb-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    <span data-translate="What-payment-methods-do-you-accept?">       What payment methods do you accept? </span>
             
                    <span class="accordion-icon"><i
                        class="bi bi-plus-circle"></i></span>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" data-translate="accordian">
                    Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna
                    egestas amet maecenas.
                  </div>
                </div>
              </div>
              <div class="accordion-item mt-3">
                <h2 class="accordion-header " id="headingThree">
                  <button class="accordion-button collapsed d-flex justify-content-between mb-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                   <span data-translate="What-shipping-options-do-you-have?">What shipping options do you have? </span>  
                    <span class="accordion-icon"><i
                        class="bi bi-plus-circle"></i></span>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body" data-translate="accordian">
                    Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna
                    egestas amet maecenas.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mt-5">
          <div class="cards">
            <div class="cards-heading m-auto ">
              <p class="pt-3" data-translate="Enter-Card-Information">Enter Card Information </p>
            </div>
            <div class="row">
              <form>
                <div id="cards ">
                  <label for="card-number" class="form-label labelss mt-4 px-2 d-flex justify-content-start" data-translate="card-number">Card
                    Number</label>
                  <div class="centers d-flex justify-content-center">
                    <input type="text" class="form-control" id="creditCardNumber" maxlength="19"
                      placeholder="1234 1234 1234 1234" />
                  </div>

                </div>
              </form>
            </div>
            <div class="row mt-4 mb-4">
              <div class="col-sm-5 ">
                <form>
                  <div id="expire">
                    <label for="expiry" class="form-label labelss px-2" data-translate="expiry-date">Expiry Date</label>
                    <div class="centers ps-2">
                      <input type="month" class="form-control" id="expiry" placeholder=" MM / YY"
                        onfocus="clearPlaceholder(this)" onblur="setPlaceholder(this)" placeholder="MM / YY" value=""
                        autocomplete="off" />
                    </div>
                  </div>
                </form>
              </div>

              <div class="col-sm-5 ">
                <form>
                  <div id="expire">
                    <label for="security" class="form-label labelss px-2" data-translate="security-code">Security Code</label>
                    <div class="centers ps-2">
                      <input type="tel" class="form-control" maxlength="4" id="cvv" placeholder="CVV" />
                    </div>

                  </div>
                </form>
              </div>

              <div class="col-sm-2 mt-4">
                <div class="card-icond d-flex justify-content-center pe-4 mt-2">
                  <img src="./assets/images/cvv 1.png" alt="" srcset="">
                </div>

              </div>
            </div>


          </div>
          <button class="card-button mt-3" type="submit" data-translate="continue">Continue</button>
        </div>
      </div>
    </div>

    <script src="./assets/js/payment.js"></script>
    <script src="./assets/js/placeholder.js"></script>
    <script>
      const creditCardNumberInput = document.getElementById('creditCardNumber');

      creditCardNumberInput.addEventListener('input', function (e) {
        let inputValue = e.target.value;

        // Remove any non-digit characters
        inputValue = inputValue.replace(/\D/g, '');

        // Add a space after every fourth digit
        inputValue = inputValue.replace(/(\d{4})(?=\d)/g, '$1 ');

        // Update the input field value
        e.target.value = inputValue;
      });





      // set input "MM/YY " AFTER click it will show the months and year 
      const inputField = document.getElementById('expiry');

      window.addEventListener('DOMContentLoaded', setPlaceholder);
      inputField.addEventListener('focus', clearPlaceholder);
      inputField.addEventListener('blur', setPlaceholder);

      function setPlaceholder() {
        if (inputField.value === '') {
          inputField.setAttribute('type', 'text');
          inputField.setAttribute('value', '');
          inputField.setAttribute('placeholder', 'MM / YY');
        }
      }

      function clearPlaceholder() {
        if (inputField.value === '') {
          inputField.setAttribute('type', 'month');
          inputField.setAttribute('value', '');
          inputField.setAttribute('placeholder', '');
        }
      }



    </script>

</body>

</html>