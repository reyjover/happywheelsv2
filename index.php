<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Happy Wheels | Car Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Happy <em>Wheels</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php?loadnav=home">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item"><a class="nav-link">Management</a>
                <ul>
                <li> <a class="nav-link" href="index.php?loadnav=carlist"> View Car List </a> </li>
                  <li> <a class="nav-link" href="index.php?loadnav=cars"> Car Profiles </a> </li>
                  <li> <a class="nav-link" href="index.php?loadnav=customers"> Customer Profiles </a> </li>
                </ul> 
              </li>
                            <li class="nav-item"><a class="nav-link">Reservations</a>
                              <ul>
                            <li> <a class="nav-link" href="index.php?loadnav=reserve"> Make a Reservation</a> </li>
                            <li> <a class="nav-link" href="index.php?loadnav=records"> Reservation Records</a> </li>
                              </ul> 
                            </li>

              <li class="nav-item"> <a class="nav-link">Incidents</a>
              <ul>
                  <li> <a class="nav-link" href="index.php?loadnav=incidents"> Record Incident</a> </li>
                  <li> <a class="nav-link" href="index.php?loadnav=incidentrecords"> Incident Records</a> </li>
              </ul> 
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="main_body">
      <?php 
      switch($loadnav){
        case 'cars':
          require_once 'car.php';
          break;
        case 'carlist':
          require_once 'carlist.php';
          break;
        case 'customers':
          require_once 'customers.php';
          break;
        case 'addcustomer_confirm':
          require_once 'addcustomer_confirm.php';
        break;
        case 'reserve':
          require_once 'reserve.php';
          break;
          case 'records':
            require_once 'reservation_records.php';
            break;
          case 'reserve_confirm':
          require_once 'reservation_confirm.php';
          break;
         case 'manage_reserve':
          require_once 'manage_reserve.php';
         break;
         case 'manageres_confirm':
          require_once 'manageres_confirm.php';
         break;
        case 'incidents':
          require_once 'incidents.php';
          break;
          case 'addincidents':
            require_once 'addincidents.php';
            break;
        case 'incidentrecords':
          require_once 'incidentrecords.php';
          break;
        case 'editincident':
        require_once 'editincident.php';
        break;
        case 'deleteincident':
          require_once 'deleteincident.php';
          break;
		  case 'searchcar':
          require_once 'car.php';
          break;
      case 'searchcarlist':
            require_once 'carlist.php';
            break;
		  case 'addcar':
          require_once 'addcar.php';
          break;
          case 'addcar_confirm':
            require_once 'addcar_confirm.php';
          break;
    case 'addcarlist':
            require_once 'addcarlist.php';
            break;
          case 'addcarlistconfirm':
          require_once 'addcarlistconfirm.php';
          break;
		  case 'editcar':
          require_once 'editcar.php';
          break;
      case 'editcar_confirm':
        require_once 'editcar_confirm';
      break;
		  case 'deletecar':
          require_once 'deletecar.php';
          break;
      case 'deletecar_confirm':
        require_once 'deletecar_confirm.php';
      break;
		  case 'addcustomer':
          require_once 'addcustomer.php';
           break;
		  case 'editcustomer':
          require_once 'editcustomer.php';
          break;
      case 'editcustomer_confirm':
        require_once 'editcustomer_confirm.php';
      break;
		  case 'deletecustomer':
          require_once 'deletecustomer.php';
          break;
      case 'deletecustomer_confirm':
        require_once 'deletecustomer_confirm';
      break;

    default:
        require_once 'index.php';
      }
      ?>
  </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Happy Wheels Co., Ltd. </a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
