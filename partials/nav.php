  <div
      class="bg-secondary text-white d-flex justify-content-center align-content-center">
      <div class="container">
          <div
              id="carouselContent"
              class="carousel slide"
              data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active text-center p-2">
                      <small class="text-white">
                          DELIVERY UPDATE - Kindly expect delivery times of 4-5 working
                          days
                      </small>
                  </div>
                  <div class="carousel-item text-center p-2">
                      <small>
                          <span class="text-capitalize">Non-exchangeable</span> - items
                          purchased on discount are not exchangeable
                      </small>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container-fluid m-0 p-0 full-body d-flex flex-column">
      <div class="container-fluid p-0 navigation">
          <nav
              class="navbar navbar-expand-lg bg-body-light shadow p-0 sticky-top navbar-inverse">
              <div class="container-fluid p-0 d-flex">
                  <div class="col-3 row">
                      <div>
                          <button
                              class="navbar-toggler"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#navbarSupportedContent"
                              aria-controls="navbarSupportedContent"
                              aria-expanded="false"
                              aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div
                              class="collapse navbar-collapse"
                              id="navbarSupportedContent">
                              <ul class="navbar-nav">
                                  <li
                                      class="nav-item d-flex justify-content-center align-items-center position-relative">
                                      <div
                                          onclick="searchToggle()"
                                          class="h-100 d-flex justify-content-center search-btn">
                                          <button
                                              class="btn bg-white"
                                              data-toggle="tooltip"
                                              data-placement="top"
                                              title="Search"
                                              style="width: 50px">
                                              <i class="bi bi-search"></i>
                                          </button>
                                      </div>
                                      <input
                                          type="search"
                                          class="p-2 text-black search-bar bg-light"
                                          id="search-bar"
                                          placeholder="Search..." />
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 d-flex align-items-center">
                      <ul
                          class="navbar-nav me-auto mb-2 mb-lg-0 h6 justify-content-end flex-grow-1">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                              <div class="dropdown">
                                  <button
                                      class="btn btn-black dropdown-toggle"
                                      type="button"
                                      id="dropdownMenuButton2"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false">
                                      Category
                                  </button>
                                  <ul
                                      class="dropdown-menu bg-transparent"
                                      aria-labelledby="dropdownMenuButton2">
                                      <li>
                                          <a class="dropdown-item" href="#">Men</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Women</a>
                                      </li>
                                      <li>
                                          <hr class="dropdown-divider" />
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                      <div class=" ">
                          <a class="navbar-brand w-100" href="#">
                              <span class="display-5 z-text"> &nbsp;Z</span><span class="ulo-text h3">ulo</span>
                          </a>
                      </div>
                      <ul
                          class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-start h6 flex-grow-1">
                          <li class="nav-item">
                              <a class="nav-link" href="#">Gift</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Sale</a>
                          </li>
                      </ul>
                  </div>
                  <div
                      class="col-3 d-flex justify-content-end align-items-center pe-4">
                      <div class="d-flex justify-content-end gap-2 ms-2 control-center">
                          <div onclick="activeDarkMode()">
                              <button class="btn btn-outline-dark" id="switch-mode">
                                  <i class="bi bi-brightness-high-fill"></i>
                                  <i class="bi bi-moon-stars d-none"></i>
                              </button>
                          </div>
                          <div>
                              <a href="">
                                  <button
                                      class="btn btn-outline-dark cart-btn"
                                      data-toggle="tooltip"
                                      data-placement="top"
                                      title="cart">
                                      <i class="bi bi-bag-fill"></i>
                                      <span class="cart-items">14</span>
                                  </button>
                              </a>
                          </div>
                          <div>
                              <button
                                  class="btn btn-outline-dark"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="profile"
                                  onclick="showLogin()">
                                  <i class="bi bi-person-circle"></i>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </nav>
      </div>
      <div class="container-fluid new-fashion p-0 m-0 flex-grow-1">
          <div class="d-flex flex-wrap">
              <div class="col-6 bg-danger div-one">
                  <h1 class="display-1 text-white">
                      <span>Z</span><span>U</span><span>L</span><span>O</span>
                      <span>F</span>
                  </h1>
                  <div class="buy-btn">
                      <button type="button" class="btn btn-outline-warning text-white">
                          Shop Now
                      </button>
                  </div>
              </div>

              <div class="col-6 bg-warning div-two">
                  <h1 class="display-1 text-white">
                      <span>A</span><span>S</span><span>H</span><span>I</span><span>O</span><span>N</span>
                  </h1>
                  <div class="buy-btn">
                      <button type="button" class="btn btn-outline-danger text-dark">
                          Shop Now
                      </button>
                  </div>
              </div>
              <img
                  src="./assets/img/low-quality/girl.png"
                  data-sizes="auto"
                  data-src="./assets/img/girl.png"
                  class="lazyload blur-up girl-png"
                  alt="Example Image 3" />
          </div>

          <!-- login section  -->
          <div class="container bg-white login" id="login">
              <!-- SIGN IN SECTION  -->
              <div class="container-fluid d-block py-5 px-3" id="sign-in">
                  <h4>My Account</h4>
                  <form>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <br />
                          <input
                              type="email"
                              class="form-control border border-1 border-dark"
                              id="exampleInputEmail1"
                              aria-describedby="emailHelp" />
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input
                              type="password"
                              class="form-control border border-1 border-dark"
                              id="exampleInputPassword1" />
                      </div>
                      <small class="d-block mb-2 text-danger"><a href="">forgot your password ?</a></small>
                      <button
                          type="submit"
                          class="btn btn-outline-dark display-block w-100">
                          Login
                      </button>
                  </form>
                  <div class="mt-5">
                      <hr class="" />
                      <h4 class="mt-3">SIGN UP</h4>
                      <button
                          class="btn btn-outline-dark display-block w-100 mt-3"
                          onclick="showSignup()">
                          SIGN UP NOW
                      </button>
                  </div>
              </div>

              <!-- SIGN UP SECTION  -->
              <div class="container-fluid d-block d-none py-5 px-3" id="sign-up">
                  <h4>SIGN UP</h4>
                  <form>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">FIRST NAME *</label>
                          <input
                              type="email"
                              class="form-control border border-1 border-dark"
                              aria-describedby="emailHelp" />
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">LAST NAME *</label>
                          <input
                              type="password"
                              class="form-control border border-1 border-dark" />
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">EMAIL *</label>
                          <input
                              type="password"
                              class="form-control border border-1 border-dark" />
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">PASSWORD *</label>
                          <input
                              type="password"
                              class="form-control border border-1 border-dark" />
                      </div>

                      <button class="btn btn-outline-dark display-block w-100">
                          SIGN UP NOW!
                      </button>
                  </form>
                  <div class="mt-5">
                      <hr class="" />
                      <button
                          class="btn btn-outline-dark display-block w-100 mt-3"
                          onclick="showLogin()">
                          RETURN TO STORE
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>