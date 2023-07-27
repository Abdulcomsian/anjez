<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=100% , initial-scale=1.0" />
    <title>Login</title>
    <!-- <link rel="stylesheet" href="./assets/style/login.css" /> -->
    <!-- <link rel="stylesheet" href="./assets/style/login-en.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.12/build/css/intlTelInput.css">

  </head>
  <body>
    <div>
      <div class="login-main">
        <div class="left-login-side">
          <div>
            <img src="./assets/images/Frame.png" alt="logo" />
          </div>
        </li>
        <li class="nav-item d-none ">
          <div class="dropdown">
            <div
              class="language-div dropdown-toggle"
              id="dropdownMenu2"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <div>
                <i class="bi bi-globe"></i>
              </div>
              <div class="language">
                <span id="lang-select" data-translate="lang"> </span>
              </div>
              <div><i class="bi bi-chevron-down"></i></div>
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li>
                <button
                  class="dropdown-item"
                  type="button"
                  id="englishButton"
                  onclick="onLangChange('English')"
                >
                  English
                </button>
              </li>
              <li>
                <button
                  class="dropdown-item"
                  type="button"
                  id="arabicButton"
                  onclick="onLangChange('Arabic')"
                >
                  Arabic
                </button>
              </li>
            </ul>
          </div>
        </li>
        </div>
        <div class="right-login-side">
          <div class="logo-section">
            <div>
              <a href="./index.html"
                ><img src="./assets/images/Group 6.png" alt="logo"
              /></a>
            </div>
          </div>
          <div class="form-section">
            <div>
              <div class="text-container">
                <div class="text-line-1">
                  <span data-translate="welcome-to"> Welcome to  </span><span style="color:  #7e5bf6;" data-translate="anjez">Anjez</span>
                </div>
                <div class="text-line-2">
                  <span data-translate="account">
                    Don't have any account? 
                  </span>
                  <a href="./signup.html" data-translate="sign-up">Sign Up</a>
                </div>
              </div>
              <div class="row d-flex justify-content-start mt-5">
                <div class="col-3 show" id="mail" onclick="showEmail()" style="cursor: pointer;" data-translate="email"> Email </div>
    
                <div class="col-6" id="no"  onclick="showNumber()" style="cursor: pointer;" data-translate="phone-number"> Phone  Number</div>
              </div>
              
              <div class="form-container">
                <form>
                  <div id="emails">
                    <label for="email" class="form-label"  data-translate="email">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      placeholder ="Your Email "
                    />
                  </div>

                  <div id="numd"  class="mb-3 d-flex flex-column" style="display: none !important; ">
                    <label for="phone" class="form-label" data-translate="phone-number">Phone Number</label>
                    <input type="tel" id="phone-input" class="form-control" placeholder="50 444 555">
                  </div>
                  <div>
                    <label for="password" class="form-label" data-translate="password">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      placeholder="********"
                    />
                  </div>
                  <div>
                    <button type="submit" data-translate="log-in">Log In</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="./assets/js/login.js"></script>
    <script src="./assets/js/placeholder.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.12/build/js/intlTelInput.min.js"></script>
    <script>
      var input = document.querySelector("#phone-input");
      var iti = window.intlTelInput(input, {
        initialCountry: "ae",
        preferredCountries: ["ae", "gb"], // You can set the preferred countries
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.12/build/js/utils.js" // Make sure to include this script
      });
    </script>
    <script>
      function showNumber(){
        document.getElementById("emails").style.display="none";
        document.getElementById("numd").style.display="block";
        document.getElementById("mail").classList.remove("show")
        document.getElementById("no").classList.add("show")
      }

      function showEmail(){
        document.getElementById("emails").style.display="block";
        document.getElementById("numd").style.setProperty("display", "none", "important");
        document.getElementById("mail").classList.add("show")
        document.getElementById("no").classList.remove("show")
      }

    </script>

  </body>
</html>
