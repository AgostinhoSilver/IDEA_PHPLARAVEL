<!DOCTYPE html>
<html>

<head>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }


    .er-background {
      background: #5e93d4;
      background: -webkit-linear-gradient(82deg, #5e93d4 0%, #046cbc 100%);
      background: linear-gradient(82deg, #5e93d4 0%, #046cbc 100%);
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>
</head>

<body>
  <header class="finisher-header" style="height: 500px;">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">

        </a>

      </div>




    </nav>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4   text-white">Beneficiary Management Laravel Test</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 text-white">Proudly Developed by Agostinho Silva</p>

      </div>

    </div>
  </header>

  <div class="row" style="margin-top:140px;">
    <div class="col-6 shadow-sm ">
      <div class="card h-100 ">
        <img src="https://uzediwa-technology.com/undraw_hiring_8szx.svg" style="width:120px; height: 120px;"
          class="card-img-top  mx-auto d-block" alt="...">
        <div class="card-body">
          <h5 class="card-title">Update Beneficiary</h5>
          <form method="POST" action="/addBeneficiary">
            @csrf

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Beneficiary email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="mb-3">
              <label class="form-label">Status</label>
              <select class="form-control" name="status">
                <option value="active">active</option>
                <option value="approved">approved</option>
                <option value="rejected">rejected</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Registration Date</label>
              <input type="date" name="registrationDate" class="form-control">
            </div>
            <button type="submit">Update</button>
          </form>
        </div>

      </div>
    </div>
    <div class="col-6 shadow-sm ">
      <div class="card h-100">
        <img src="https://uzediwa-technology.com/undraw_team-page_q5am.svg" style="width:120px; height: 120px;"
          class="card-img-top  mx-auto d-block" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Cached Method Resquest Time: <strong id="cachedTime">0</strong><i>seconds</i></h5><br>

          <button class="btn btn-success" onclick="getCachedRequest()">Get</button><br><br>

          <h5 class="card-title">Non-Cached Resquest Time: <strong id="nonCachedTime">0</strong><i>seconds</i></h5><br>

          <button class="btn btn-success" onclick="getNonCachedRequest()">Get</button>
        </div>

      </div>
    </div>





  </div>



  <script src="https://uzediwa-technology.com/uzediwa.js"></script>

  <script>

    function getCachedRequest() {
      var cachedTime = document.getElementById('cachedTime');
      var inialTime = new Date().getSeconds();

      axios.get('/getBeneficiaries')
        .then(function (response) {

          var finalTimeStamp = new Date().getSeconds();

          cachedTime.innerText = (finalTimeStamp - inialTime);

        });
    }


    function getNonCachedRequest() {
      var nonCachedTime = document.getElementById('nonCachedTime');
      var inialTime = new Date().getSeconds();
      axios.get('/getFreshBeneficiaries')
        .then(function (response) {
          var finalTimeStamp = new Date().getSeconds();

          nonCachedTime.innerText = (finalTimeStamp - inialTime);

        });
    }

  </script>

  <script type="text/javascript">
    new FinisherHeader({
      "count": 10,
      "size": {
        "min": 1300,
        "max": 1500,
        "pulse": 0
      },
      "speed": {
        "x": {
          "min": 0.1,
          "max": 0.6
        },
        "y": {
          "min": 0.1,
          "max": 0.6
        }
      },
      "colors": {
        "background": "#9138e5",
        "particles": [
          "#ff4848",
          "#000000",
          "#2235e5",
          "#000000",
          "#ff0000"
        ]
      },
      "blending": "overlay",
      "opacity": {
        "center": 0.5,
        "edge": 0.05
      },
      "skew": 0,
      "shapes": [
        "c"
      ]
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>
<footer></footer>

</html>