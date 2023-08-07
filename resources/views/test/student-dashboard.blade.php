<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard</title>

  <!-- <link rel="stylesheet" href="./assets/style/student-dashboard-en.css"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@200;400;500;600;700&family=Manrope:wght@400;500;600;700&family=Noto+Sans:wght@400;500;600;700;800&family=Nunito:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>
  <div>
    <!-- Navbar code -->
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

    <!-- Main Content -->
    <div>
      <div class="main-content">
        <div class="greeting-text">
          <div class="text-line-1">
            <span id="date"></span>
            <!-- <button id="englishButton">English</button>
            <button id="arabicButton">Arabic</button> -->
          </div>
          <div class="text-line-2">
            <span> <span data-translate="hi-jane"> </span> <span id="greeting"> </span></span>
          </div>
          <div class="text-line-3">
            <span>Lorem ipsum dolor sit amet consectetur. Nibh non ac</span>
          </div>
        </div>

        <div class="subject-list">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1.png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span><a href="./student-content.html" data-translate="biology"> Biology </a> </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1 (1).png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span data-translate="physics"> Physics </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1 (2).png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span data-translate="chemistry"> Chemistry </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container-one">
                  <img src="./assets/images/Frame 1.png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span data-translate="computer-science"> Computer Science </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1.png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span><a href="" data-translate="math"> Mathematics </a> </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1 (1).png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span data-translate="physics"> Physics </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container">
                  <img src="./assets/images/8138748 1 (2).png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span data-translate="chemistry"> Chemistry </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  center">
              <div class="card sample-card">
                <div class="card-img-container-one">
                  <img src="./assets/images/Frame 1.png" class="card-img-top img-fluid" alt="..." />
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <div class="text-line-1">
                      <span data-translate="computer-science"> Computer Science </span>
                    </div>
                    <div class="text-line-2">
                      <span>Lorem ipsum dolor sit amet consectetur</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>




    <script src="./assets/js/student-dashboard.js"></script>
    <script src="./assets/js/placeholder.js" defer></script>



    <script>
      // convert date into arbic
      var today = new Date();
      var hour = today.getHours();
      var options = { weekday: "long", month: "long", day: "numeric" };
      var date = today.toLocaleDateString(undefined, options);
      document.getElementById("date").textContent = date;

      // Button click event listeners
      // document.getElementById("englishButton").addEventListener("click", function () {
      //   var options = { weekday: "long", month: "long", day: "numeric" };
      //   var date = today.toLocaleDateString(undefined, options);
      //   document.getElementById("date").textContent = date;
      // });

      // document.getElementById("arabicButton").addEventListener("click", function () {
      //   var options = { weekday: "long", month: "long", day: "numeric" };
      //   var date = today.toLocaleDateString("ar-EG", options);
      //   document.getElementById("date").textContent = date;
      // });






    </script>


    <script>
      var hour = today.getHours();
      // Use the 'hour' variable in your conditional statements
      if (hour >= 5 && hour < 12) {
        document.getElementById("greeting").innerHTML = " <span data-translate='good-morning'></span>";
      } else if (hour >= 12 && hour < 17) {
        document.getElementById("greeting").innerHTML = "<span data-translate='good-afternoon'></span>";
      } else if (hour >= 17 && hour < 20) {
        document.getElementById("greeting").innerHTML = "<span data-translate='good-evening'></span>";
      } else {
        document.getElementById("greeting").innerHTML = "<span data-translate='good-night'></span>";
      }
    </script>

</body>

</html>
