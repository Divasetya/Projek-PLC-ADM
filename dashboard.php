<?php
  include "ambilNilai.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="src/css/styles.min.css" />
    <link rel="stylesheet" href="src/css/dashboard.css" />
    <link rel="stylesheet" href="Header/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- iconify -->
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    
  </head>
  <body style="height: 60rem; background-color: #dedede">
    
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar" style="background: linear-gradient(to bottom, #102742 0%, #0f67cf 100%)">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img poppins-semibold">
              <img style="margin-left: 2.5rem" src="src/image/icon Pabrik.png" alt="" width="140rem" />
              <p style="color: white; margin-left: 1.5rem; font-size: 0.9rem">PT Astra Daihatsu Motor Tbk</p>
              <p style="color: white; margin-left: 2.8rem; line-height: 0.1rem; font-size: 0.8rem">Casting Plant Karawang</p>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav" style="height: 45rem">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                <span class="hide-menu poppins-semibold" style="font-size: 13px; color: white">General</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="material-symbols:home" style="color: white; font-size: 23px; margin-left: 0.9rem; margin-right: 0.2rem; margin-top: -0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Dashboard</span>
                  <span style="margin-left: 3.6rem"><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="uil:channel" style="color: white; font-size: 23px; margin-left: 0.9rem; margin-right: 0.2rem; margin-top: -0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Low Pressure</span>
                  <span style="margin-left: 3.5rem"><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="et:piechart" style="color: white; font-size: 23px; margin-left: 0.9rem; margin-right: 0.2rem; margin-top: -0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">High Pressure</span>
                  <span style="margin-left: 3.5rem"><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
              </li>

              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                <span class="hide-menu poppins-semibold" style="font-size: 13px; color: white">Product Engineering</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="hugeicons:product-loading" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Product</span>
                  <span style="margin-left: 4.9rem"><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="fluent:breakout-room-24-regular" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Project Preparation</span>
                  <span><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="clarity:design-line" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">3D / Design</span>
                  <span style="margin-left: 3.3rem"><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="basil:document-outline" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Administration</span>
                  <span style="margin-left: 1.9rem"><img src="src/icon/weui--arrow-outlined.png" alt="" width="10px" height="25px" style="filter: invert(100%)" /></span>
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                <span class="hide-menu poppins-semibold" style="font-size: 14px; color: white">Support</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="bitcoin-icons:question-outline" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Help</span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="uil:setting" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Setting</span>
                </a>
                <a class="sidebar-link" href="./index.html" aria-expanded="false" style="padding-left: 0; background-color: #00336d; box-shadow: 0px 3px 3px 1px black inset; margin-bottom: 7px">
                  <iconify-icon icon="bx:log-out" style="color: white; font-size: 22px; margin-left: 0.9rem; margin-right: 0.2rem"></iconify-icon>
                  <span class="hide-menu poppins-regular" style="font-size: 14px; color: white">Log out</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <!-- navbar -->
      <div class="body-wrapper">
        <div class="header fixed-top" style="margin-left: 17rem">
          <div class="welcome-message">
            Welcome Back, <span>Edward</span>
            <p>Here are your daily updates.</p>
          </div>
          <div class="search-bar">
            <span class="material-icons icon"> <iconify-icon icon="icon-park-outline:search"></iconify-icon></span>
            <input type="text" placeholder="Search" />
          </div>
          <div class="notification">
            <button type="button" class="notifButton">
              <span><i class="bi bi-bell" style="color: white"></i></span>
            </button>
          </div>
          <div class="profile" style="margin-left: 8rem">
            <div class="row">
              <div class="col-3">
                <button style="background-color: white; border: none"><i class="bi bi-person-circle"></i></button>
              </div>
              <div class="col-9" style="font-size: 12px; padding-top: 0.8rem; padding-left: 1.5rem">
                <span>Edward Lore</span> <br />
                <span>Admin</span>
              </div>
            </div>
          </div>
          <div>
            <img style="height: 2.5rem; width: auto; margin-left: 3rem" src="src/image/logo ADM.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- konten -->
    <div class="d-flex justify-content-end" style="margin-top: 4.9rem; margin-left: 17rem; padding: 1rem 1rem">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #0555b3; color: white; border-radius: 4px">11 - 17 Sept 2024</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>

    <div style="margin-left: 17rem; padding: 0rem 1rem">
      <p class="poppins-semibold" style="color: black; font-weight: 600; font-size: 18px">Low Pressure 15 Sept 2024</p>
    </div>

    <div class="card" style="margin-left: 18rem; width: 75.8rem; background-color: #00336d">
      <div class="card-body">
        <h5 class="card-title poppins-semibold" style="color: white">Production Report</h5>
        <hr style="background-color: white; opacity: 100%; height: 1.5px" />
        <div class="row">
          <div class="col-4">
            <div class="card" style="background-color: transparent; border-style: solid; border-color: white; border-width: 2px">
              <div class="card-body" style="margin-top: -1rem; margin-left: -1.1rem; margin-bottom: -1.3rem">
                <div class="card" style="margin-bottom: 1rem; border-radius: 10px; background: linear-gradient(to right, #22028c 0%, #3c0bff 100%); height: 2rem">
                  <div class="card-body poppins-bold" style="color: white; padding-top: 5px; padding-left: 10px; text-align: center">Shibaura Machine DC 800T No.3</div>
                </div>
                <?php
                  $daftarSensor = ambilNewSensor();
                  // Check if $daftarSensor has values
                    if (!empty($daftarSensor)) {
                        $latestSensor = $daftarSensor[0]; // Assuming you want the first entry in the array
                    } else {
                        $latestSensor = null; // No data found, handle the error here
                    }
                ?>
                <table id="myTable" class="display">
                    <tbody>
                        <tr style="color: white">
                            <td>Upper Water Cooling Flow (ds/min)</td>
                            <td>
                            <?php
                                if ($latestSensor) {
                                    echo $latestSensor['time']; // Display the sensor value
                                } else {
                                    echo "No data available"; // Fallback if no sensor data
                                }
                            ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                
                <!-- <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Water Cooling Flow (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"><?php echo ['nilai_sensor']?></span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Die Int (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Re & Fr (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Air Cooling Flow (ltr/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Die In (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Die Re & Fr (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Cooling Temp (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Molten Temp (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Cycle Time (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Rear Water Cooling Flow (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Flow Delay Cooling S/P (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Gate & Yuguchi (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="background-color: transparent; border-style: solid; border-color: white; border-width: 2px">
              <div class="card-body" style="margin-top: -1rem; margin-left: -1.1rem; margin-bottom: -1.3rem">
                <div class="card" style="margin-bottom: 1rem; border-radius: 10px; background: linear-gradient(to right, #22028c 0%, #3c0bff 100%); height: 2rem">
                  <div class="card-body poppins-bold" style="color: white; padding-top: 5px; padding-left: 10px; text-align: center">Shibaura Machine DC 800T No.3</div>
                </div>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Water Cooling Flow (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Die Int (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Re & Fr (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Air Cooling Flow (ltr/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Die In (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Die Re & Fr (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Cooling Temp (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Molten Temp (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Cycle Time (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Rear Water Cooling Flow (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Flow Delay Cooling S/P (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Gate & Yuguchi (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="background-color: transparent; border-style: solid; border-color: white; border-width: 2px">
              <div class="card-body" style="margin-top: -1rem; margin-left: -1.1rem; margin-bottom: -1.3rem">
                <div class="card" style="margin-bottom: 1rem; border-radius: 10px; background: linear-gradient(to right, #22028c 0%, #3c0bff 100%); height: 2rem">
                  <div class="card-body poppins-bold" style="color: white; padding-top: 5px; padding-left: 10px; text-align: center">Shibaura Machine DC 800T No.3</div>
                </div>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Water Cooling Flow (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Die Int (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Upper Re & Fr (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Air Cooling Flow (ltr/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Die In (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Die Re & Fr (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Cooling Temp (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Molten Temp (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Cycle Time (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Lower Rear Water Cooling Flow (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Flow Delay Cooling S/P (ds/min)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset"
                    >4451.45</span
                  >
                </p>
                <p class="poppins-regular" style="margin-bottom: 0.2rem; font-size: 11px; color: white; display: flex; justify-content: space-between">
                  Gate & Yuguchi (°C)<span class="badge rounded-pill d-flex align-items-center" style="padding: 0rem 1rem; background-color: white; color: black; box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.249) inset">4451.45</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p class="poppins-bold" style="color: white">Product: <span class="poppins-regular">Case</span></p>
          </div>
          <div class="col-6">
            <p class="poppins-bold" style="color: white">Batch No.: <span class="poppins-regular">DCSEP23011 - DCSEP23017</span></p>
          </div>
          <div>
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #0555b3; color: white; border-radius: 4px; width: 11rem">11 - 17 Sept 2024</button>
            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: transparent; color: white; border-radius: 4px; border-color: #0555b3; width: 11rem">
              <i class="bi bi-file-pdf me-2"></i>Export Report
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="row" style="margin-top: 5rem;">
    <div class="col-2"></div>
    <div class="col-10 d-flex justify-content-end" style="margin-left: 16rem;">
      <div class="dropdown">
        <button class="btn dropdown-toggle poppins-semibold py-2 me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #254b76; color: white; border-radius: 4px;">
          <i class="bi bi-calendar3 me-2"></i>
          Sept 2024
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Agust 2024</a></li>
          <li><a class="dropdown-item" href="#">Juli 2024</a></li>
          <li><a class="dropdown-item" href="#">Juni 2024</a></li>
        </ul>
      </div>
      <button class="py-2 px-3" style="background-color: #254b76; color: white; border-radius: 4px; border: none; font-weight: 600; "> <i class="bi bi-file-pdf me-2"></i>Export Report</button>
    </div>
  </div> -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>