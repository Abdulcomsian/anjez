<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />


    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
      integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@200;400;500;600;700&family=Lexend:wght@300;400;500;600;700;800&family=Manrope:wght@400;500;600;700&family=Noto+Sans:wght@400;500;600;700;800&family=Nunito:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div>
      <!-- Navbar code -->
      <div>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container px-5">
            <a class="navbar-brand" href="/"
              ><img src="./assets/images/Group 6.png"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
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
                      <div class="language-div dropdown-toggle" id="dropdownMenu2"
                          data-bs-toggle="dropdown" aria-expanded="false">
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
                              <button class="dropdown-item" type="button" id="englishButton"
                                  onclick="onLangChange('English')">
                                  English
                              </button>
                          </li>
                          <li>
                              <button class="dropdown-item" type="button" id="arabicButton"
                                  onclick="onLangChange('Arabic')">
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

      <!-- Side-Navbar -->
      <div class="container-fluid mt-1">
        <div class="row flex-nowrap" style="min-height: 100%">
          <div class="col-auto col-md-3 col-xl-2 px-0 bg-white">
            <div
              class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white"
            >
              <ul
                class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100 mt-3"
                id="menu"
              >
                <li
                  class="nav-item w-100 px-lg-3 px-sm-0 mt-4 menu-item-active"
                  id="one"
                  onclick=" dash()"
                >
                  <a href="#" class="nav-link align-middle">
                    <i class="fs-5 bi-house menu-item-icon"></i>
                    <span class="ms-2 d-none d-sm-inline font-noto-sans" data-translate="dashboard">
                      Dashboard
                    </span>
                  </a>
                </li>
                <li
                  class="nav-item w-100 px-lg-3 px-sm-0 mt-3"
                  id="two"
                  onclick="use()"
                >
                  <a href="#" class="nav-link align-middle">
                    <i class="fs-5 bi-people menu-item-icon"></i>
                    <span class="ms-2 d-none d-sm-inline font-noto-sans" data-translate="user">
                      Users
                    </span>
                  </a>
                </li>
                <li
                  class="nav-item w-100 px-lg-3 px-sm-0 mt-3"
                  id="three"
                  onclick=" course()"
                >
                  <a href="#" class="nav-link align-middle">
                    <i class="fs-5 bi-card-list menu-item-icon"></i>
                    <span class="ms-2 d-none d-sm-inline font-noto-sans" data-translate="courses">
                      Courses
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col py-3 overflow-auto">
            <!-- Right Side Content -->

            <div class="content" id="content">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mt-5">
                    <div class="card-body">
                      <div class="icon d-flex justify-content-center">
                        <div class="small_div">
                          <img
                            src="./assets/images/Group-1.svg"
                            alt=""
                            srcset=""
                          />
                        </div>
                      </div>
                      <h5 class="card-title d-flex justify-content-center mt-5" data-translate="total-students">
                        Total Students
                      </h5>
                      <p class="card-text d-flex justify-content-center mt-2" data-translate="800">
                        800
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-5">
                    <div class="card-body">
                      <div class="icon d-flex justify-content-center">
                        <div class="small_div">
                          <img
                            src="./assets/images/Group 324.svg"
                            alt=""
                            srcset=""
                          />
                        </div>
                      </div>
                      <h5 class="card-title d-flex justify-content-center mt-5" data-translate="videos-watched">
                        Videos Watched
                      </h5>
                      <p class="card-text d-flex justify-content-center mt-2" data-translate="100">
                        100
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-5">
                    <div class="card-body">
                      <div class="icon d-flex justify-content-center">
                        <div class="small_div">
                          <img
                            src="./assets/images/Group 323.svg"
                            alt=""
                            srcset=""
                          />
                        </div>
                      </div>
                      <h5 class="card-title d-flex justify-content-center mt-5" data-translate="minutes-spend">
                        Minutes Spent
                      </h5>
                      <p class="card-text d-flex justify-content-center mt-2" data-translate="1000">
                        1000
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card mt-5">
                    <div class="card-body">
                      <div class="icon d-flex justify-content-center">
                        <div class="small_div">
                          <img
                            src="./assets/images/Group 325.svg"
                            alt=""
                            srcset=""
                          />
                        </div>
                      </div>
                      <h5 class="card-title d-flex justify-content-center mt-5" data-translate="total-courses">
                        Total Courses
                      </h5>
                      <p class="card-text d-flex justify-content-center mt-2" data-translate="30">
                        30
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-5">
                    <div class="card-body">
                      <div class="icon d-flex justify-content-center">
                        <div class="small_div">
                          <img
                            src="./assets/images/Group.svg"
                            alt=""
                            srcset=""
                          />
                        </div>
                      </div>
                      <h5 class="card-title d-flex justify-content-center mt-5" data-translate="total-subscribtions">
                        Total Subscriptions
                      </h5>
                      <p class="card-text d-flex justify-content-center mt-2" data-translate="2000">
                        2000
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mt-5">
                    <div class="card-body">
                      <div class="icon d-flex justify-content-center" >
                        <div class="small_div">
                          <img
                            src="./assets/images/Group.svg"
                            alt=""
                            srcset=""
                          />
                        </div>
                      </div>
                      <h5 class="card-title d-flex justify-content-center mt-5" data-translate="registered-users">
                        Registered Users
                      </h5>
                      <p class="card-text d-flex justify-content-center mt-2" data-translate="500">
                        500
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- users  -->
            <div class="user mt-5 pb-5" id="users" style="display: none">
              <div class="container">
                <div class="row">
                  <div class="col mt-4 d-flex justify-content-start">
                    <p class="heading-text d-flex justify-content-center" data-translate="users">
                      Users
                    </p>
                  </div>
                  <div class="col d-flex justify-content-end">
                    <button
                      class="px-2 mt-3 plus"
                      type="button"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                      data-translate="+add-users"
                    >
                      + Add Users
                    </button>
                  </div>
                </div>
                <div
                  class="row aa d-flex justify-content-between"
                  style="background-color: #c4bfff21; border-radius: 0.2rem"
                >
                  <div class="col-md-5 py-2">
                    <input
                      type="text"
                      class="iconss py-2"
                      value
                      id="search"
                      placeholder="Search by name"
                    />
                  </div>
                  <div class="col-md-6 py-2 d-flex justify-content-end">
                    <button
                      class="d-flex justify-content-between px-3 pt-2"
                      type="submit"
                    >
                      <img
                        class="pt-1"
                        src="./assets/images/button icon.png"
                        alt=""
                        style="margin-right: 1%"
                       
                      />
                      <span  data-translate="filter"></span>
                      <!-- Filter -->
                    </button>
                  </div>
                </div>
                <hr />
                <div class="row up pt-3">
                  <div class="col-3" data-translate="name">NAME</div>
                  <div class="col-3" data-translate="Email">EMAIL</div>
                  <div class="col-2" data-translate="billing-date">BILLING DATE</div>
                  <div class="col-2" data-translate="status">STATUS</div>
                  <div class="col-2" data-translate="amount">AMOUNT</div>
                </div>
                <hr />
                <div class="row py-2">
                  <div class="col-3">
                    <!-- <img src="/assets/images/Outline.png" alt=""> -->
                    <input type="checkbox" />
                    <span class="ms-sm-3 named"> Jane Cooper</span>
                  </div>
                  <div class="col-3 named">
                    <span> janecooper@gmail.com </span>
                  </div>
                  <div class="col-2">
                    <span>
                      <input type="date" style="width: 94%; border: none" />
                    </span>
                  </div>
                  <div class="col-2">
                    <div class="subcribe text-center py-1">Subscribed</div>
                  </div>
                  <div class="col-2">
                    <div class="amount">$500.00</div>
                  </div>
                </div>
                <hr />
                <div class="row py-2">
                  <div class="col-3">
                    <!-- <img src="/assets/images/Outline.png" alt=""> -->
                    <input type="checkbox" />
                    <span class="ms-sm-3 named"> Jane Cooper</span>
                  </div>
                  <div class="col-3 named">
                    <span> janecooper@gmail.com </span>
                  </div>
                  <div class="col-2">
                    <span>
                      <input type="date" style="width: 94%; border: none" />
                    </span>
                  </div>
                  <div class="col-2">
                    <div class="subcribe text-center py-1">Subscribed</div>
                  </div>
                  <div class="col-2">
                    <div class="amount">$500.00</div>
                  </div>
                </div>
                <hr />
                <div class="row py-2">
                  <div class="col-3">
                    <!-- <img src="/assets/images/Outline.png" alt=""> -->
                    <input type="checkbox" />
                    <span class="ms-sm-3 named"> Jane Cooper</span>
                  </div>
                  <div class="col-3 named">
                    <span> janecooper@gmail.com </span>
                  </div>
                  <div class="col-2">
                    <span>
                      <input type="date" style="width: 94%; border: none" />
                    </span>
                  </div>
                  <div class="col-2"></div>
                  <div class="col-2">
                    <div class="amount">$500.00</div>
                  </div>
                </div>
                <hr />
                <div class="row py-2">
                  <div class="col-3">
                    <!-- <img src="/assets/images/Outline.png" alt=""> -->
                    <input type="checkbox" />
                    <span class="ms-sm-3 named"> Jane Cooper</span>
                  </div>
                  <div class="col-3 named">
                    <span> janecooper@gmail.com </span>
                  </div>
                  <div class="col-2">
                    <span>
                      <input type="date" style="width: 94%; border: none" />
                    </span>
                  </div>
                  <div class="col-2">
                    <div class="subcribe text-center py-1">Subscribed</div>
                  </div>
                  <div class="col-2">
                    <div class="amount">$500.00</div>
                  </div>
                </div>
                <hr />
                <div class="row py-2">
                  <div class="col-3">
                    <input type="checkbox" />
                    <span class="ms-sm-3 named"> Jane Cooper</span>
                  </div>
                  <div class="col-3 named">
                    <span> janecooper@gmail.com </span>
                  </div>
                  <div class="col-2">
                    <span>
                      <input type="date" style="width: 94%; border: none" />
                    </span>
                  </div>
                  <div class="col-2"></div>
                  <div class="col-2">
                    <div class="amount">$500.00</div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <!-- user Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="border: none">
                    <h5
                      class="modal-title ps-4 ms-2 mt-4 userd"
                      id="exampleModalLabel"
                     
                    >
                    <span  data-translate="add-user"></span>
                      <!-- Add User -->
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div
                    class="form-container"
                    style="margin-top: -2rem !important"
                  >
                    <form>
                      <div class="nav-div">
                        <div class="px-5 form-ar">
                          <label for="firstname" class="form-label" data-translate="first-name"
                            >First Name</label
                          >
                          <input
                            style="width: 100%"
                            type="text"
                            class="form-control"
                            id="firstname"
                            placeholder="First Name"
                          />
                        </div>
                      </div>
                      <div class="nav-div">
                        <div class="px-5 form-ar">
                          <label for="email" class="form-label" data-translate="email">Email</label>
                          <input
                            type="text"
                            class="form-control"
                            id="email"
                            placeholder="Your Email"
                          />
                        </div>
                      </div>
                      <div class="nav-div">
                        <div class="px-5 form-ar">
                          <label for="Date" class="form-label" data-translate="date"> Date</label>
                          <input
                            type="date"
                            class="form-control"
                            placeholder="DD/MM/YYYY"
                          />
                        </div>
                      </div>
                      <div class="nav-div">
                        <div class="px-5 form-ar">
                          <label for="price" class="form-label" data-translate="price">Price</label>
                          <input
                            type="text"
                            class="form-control"
                            id="price"
                            placeholder="$ 500"
                          />
                        </div>
                      </div>
                      <div class="px-5 mb-5">
                        <button type="submit" data-translate="add-user">Add User</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- courses  -->

            <div id="course" style="display: none">
              <!-- <div class="user mt-5 pb-5" id="course" style="display: none;"> -->
              <div class="user mt-5 pb-5" id="main-course">
                <div class="container">
                  <div class="row">
                    <div class="col mt-4 d-flex justify-content-start">
                      <p class="heading-text d-flex justify-content-center" data-translate="courses">
                        Courses
                      </p>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <button
                        class="px-2 mt-3 plus"
                        type="button"
                        onclick="addCourse()"
                        data-translate="+add-new-courses"
                      >
                        + Add New Courses
                      </button>
                    </div>
                  </div>
                  <div
                    class="row aa d-flex justify-content-between"
                    style="background-color: #c4bfff21; border-radius: 0.2rem"
                  >
                    <div class="col-md-5 py-2">
                      <input
                        type="text"
                        class="iconss py-2"
                        value
                       id="searchcourse"
                        placeholder="Search by course name"
                      />
                    </div>
                    <div class="col-md-6 py-2 d-flex justify-content-end">
                      <button
                        class="d-flex justify-content-between px-3 pt-2"
                        type="submit"
                      >
                        <img
                          class="pt-1"
                          src="./assets/images/button icon.png"
                          alt=""
                          style="margin-right: 1%"
                          
                        />
                        <span data-translate="filter"></span>
                        <!-- Filter -->
                      </button>
                    </div>
                  </div>
                  <hr />
                  <div class="row courses d-flex justify-content-between">
                    <div class="col-1"><span data-translate="id"> ID </span></div>
                    <div class="col-3"><span data-translate="title"> TITLE </span></div>
                    <div class="col-2"><span data-translate="Icon">ICON</span></div>
                    <div class="col-2"><span data-translate="Main-topic"> MAIN TOPIC </span></div>
                    <div class="col-1"><span data-translate="Price"> PRICE </span></div>
                    <div class="col-2"><span data-translate="status">STATUS</span></div>
                    <div class="col-1"><span data-translate="Action">Action</span></div>
                  </div>
                  <hr class="mt-4" />
                  <div class="row course mt-2">
                    <div class="col-1"><span> 1 </span></div>
                    <div class="col-3">
                      <span style="color: #2572cc" onclick="courseSection()">
                        Physics
                      </span>
                    </div>
                    <div class="col-2">
                      <img
                        src="..../../assets/images/8138748 1 (1).png"
                        alt=""
                      />
                    </div>
                    <div class="col-2"><span> 2 </span></div>
                    <div class="col-1"><span> $100 </span></div>
                    <div class="col-2">
                      <span style="color: #1cb104">Active</span>
                    </div>
                    <!-- <div class="col-1"><img src="..../../assets/images/dots.png" alt=""></div> -->
                    <div class="col-1 dots">
                      <div class="dropdown dropdown-quiz">
                        <img
                          class="dropdown-toggle"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          src="..../../assets/images/dots.png"
                          alt=""
                        />
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- add course  -->
              <div class="user mt-5 pb-5 d-none" id="add-course">
                <div class="container">
                  <div class="row">
                    <div class="col mt-4 d-flex justify-content-start">
                      <div class="row d-flex flex-column">
                        <div class="col">
                          <p class="heading-text" data-translate="courses">Courses</p>
                        </div>
                        <!-- <div class="col">
                          <p class="steps">
                            Dashboard / Courses / <span> Create Course</span>
                          </p>
                        </div> -->
                        <div class="col d-flex">
                          <p class="steps" data-translate="Dashboard-/-Courses-/">
                            Dashboard / Courses / 
                          </p>
                          <span  class="steps" data-translate="create-course" style="font-weight: bold;">
                           
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div
                    class="row aa d-flex justify-content-between"
                    style="background-color: #c4bfff21; border-radius: 0.2rem"
                  >
                    <div class="col-md-5 py-2">
                      <input
                        type="text"
                        class="iconss py-2"
                        value
                        placeholder="Search by course name"
                      />
                    </div>
                    <div class="col-md-6 py-2 d-flex justify-content-end">
                      <button
                        class="d-flex justify-content-between px-3 pt-2"
                        type="submit"
                      >
                        <img
                          class="pt-1"
                          src="./assets/images/button icon.png"
                          alt=""
                          style="margin-right: 1%"
                        />
                  
                        <span data-translate="filter"></span>
                      </button>
                    </div>
                  </div> -->
                  <hr />
                  <form>
                    <div class="row">
                      <div class="col star course">
                        <label for="title" class="form-label" data-translate="course-title"
                          >Course Title</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="firstname"
                        />
                      </div>
                      <div class="col star course">
                        <label for="price" class="form-label" data-translate="price"> Price</label>
                        <input type="text" class="form-control" />
                      </div>
                      <div class="col course">
                        <label for="state" class="form-label" data-translate="state"> State</label>
                        <select
                          class="form-select"
                          aria-label="Default select example"
                        >
                          <option selected>Active</option>
                          <option value="2">Draft</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col course">
                        <label for="description" class="form-label" data-translate="description">
                          Description</label
                        >
                        <textarea
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="5"
                        ></textarea>
                      </div>
                      <div class="col">
                        <div class="col star course">
                          <label for="icon" class="form-label" data-translate="icon">icon</label>
                          <div class="drag">
                            <div
                              class="drag-text d-flex justify-content-center mt-3"
                            >
                              <p data-translate="Drag-and-drop-your-file-here">Drag and drop your file here</p>
                            </div>
                            <div
                              class="drag-text-2 d-flex justify-content-center"
                            >
                              <p data-translate="or">or</p>
                            </div>
                            <div class="drag-btn d-flex justify-content-center">
                              <button id="fileButton" data-translate="browse-files">Browse files</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="btns">
                      <div class="row">
                        <div class="col d-flex justify-content-start gap-4">
                          <button class="can mt-3" onclick="backToCourses()" data-translate="cancel">
                            Cancel
                          </button>
                          <button class="add mt-3" data-translate="add">Add</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <!-- course section  -->
              <div
                class="user mt-5 pb-5"
                id="course-section"
                style="display: none"
              >
                <div class="container">
                  <div class="row">
                    <div class="col mt-4 d-flex justify-content-start">
                      <p class="heading-text d-flex justify-content-center" data-translate="course-section">
                        Course Section
                      </p>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <button
                        class="px-2 mt-3 plus"
                        data-toggle="modal"
                        data-target="#exampleModalCenter"
                        data-translate="+Add-New-Section"
                      >
                        + Add New Section
                      </button>
                    </div>
                  </div>
                  <!-- <div
                    class="row aa d-flex justify-content-between"
                    style="background-color: #c4bfff21; border-radius: 0.2rem"
                  >
                    <div class="col-md-5 py-2">
                      <input
                        type="text"
                        class="iconss py-2"
                        value
                        placeholder="Search by course name"
                      />
                    </div>
                    <div class="col-md-6 py-2 d-flex justify-content-end">
                      <button
                        class="d-flex justify-content-between px-3 pt-2"
                        type="submit"
                      >
                        <img
                          class="pt-1"
                          src="./assets/images/button icon.png"
                          alt=""
                          style="margin-right: 1%"
                        />
                      
                        <span data-translate="filter"></span>
                      </button>
                    </div>
                  </div> -->
                  <hr />
                  <div class="row courses d-flex justify-content-between">
                    <div class="col-2"><span data-translate="id"> ID </span></div>
                    <div class="col-2"><span data-translate="title"> TITLE </span></div>
                    <div class="col-2"><span data-translate="Lessions"> LESSIONS </span></div>
                    <div class="col-2"><span data-translate="status">STATUS</span></div>
                    <div class="col-2"><span data-translate="Action">Action</span></div>
                  </div>
                  <hr class="mt-4" />
                  <div class="row course d-flex justify-content-between mt-2">
                    <div class="col-2"><span> 1 </span></div>
                    <div class="col-2"><span> Section-1 </span></div>
                    <div class="col-2">
                      <span style="color: #2572cc" onclick="showLessonList()">
                        Lesson:0
                      </span>
                    </div>
                    <div class="col-2">
                      <span style="color: #1cb104">Active</span>
                    </div>
                    <!-- <div class="col-2 dots"><img src="..../../assets/images/dots.png" alt=""></div> -->
                    <div class="col-2 dots">
                      <div class="dropdown dropdown-quiz">
                        <img
                          class="dropdown-toggle"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          src="..../../assets/images/dots.png"
                          alt=""
                        />
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- corurse section modal  -->
              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModalCenter"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content p-5">
                    <div class="modal-header">
                      <h5
                        class="modal-title course-heading-text"
                        id="exampleModalLongTitle"
                        data-translate="add-section"
                      >
                        Add Section
                      </h5>
                      <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> -->
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row">
                          <div class="col star course">
                            <label for="title" class="form-label" data-translate="Title">Title</label>
                            <input
                              type="text"
                              class="form-control"
                            />
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col star course">
                            <label for="status" class="form-label" data-translate="Status"
                              >Status</label
                            >
                            <input
                              type="text"
                              class="form-control"
                            />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button class="add mt-3" style="width: 100%" data-translate="add-section">
                        Add Section
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- course lesson list  -->
              <div
                class="user mt-5 pb-5"
                id="course-lesson-list"
                style="display: none"
              >
                <div class="container">
                  <div class="row">
                    <div class="col mt-4 d-flex justify-content-start">
                      <p class="heading-text d-flex justify-content-center"  data-translate="course-lesson-list">
                        Course Lesson List
                      </p>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <button
                        class="px-2 mt-3 plus"
                        data-toggle="modal"
                        data-target="#exampleModalCentertwo"
                       data-translate="+-Add-New-Lesson"
                      >
                        + Add New Lesson
                      </button>
                    </div>
                  </div>
                  <!-- <div
                    class="row aa d-flex justify-content-between"
                    style="background-color: #c4bfff21; border-radius: 0.2rem"
                  >
                    <div class="col-md-5 py-2">
                      <input
                        type="text"
                        class="iconss py-2"
                        value
                        placeholder="Search by course name"
                      />
                    </div>
                    <div class="col-md-6 py-2 d-flex justify-content-end">
                      <button
                        class="d-flex justify-content-between px-3 pt-2"
                        type="submit"
                      >
                        <img
                          class="pt-1"
                          src="./assets/images/button icon.png"
                          alt=""
                          style="margin-right: 1%"
                        />
                    
                        <span data-translate="filter"></span>
                      </button>
                    </div>
                  </div> -->
                  <hr />
                  <div class="row courses d-flex justify-content-between">
                    <div class="col-2"><span data-translate="id"> ID </span></div>
                    <div class="col-2"><span data-translate="title"> TITLE </span></div>
                    <div class="col-2"><span data-translate="Content"> CONTENT </span></div>
                    <div class="col-2"><span data-translate="Quiz">QUIZ</span></div>
                    <div class="col-2"><span data-translate="status">STATUS</span></div>
                    <div class="col-2"><span data-translate="Action">ACTION</span></div>
                  </div>
                  <hr class="mt-4" />
                  <div class="row course d-flex justify-content-between mt-2">
                    <div class="col-2"><span> 1 </span></div>
                    <div class="col-2"><span> Lesson 1 </span></div>
                    <div class="col-2">
                      <span style="color: #2572cc"> Video Link </span>
                    </div>
                    <div class="col-2">
                      <span style="color: #2572cc">Quiz 0</span>
                    </div>
                    <div class="col-2">
                      <span style="color: #1cb104">Active</span>
                    </div>
                    <div class="col-2 dots">
                      <div class="dropdown dropdown-quiz">
                        <img
                          class="dropdown-toggle"
                          id="dropdownMenuButton"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          src="..../../assets/images/dots.png"
                          alt=""
                        />
                        <div
                          class="dropdown-menu"
                          aria-labelledby="dropdownMenuButton"
                        >
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                          <a
                            class="dropdown-item"
                            data-toggle="modal"
                            data-target="#exampleModalCenterthree"
                            href="#"
                            >Create Quiz</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- //course lesson modal  -->
              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModalCentertwo"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div
                      class="modal-header d-flex justify-content-between align-items-center"
                      style="background-color: #f9fafb"
                    >
                      <h5
                        class="modal-title mx-auto"
                        id="exampleModalLongTitle"
                        data-translate="add-lesson"
                      >
                        Add Lesson
                      </h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        style="margin-right: 2px"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body px-5">
                      <form>
                        <div class="row">
                          <div class="col star course">
                            <label for="title" class="form-label" data-translate="Title">Title</label>
                            <input
                              type="text"
                              class="form-control"
                              id="firstname"
                            />
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col star course">
                            <label for="status" class="form-label" data-translate="video-url"
                              >Video URL</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="firstname"
                            />
                          </div>
                        </div>
                        <div class="row mt-3"> 
                          <div class="col course form-ar">
                            <label for="status" class="form-label" data-translate="description"
                              >Description</label
                            >
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="4"
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col star course">
                            <label for="Thumbnail" class="form-label" data-translate="thumbnial"
                              >Thumbnail</label
                            >
                            <div class="drag">
                              <div
                                class="drag-text d-flex justify-content-center mt-3"
                              >
                                <p data-translate="Drag-and-drop-your-file-here">Drag and drop your file here</p>
                              </div>
                              <div
                                class="drag-text-2 d-flex justify-content-center"
                              >
                                <p data-translate="or">or</p>
                              </div>
                              <div
                                class="drag-btn d-flex justify-content-center"
                              >
                                <button id="fileButtontwo" data-translate="browse-files">Browse files</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="can" data-dismiss="modal" data-translate="cancel"> 
                        Cancel
                      </button>
                      <button type="button" class="add" data-translate="add">Add</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="./assets/js/admin-dashboard.js"></script>
    <script src="./assets/js/placeholder.js"></script>
    <script>
      function use() {
        document.getElementById("users").style.display = "block";
        document.getElementById("content").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("two").classList.add("menu-item-active");
        document.getElementById("one").classList.remove("menu-item-active");
        document.getElementById("three").classList.remove("menu-item-active");
      }
      function dash() {
        document.getElementById("users").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("content").style.display = "block";
        document.getElementById("two").classList.remove("menu-item-active");
        document.getElementById("one").classList.add("menu-item-active");
        document.getElementById("three").classList.remove("menu-item-active");
      }
      function course() {
        document.getElementById("users").style.display = "none";
        document.getElementById("course").style.display = "block";
        document.getElementById("content").style.display = "none";
        document.getElementById("two").classList.remove("menu-item-active");
        document.getElementById("one").classList.remove("menu-item-active");
        document.getElementById("three").classList.add("menu-item-active");
        document.getElementById("main-course").classList.remove("d-none");
        document.getElementById("add-course").classList.add("d-none");
        // document.getElementById("course-section").classList.add("d-none")
        document.getElementById("course-section").style.display = "none";
        document.getElementById("course-lesson-list").style.display = "none";
      }

      // click on add course button to open course add form
      function addCourse() {
        document.getElementById("add-course").classList.remove("d-none");
        document.getElementById("main-course").classList.add("d-none");
      }

      ///on add open course form and go back to main courses form to click on cancel
      function backToCourses() {
        document.getElementById("add-course").classList.add("d-none");
        document.getElementById("main-course").classList.remove("d-none");
      }

      ///show course section and hide main-course when click on subject name
      function courseSection() {
        document.getElementById("course-section").style.display = "block";
        document.getElementById("main-course").classList.add("d-none");
      }

      ///show lession list section and close course-section
      function showLessonList() {
        document.getElementById("course-section").style.display = "none";
        document.getElementById("course-lesson-list").style.display = "block";
      }

      ///funtion to chose a file from pc onclick to a specific button
      var fileButton = document.getElementById("fileButton");
      fileButton.addEventListener("click", function () {
        var fileInput = document.createElement("input");
        fileInput.type = "file";
        fileInput.click();
        fileInput.addEventListener("change", function (event) {
          var selectedFile = event.target.files[0];
          console.log(selectedFile);
        });
      });

      ///funtion to chose a file from pc onclick to a specific button
      var fileButton = document.getElementById("fileButtontwo");
      fileButton.addEventListener("click", function () {
        var fileInput = document.createElement("input");
        fileInput.type = "file";
        fileInput.click();
        fileInput.addEventListener("change", function (event) {
          var selectedFile = event.target.files[0];
          console.log(selectedFile);
        });
      });

      // funtion to check the correct answer
      document
        .getElementById("publish-btn")
        .addEventListener("click", function () {
          var option1 = document.getElementById("option1").value;
          var option2 = document.getElementById("option2").value;
          var option3 = document.getElementById("option3").value;
          var option4 = document.getElementById("option4").value;
          var correctOption = document.getElementById("correct-option");
          var correctOptionError = document.getElementById(
            "correct-option-error"
          );
          if (
            correctOption.value !== option1 &&
            correctOption.value !== option2 &&
            correctOption.value !== option3 &&
            correctOption.value !== option4
          ) {
            correctOptionError.textContent =
              "Answer doesn’t match any of the provided options";
            correctOptionError.style.display = "block";
            correctOption.style.borderColor = "red";
            return;
          }
          correctOptionError.textContent = ""; // Clear the error message
          correctOptionError.style.display = "none"; // Hide the error message
          correctOption.style.borderColor = ""; // Reset the border color
        });

      //  function check the quiz options and then procssed to the new quiz question

      document
        .getElementById("add-more-questions-btn")
        .addEventListener("click", function () {
          var option1 = document.getElementById("option1").value;
          var option2 = document.getElementById("option2").value;
          var option3 = document.getElementById("option3").value;
          var option4 = document.getElementById("option4").value;
          var correctOption = document.getElementById("correct-option");
          var correctOptionError = document.getElementById(
            "correct-option-error"
          );

          if (
            correctOption.value !== option1 &&
            correctOption.value !== option2 &&
            correctOption.value !== option3 &&
            correctOption.value !== option4
          ) {
            correctOptionError.textContent =
              "Answer doesn’t match any of the provided options";
            correctOptionError.style.display = "block";
            correctOption.style.borderColor = "red";
            return;
          }

          correctOptionError.textContent = ""; // Clear the error message
          correctOptionError.style.display = "none"; // Hide the error message
          correctOption.style.borderColor = ""; // Reset the border color

          // Execute the second function only if the validation passes
          executeSecondFunction();
        });

      function executeSecondFunction() {
        // Reset the form fields
        $("#exampleModalCenterthree form")[0].reset();

        // Close the current modal
        $("#exampleModalCenterthree").modal("hide");

        // Event listener for when the modal is fully closed
        $("#exampleModalCenterthree").on("hidden.bs.modal", function () {
          // Open the modal again
          $("#exampleModalCenterthree").modal("show");
        });
      }
    </script>
  </body>
</html>
