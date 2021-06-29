<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">Good morning, <?php {{ echo $_SESSION['username_admin']; }}?></h1>
            <p class="page-header-text">Here's what's happening with your store today.</p>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <!-- Card -->
      <div class="card card-body mb-3 mb-lg-5">
        <div class="row gx-lg-4">
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="media-body">
                <h6 class="card-subtitle">In-store Sales</h6>
                <span class="card-title h3">$7,820.75</span>

                <div class="d-flex align-items-center">
                  <span class="d-block font-size-sm">5k orders</span>
                  <span class="badge badge-soft-success ml-2">
                    <i class="tio-trending-up"></i> 4.3%
                  </span>
                </div>
              </div>

              <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                <i class="tio-shop"></i>
              </span>
            </div>

            <div class="d-lg-none">
              <hr>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3 column-divider-sm">
            <div class="media">
              <div class="media-body">
                <h6 class="card-subtitle">Website Sales</h6>
                <span class="card-title h3">$985,937.45</span>

                <div class="d-flex align-items-center">
                  <span class="d-block font-size-sm">21k orders</span>
                  <span class="badge badge-soft-success ml-2">
                    <i class="tio-trending-up"></i> 12.5%
                  </span>
                </div>
              </div>

              <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                <i class="tio-website"></i>
              </span>
            </div>

            <div class="d-lg-none">
              <hr>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3 column-divider-lg">
            <div class="media">
              <div class="media-body">
                <h6 class="card-subtitle">Discount</h6>
                <span class="card-title h3">$15,503.00</span>

                <div class="d-flex align-items-center">
                  <span class="d-block font-size-sm">6k orders</span>
                </div>
              </div>

              <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                <i class="tio-label-off"></i>
              </span>
            </div>

            <div class="d-sm-none">
              <hr>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3 column-divider-sm">
            <div class="media">
              <div class="media-body">
                <h6 class="card-subtitle">Affiliate</h6>
                <span class="card-title h3">$3,982.53</span>

                <div class="d-flex align-items-center">
                  <span class="d-block font-size-sm">150 orders</span>
                  <span class="badge badge-soft-danger ml-2">
                    <i class="tio-trending-down"></i> 4.4%
                  </span>
                </div>
              </div>

              <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                <i class="tio-users-switch"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header">
          <div class="row align-items-center flex-grow-1">
            <div class="col-sm mb-2 mb-sm-0">
              <h4 class="card-header-title">Bán hàng <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip"
                  data-placement="top"
                  title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
              </h4>
            </div>

            <div class="col-sm-auto">
              <!-- Select -->
              <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                          "minimumResultsForSearch": "Infinity",
                          "customClass": "custom-select custom-select-sm mb-2 mb-sm-0 mr-2",
                          "dropdownAutoWidth": true,
                          "width": true
                        }'>
                <option value="">Online store</option>
                <option value="in-store">In-store</option>
              </select>
              <!-- End Select -->

              <!-- Daterangepicker -->
              <button id="js-daterangepicker-predefined" class="btn btn-sm btn-white dropdown-toggle mb-2 mb-sm-0">
                <i class="tio-date-range"></i>
                <span class="js-daterangepicker-predefined-preview ml-1"></span>
              </button>
              <!-- End Daterangepicker -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-9 mb-5 mb-md-0">
              <!-- Bar Chart -->
              <div class="chartjs-custom mb-4">
                <canvas class="js-chart" style="height: 18rem;" data-hs-chartjs-options='{
                            "type": "bar",
                            "data": {
                              "labels": [
                                <?php
                                 $listday = ""; 
                                 foreach($statistics as $statistic) {
                                   $listday .= '"'.$statistic['day'].'",';
                                 }
                                 $listday = rtrim($listday, ",");
                                 {{ echo $listday; }}
                                 ?>
                              ],
                              "datasets": [{
                                "data": [
                                <?php
                                  $total = "";
                                  foreach($statistics as $statistic) {
                                   $total .= intval(substr($statistic['totalBill'], 0, -8)).",";
                                  }
                                  $total = rtrim($total, ",");
                                  {{ echo $total; }}
                                ?>
                                ],
                                "backgroundColor": "#377dff",
                                "hoverBackgroundColor": "#377dff",
                                "borderColor": "#377dff"
                              }]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 100,
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 10
                                  }
                                }],
                                "xAxes": [{
                                  "gridLines": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 5
                                  },
                                  "categoryPercentage": 0.5,
                                  "maxBarThickness": "40"
                                }]
                              },
                              "cornerRadius": 2,
                              "tooltips": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'></canvas>
              </div>
              <!-- End Bar Chart -->

              <!-- Legend Indicators -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator"></span> Doanh thu
                </div>
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Đặt hàng
                </div>
              </div>
              <!-- End Legend Indicators -->
            </div>

            <div class="col-md-3 column-divider-md">
              <div class="row">
                <div class="col-sm-6 col-md-12">
                  <!-- Stats -->
                  <div class="d-flex justify-content-center flex-column" style="min-height: 10.5rem;">
                    <h6 class="card-subtitle">Doanh thu</h6>
                    <span class="d-block display-4 text-dark mb-1 mr-3">$97,458.20</span>
                    <span class="d-block text-success">
                      <i class="tio-trending-up mr-1"></i> $2,401.02 (3.7%)
                    </span>
                  </div>
                  <!-- End Stats -->

                  <div class="d-sm-none">
                    <hr class="my-0">
                  </div>

                  <div class="d-none d-md-block">
                    <hr class="my-0">
                  </div>
                </div>

                <div class="col-sm-6 col-md-12">
                  <!-- Stats -->
                  <!-- <div class="d-flex justify-content-center flex-column" style="min-height: 10.5rem;">
                    <h6 class="card-subtitle">Đặt hàng</h6>
                    <span class="d-block display-4 text-dark mb-1 mr-3">67,893</span>
                    <span class="d-block text-danger">
                      <i class="tio-trending-down mr-1"></i> +3,301 (1.2%)
                    </span>
                  </div> -->
                  <!-- End Stats -->
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->
      </div>
      <!-- End Card -->

      <div class="row">
        <div class="col-lg-4 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow mb-4" href="<?= BASE_URL?>/product/add_product">
            <div class="card-body">
              <div class="media align-items-center">
                <img class="avatar avatar-xl mr-4" src="<?= BASE_URL?>\public\template\svg\illustrations\create.svg" alt="Image Description">

                <div class="media-body">
                  <h3 class="text-hover-primary mb-1">Product</h3>
                  <span class="text-body">Create a new product</span>
                </div>

                <div class="ml-2 text-right">
                  <i class="tio-chevron-right tio-lg text-body text-hover-primary"></i>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="card card-hover-shadow mb-4" href="#">
            <div class="card-body">
              <div class="media align-items-center">
                <img class="avatar avatar-xl mr-4" src="<?= BASE_URL?>\public\template\svg\illustrations\choice.svg" alt="Image Description">

                <div class="media-body">
                  <h3 class="text-hover-primary mb-1">Collection</h3>
                  <span class="text-body">Create a new collection</span>
                </div>

                <div class="ml-2 text-right">
                  <i class="tio-chevron-right tio-lg text-body text-hover-primary"></i>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="card card-hover-shadow" href="#">
            <div class="card-body">
              <div class="media align-items-center">
                <img class="avatar avatar-xl mr-4" src="<?= BASE_URL?>\public\template\svg\illustrations\presenting.svg"
                  alt="Image Description">

                <div class="media-body">
                  <h3 class="text-hover-primary mb-1">Discount</h3>
                  <span class="text-body">Create a new discount</span>
                </div>

                <div class="ml-2 text-right">
                  <i class="tio-chevron-right tio-lg text-body text-hover-primary"></i>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-lg-8 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Top products</h4>

              <a class="btn btn-sm btn-ghost-secondary" href="#">View all</a>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body-height">
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Item</th>
                      <th scope="col">Change</th>
                      <th scope="col">Price</th>
                      <th scope="col">Sold</th>
                      <th scope="col">Sales</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>
                        <!-- Media -->
                        <a class="media align-items-center" href="./ecommerce-product-description.html">
                          <img class="avatar mr-3" src="<?= BASE_URL?>\public\template\img\400x400\img4.jpg" alt="Image Description">

                          <div class="media-body">
                            <h5 class="text-hover-primary mb-0">Photive wireless speakers</h5>
                          </div>
                        </a>
                        <!-- End Media -->
                      </td>
                      <td><i class="tio-trending-down text-danger mr-1"></i> 72%</td>
                      <td>$65</td>
                      <td>7,545</td>
                      <td>
                        <h4 class="mb-0">$15,302.00</h4>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <!-- Media -->
                        <a class="media align-items-center" href="./ecommerce-product-description.html">
                          <img class="avatar mr-3" src="<?= BASE_URL?>\public\template\img\400x400\img26.jpg" alt="Image Description">

                          <div class="media-body">
                            <h5 class="text-hover-primary mb-0">Topman shoe in green</h5>
                          </div>
                        </a>
                        <!-- End Media -->
                      </td>
                      <td><i class="tio-trending-up text-success mr-1"></i> 69%</td>
                      <td>$21</td>
                      <td>6,643</td>
                      <td>
                        <h4 class="mb-0">$12,492.21</h4>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <!-- Media -->
                        <a class="media align-items-center" href="./ecommerce-product-description.html">
                          <img class="avatar mr-3" src="<?= BASE_URL?>\public\template\img\400x400\img25.jpg" alt="Image Description">

                          <div class="media-body">
                            <h5 class="text-hover-primary mb-0">RayBan black sunglasses</h5>
                          </div>
                        </a>
                        <!-- End Media -->
                      </td>
                      <td><i class="tio-trending-down text-danger mr-1"></i> 65%</td>
                      <td>$37</td>
                      <td>5,951</td>
                      <td>
                        <h4 class="mb-0">$10,351.71</h4>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <!-- Media -->
                        <a class="media align-items-center" href="./ecommerce-product-description.html">
                          <img class="avatar mr-3" src="<?= BASE_URL?>\public\template\img\400x400\img6.jpg" alt="Image Description">

                          <div class="media-body">
                            <h5 class="text-hover-primary mb-0">Mango Women's shoe</h5>
                          </div>
                        </a>
                        <!-- End Media -->
                      </td>
                      <td><i class="tio-trending-down text-danger mr-1"></i> 53%</td>
                      <td>$65</td>
                      <td>5,002</td>
                      <td>
                        <h4 class="mb-0">$9,917.45</h4>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <!-- Media -->
                        <a class="media align-items-center" href="./ecommerce-product-description.html">
                          <img class="avatar mr-3" src="<?= BASE_URL?>\public\template\img\400x400\img3.jpg" alt="Image Description">

                          <div class="media-body">
                            <h5 class="text-hover-primary mb-0">Calvin Klein t-shirts</h5>
                          </div>
                        </a>
                        <!-- End Media -->
                      </td>
                      <td><i class="tio-trending-up text-success mr-1"></i> 50%</td>
                      <td>$89</td>
                      <td>4,714</td>
                      <td>
                        <h4 class="mb-0">$8,466.02</h4>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <!-- Media -->
                        <a class="media align-items-center" href="./ecommerce-product-description.html">
                          <img class="avatar mr-3" src="<?= BASE_URL?>\public\template\img\400x400\img5.jpg" alt="Image Description">

                          <div class="media-body">
                            <h5 class="text-hover-primary mb-0">Givenchy perfume</h5>
                          </div>
                        </a>
                        <!-- End Media -->
                      </td>
                      <td><i class="tio-trending-up text-success mr-1"></i> 50%</td>
                      <td>$99</td>
                      <td>4,155</td>
                      <td>
                        <h4 class="mb-0">$7,715.89</h4>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div id="cardFullScreenEg" class="card overflow-hidden mb-3 mb-lg-5">
        <!-- Header -->
        <div class="card-header">
          <div class="row align-items-sm-center flex-grow-1">
            <div class="col-sm mb-2 mb-sm-0">
              <h4 class="card-header-title">Your top countries <i class="tio-verified text-primary"
                  data-toggle="tooltip" data-placement="top" title="This report is based on 100% of sessions."></i></h4>
            </div>
            <div class="col-sm-auto">
              <a class="btn btn-sm btn-ghost-secondary" href="#">View all</a>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 col-lg">
              <!-- Stats -->
              <div class="media align-items-center">
                <i class="tio-user-big-outlined tio-xl mr-3"></i>

                <div class="media-body">
                  <span class="d-block font-size-sm">Users</span>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">34,413</h3>
                    <span class="badge badge-soft-success ml-2">
                      <i class="tio-trending-up"></i> 12.5%
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Stats -->

              <div class="d-lg-none">
                <hr>
              </div>
            </div>

            <div class="col-sm-6 col-lg column-divider-lg">
              <!-- Stats -->
              <div class="media align-items-center">
                <i class="tio-time-20-s tio-xl mr-3"></i>

                <div class="media-body">
                  <span class="d-block font-size-sm">Avg. session duration</span>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">1m 3s</h3>
                  </div>
                </div>
              </div>
              <!-- End Stats -->

              <div class="d-lg-none">
                <hr>
              </div>
            </div>

            <div class="col-sm-6 col-lg column-divider-lg">
              <!-- Stats -->
              <div class="media align-items-center">
                <i class="tio-pages-outlined tio-xl mr-3"></i>

                <div class="media-body">
                  <span class="d-block font-size-sm">Pages/Sessions</span>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">1.78</h3>
                  </div>
                </div>
              </div>
              <!-- End Stats -->

              <div class="d-sm-none">
                <hr>
              </div>
            </div>

            <div class="col-sm-6 col-lg column-divider-lg">
              <!-- Stats -->
              <div class="media align-items-center">
                <i class="tio-chart-donut-2 tio-xl mr-3"></i>

                <div class="media-body">
                  <span class="d-block font-size-sm">Bounce rate</span>
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">62.9%</h3>
                  </div>
                </div>
              </div>
              <!-- End Stats -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->

        <hr class="my-0">

        <!-- Body -->
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-lg-7">
              <!-- jVector Map -->
              <div style="height: 20.5rem;">
                <div class="js-jvectormap jvectormap-custom" data-hs-jvector-map-options='{
                         "tipCentered": true,
                         "focusOn": {
                           "x": 0.5,
                           "y": 0.5,
                           "scale": 1
                         },
                         "regionStyle": {
                          "initial": {
                            "fill": "#bdc5d1"
                          },
                          "hover": {
                            "fill": "#77838f"
                          }
                         },
                         "backgroundColor": "#fff",
                         "markerStyle": {
                           "initial": {
                             "stroke-width": 2,
                             "fill": "#377dff",
                             "stroke": "#fff",
                             "r": 6
                           },
                           "hover": {
                            "fill": "#377dff",
                            "stroke": "#fff"
                           }
                         },
                         "markers": [
                           {
                             "latLng": [38, -97],
                             "name": "United States"
                           },
                           {
                             "latLng": [20, 77],
                             "name": "India"
                           },
                           {
                             "latLng": [60, -95],
                             "name": "Canada"
                           },
                           {
                             "latLng": [51, 9],
                             "name": "Germany"
                           },
                           {
                             "latLng": [54, -2],
                             "name": "United Kingdom"
                           }
                         ]
                       }'></div>
              </div>
              <!-- End jVector Map -->
            </div>

            <div class="col-lg-5">
              <!-- Table -->
              <div class="table-responsive">
                <table
                  class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                  <thead>
                    <tr>
                      <th class="border-top-0">Country</th>
                      <th class="border-top-0">Visits</th>
                      <th class="border-top-0">Purchases</th>
                      <th class="border-top-0">Change</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <img class="avatar-xss avatar-circle mr-2" src="<?= BASE_URL?>\public\template\vendor\flag-icon-css\flags\1x1\us.svg"
                            alt="Image description">
                          <div class="media-body">
                            USA
                          </div>
                        </div>
                      </td>
                      <td>10,013</td>
                      <td>$5,361</td>
                      <td>
                        <div class="d-flex align-items-center">
                          73.2% <i class="tio-trending-up text-success ml-1"></i>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <img class="avatar-xss avatar-circle mr-2" src="<?= BASE_URL?>\public\template\vendor\flag-icon-css\flags\1x1\in.svg"
                            alt="Image description">
                          <div class="media-body">
                            India
                          </div>
                        </div>
                      </td>
                      <td>8,545</td>
                      <td>$4,923</td>
                      <td>
                        <div class="d-flex align-items-center">
                          45.8% <i class="tio-trending-down text-danger ml-1"></i>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <img class="avatar-xss avatar-circle mr-2" src="<?= BASE_URL?>\public\template\vendor\flag-icon-css\flags\1x1\ca.svg"
                            alt="Image description">
                          <div class="media-body">
                            Canada
                          </div>
                        </div>
                      </td>
                      <td>6,837</td>
                      <td>$3,954</td>
                      <td>
                        <div class="d-flex align-items-center">
                          24.4% <i class="tio-trending-up text-success ml-1"></i>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <img class="avatar-xss avatar-circle mr-2" src="<?= BASE_URL?>\public\template\vendor\flag-icon-css\flags\1x1\de.svg"
                            alt="Image description">
                          <div class="media-body">
                            Germany
                          </div>
                        </div>
                      </td>
                      <td>4,512</td>
                      <td>$2,512</td>
                      <td>
                        <div class="d-flex align-items-center">
                          12.8% <i class="tio-trending-up text-success ml-1"></i>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <img class="avatar-xss avatar-circle mr-2" src="<?= BASE_URL?>\public\template\vendor\flag-icon-css\flags\1x1\gb.svg"
                            alt="Image description">
                          <div class="media-body">
                            UK
                          </div>
                        </div>
                      </td>
                      <td>3,795</td>
                      <td>$1,173</td>
                      <td>
                        <div class="d-flex align-items-center">
                          67.9% <i class="tio-trending-down text-danger ml-1"></i>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- End Table -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="card">
        <div class="row">
          <div class="col-lg-6">
            <!-- Body -->
            <div class="card-body">
              <h4>Total sales <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top"
                  title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
              </h4>

              <div class="row align-items-sm-center mb-5">
                <div class="col-sm">
                  <span class="display-4 text-dark mr-2">$597,820.75</span>
                </div>

                <div class="col-sm-auto">
                  <span class="h3 text-success">
                    <i class="tio-trending-up"></i> 25.9%
                  </span>
                  <span class="d-block">&mdash; 1,347,935 orders <span
                      class="badge badge-soft-dark badge-pill ml-1">+$97k today</span></span>
                </div>
              </div>
              <!-- End Row -->

              <!-- Bar Chart -->
              <div class="chartjs-custom mb-4" style="height: 18rem;">
                <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                               "datasets": [{
                                "data": [200, 200, 240, 350, 200, 350, 200, 250, 285, 220],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [150, 230, 382, 204, 269, 290, 200, 250, 200, 225],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              }]
                            },
                            "options": {
                               "scales": {
                                  "yAxes": [{
                                    "gridLines": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "beginAtZero": true,
                                      "stepSize": 100,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10,
                                      "prefix": "$",
                                      "postfix": "k"
                                    }
                                  }],
                                  "xAxes": [{
                                    "gridLines": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 5
                                    }
                                  }]
                              },
                              "tooltips": {
                                "prefix": "$",
                                "postfix": "k",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                </canvas>
              </div>
              <!-- End Bar Chart -->

              <!-- Legend Indicators -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator"></span> Yesterday
                </div>
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Today
                </div>
              </div>
              <!-- End Legend Indicators -->
            </div>
            <!-- End Body -->

            <div class="d-lg-none">
              <hr>
            </div>
          </div>

          <div class="col-lg-6 column-divider-lg">
            <!-- Body -->
            <div class="card-body">
              <h4>Visitors</h4>

              <div class="row align-items-sm-center mb-5">
                <div class="col-sm">
                  <span class="display-4 text-dark mr-2">831,071</span>
                </div>

                <div class="col-sm-auto">
                  <span class="h3 text-danger">
                    <i class="tio-trending-down"></i> 16%
                  </span>
                  <span class="d-block">&mdash; 467,001 unique <span class="badge badge-soft-dark badge-pill ml-1">+7k
                      today</span></span>
                </div>
              </div>
              <!-- End Row -->

              <!-- Bar Chart -->
              <div class="chartjs-custom mb-4" style="height: 18rem;">
                <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                               "datasets": [{
                                "data": [20, 20, 24, 15, 30, 35, 20, 28, 18, 16],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [15, 23, 18, 20, 36, 29, 20, 22, 20, 22],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              }]
                            },
                            "options": {
                               "scales": {
                                  "yAxes": [{
                                    "gridLines": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "beginAtZero": true,
                                      "stepSize": 10,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10,
                                      "postfix": "k"
                                    }
                                  }],
                                  "xAxes": [{
                                    "gridLines": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 5
                                    }
                                  }]
                              },
                              "tooltips": {
                                "postfix": "k",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                </canvas>
              </div>
              <!-- End Bar Chart -->

              <!-- Legend Indicators -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator"></span> Yesterday
                </div>
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Today
                </div>
              </div>
              <!-- End Legend Indicators -->
            </div>
            <!-- End Body -->
          </div>
        </div>
        <!-- End Row -->

        <hr class="my-0">

        <div class="row">
          <div class="col-lg-6">
            <!-- Body -->
            <div class="card-body">
              <h4>Total orders</h4>

              <div class="row align-items-sm-center mb-5">
                <div class="col-sm">
                  <span class="display-4 text-dark mr-2">1,348,935</span>
                </div>

                <div class="col-sm-auto">
                  <span class="h3 text-success">
                    <i class="tio-trending-up"></i> 4.7%
                  </span>
                  <span class="d-block">&mdash; orders over time <span class="badge badge-soft-dark badge-pill ml-1">+5k
                      today</span></span>
                </div>
              </div>
              <!-- End Row -->

              <!-- Bar Chart -->
              <div class="chartjs-custom mb-4" style="height: 18rem;">
                <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                               "datasets": [{
                                "data": [15, 26, 29, 20, 23, 38, 20, 30, 20, 22],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [20, 20, 15, 18, 20, 24, 35, 20, 35, 22],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              }]
                            },
                            "options": {
                               "scales": {
                                  "yAxes": [{
                                    "gridLines": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "beginAtZero": true,
                                      "stepSize": 10,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10,
                                      "postfix": "k"
                                    }
                                  }],
                                  "xAxes": [{
                                    "gridLines": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 5
                                    }
                                  }]
                              },
                              "tooltips": {
                                "postfix": "k",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                </canvas>
              </div>
              <!-- End Bar Chart -->

              <!-- Legend Indicators -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator"></span> Yesterday
                </div>
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Today
                </div>
              </div>
              <!-- End Legend Indicators -->
            </div>
            <!-- End Body -->

            <div class="d-lg-none">
              <hr>
            </div>
          </div>

          <div class="col-lg-6 column-divider-lg">
            <!-- Body -->
            <div class="card-body">
              <h4>Refunded</h4>

              <div class="row align-items-sm-center mb-5">
                <div class="col-sm">
                  <span class="display-4 text-dark mr-2">52,441</span>
                </div>

                <div class="col-sm-auto">
                  <span class="h3 text-success">
                    <i class="tio-trending-up"></i> 11%
                  </span>
                  <span class="d-block">&mdash; refunds over time <span
                      class="badge badge-soft-dark badge-pill ml-1">+21 today</span></span>
                </div>
              </div>
              <!-- End Row -->

              <!-- Bar Chart -->
              <div class="chartjs-custom mb-4" style="height: 18rem;">
                <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                               "datasets": [{
                                "data": [10, 20, 22, 15, 20, 15, 20, 19, 14, 15],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [15, 13, 18, 10, 16, 19, 15, 14, 10, 26],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 2,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              }]
                            },
                            "options": {
                               "scales": {
                                  "yAxes": [{
                                    "gridLines": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "beginAtZero": true,
                                      "stepSize": 10,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10
                                    }
                                  }],
                                  "xAxes": [{
                                    "gridLines": {
                                      "display": false,
                                      "drawBorder": false
                                    },
                                    "ticks": {
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 5
                                    }
                                  }]
                              },
                              "tooltips": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                </canvas>
              </div>
              <!-- End Bar Chart -->

              <!-- Legend Indicators -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  <span class="legend-indicator"></span> Yesterday
                </div>
                <div class="col-auto">
                  <span class="legend-indicator bg-primary"></span> Today
                </div>
              </div>
              <!-- End Legend Indicators -->
            </div>
            <!-- End Body -->
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Dot -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                    data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                    <i class="tio-command-key"></i>
                  </a>
                </div>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Dot -->
          </div>
        </div>
      </div>
    </div>



    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-lg sidebar-card">
      <div class="card-header">
        <h4 class="card-header-title">Keyboard shortcuts</h4>

        <!-- Toggle Button -->
        <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
          data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
          <i class="tio-clear tio-lg"></i>
        </a>
        <!-- End Toggle Button -->
      </div>

      <!-- Body -->
      <div class="card-body sidebar-body sidebar-scrollbar">
        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
          <div class="list-group-item">
            <h5 class="mb-1">Formatting</h5>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span class="font-weight-bold">Bold</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">b</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <em>italic</em>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">i</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <u>Underline</u>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">u</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <s>Strikethrough</s>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">s</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span class="small">Small text</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">s</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <mark>Highlight</mark>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">e</kbd>
              </div>
            </div>
          </div>
        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
          <div class="list-group-item">
            <h5 class="mb-1">Insert</h5>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Mention person <a href="#">(@Brian)</a></span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">@</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Link to doc <a href="#">(+Meeting notes)</a></span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">+</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <a href="#">#hashtag</a>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">#hashtag</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Date</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">/date</kbd>
                <kbd class="d-inline-block mb-1">Space</kbd>
                <kbd class="d-inline-block mb-1">/datetime</kbd>
                <kbd class="d-inline-block mb-1">/datetime</kbd>
                <kbd class="d-inline-block mb-1">Space</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Time</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">/time</kbd>
                <kbd class="d-inline-block mb-1">Space</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Note box</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">/note</kbd>
                <kbd class="d-inline-block mb-1">Enter</kbd>
                <kbd class="d-inline-block mb-1">/note red</kbd>
                <kbd class="d-inline-block mb-1">/note red</kbd>
                <kbd class="d-inline-block mb-1">Enter</kbd>
              </div>
            </div>
          </div>
        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
          <div class="list-group-item">
            <h5 class="mb-1">Editing</h5>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Find and replace</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">r</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Find next</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">n</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Find previous</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">p</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Indent</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Tab</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Un-indent</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Tab</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Move line up</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Move line down</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Add a comment</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">m</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Undo</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">z</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Redo</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">y</kbd>
              </div>
            </div>
          </div>
        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
          <div class="list-group-item">
            <h5 class="mb-1">Application</h5>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Create new doc</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">n</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Present</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">p</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Share</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">s</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Search docs</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">o</kbd>
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-5">
                <span>Keyboard shortcuts</span>
              </div>
              <div class="col-7 text-right">
                <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd
                  class="d-inline-block mb-1">/</kbd>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-lg sidebar-card">
      <div class="card-header">
        <h4 class="card-header-title">Activity stream</h4>

        <!-- Toggle Button -->
        <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
          data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
          <i class="tio-clear tio-lg"></i>
        </a>
        <!-- End Toggle Button -->
      </div>

      <!-- Body -->
      <div class="card-body sidebar-body sidebar-scrollbar">
        <!-- Step -->
        <ul class="step step-icon-sm step-avatar-sm">
          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <div class="step-avatar">
                <img class="step-avatar-img" src="<?= BASE_URL?>\public\template\img\160x160\img9.jpg" alt="Image Description">
              </div>

              <div class="step-content">
                <h5 class="mb-1">Iana Robinson</h5>

                <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i
                      class="tio-folder-bookmarked"></i> Fd-7</a></p>

                <ul class="list-group list-group-sm">
                  <!-- List Item -->
                  <li class="list-group-item list-group-item-light">
                    <div class="row gx-1">
                      <div class="col-6">
                        <div class="media">
                          <span class="mt-1 mr-2">
                            <img class="avatar avatar-xs" src="<?= BASE_URL?>\public\template\svg\brands\excel.svg" alt="Image Description">
                          </span>
                          <div class="media-body text-truncate">
                            <span class="d-block font-size-sm text-dark text-truncate"
                              title="weekly-reports.xls">weekly-reports.xls</span>
                            <small class="d-block text-muted">12kb</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="media">
                          <span class="mt-1 mr-2">
                            <img class="avatar avatar-xs" src="<?= BASE_URL?>\public\template\svg\brands\word.svg" alt="Image Description">
                          </span>
                          <div class="media-body text-truncate">
                            <span class="d-block font-size-sm text-dark text-truncate"
                              title="weekly-reports.xls">weekly-reports.xls</span>
                            <small class="d-block text-muted">4kb</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- End List Item -->
                </ul>

                <small class="text-muted text-uppercase">Now</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->

          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-dark">B</span>

              <div class="step-content">
                <h5 class="mb-1">Bob Dean</h5>

                <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i
                      class="tio-folder-bookmarked"></i> Fr-6</a> as <span
                    class="badge badge-soft-success badge-pill"><span
                      class="legend-indicator bg-success"></span>"Completed"</span></p>

                <small class="text-muted text-uppercase">Today</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->

          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <div class="step-avatar">
                <img class="step-avatar-img" src="<?= BASE_URL?>\public\template\img\160x160\img3.jpg" alt="Image Description">
              </div>

              <div class="step-content">
                <h5 class="h5 mb-1">Crane</h5>

                <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                <ul class="list-group list-group-sm">
                  <li class="list-group-item list-group-item-light">
                    <div class="row gx-1">
                      <div class="col">
                        <img class="img-fluid rounded ie-sidebar-activity-img" src="<?= BASE_URL?>\public\template\svg\illustrations\card-1.svg"
                          alt="Image Description">
                      </div>
                      <div class="col">
                        <img class="img-fluid rounded ie-sidebar-activity-img" src="<?= BASE_URL?>\public\template\svg\illustrations\card-2.svg"
                          alt="Image Description">
                      </div>
                      <div class="col">
                        <img class="img-fluid rounded ie-sidebar-activity-img" src="<?= BASE_URL?>\public\template\svg\illustrations\card-3.svg"
                          alt="Image Description">
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="text-center">
                          <a href="#">+2</a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <small class="text-muted text-uppercase">May 12</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->

          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-info">D</span>

              <div class="step-content">
                <h5 class="mb-1">David Lidell</h5>

                <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                <small class="text-muted text-uppercase">May 15</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->

          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <div class="step-avatar">
                <img class="step-avatar-img" src="<?= BASE_URL?>\public\template\img\160x160\img7.jpg" alt="Image Description">
              </div>

              <div class="step-content">
                <h5 class="mb-1">Rachel King</h5>

                <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i
                      class="tio-folder-bookmarked"></i> Fr-3</a> as <span
                    class="badge badge-soft-success badge-pill"><span
                      class="legend-indicator bg-success"></span>"Completed"</span></p>

                <small class="text-muted text-uppercase">Apr 29</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->

          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <div class="step-avatar">
                <img class="step-avatar-img" src="<?= BASE_URL?>\public\template\img\160x160\img5.jpg" alt="Image Description">
              </div>

              <div class="step-content">
                <h5 class="mb-1">Finch Hoot</h5>

                <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                <small class="text-muted text-uppercase">Apr 06</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->

          <!-- Step Item -->
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-primary">
                <i class="tio-user"></i>
              </span>

              <div class="step-content">
                <h5 class="mb-1">Project status updated</h5>

                <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i
                      class="tio-folder-bookmarked"></i> Fr-3</a> as <span
                    class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In
                    progress"</span></p>

                <small class="text-muted text-uppercase">Feb 10</small>
              </div>
            </div>
          </li>
          <!-- End Step Item -->
        </ul>
        <!-- End Step -->

        <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
      </div>
      <!-- End Body -->
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <i class="tio-clear tio-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="<?= BASE_URL?>\public\template\svg\illustrations\graphs.svg" alt="Image Description">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?= BASE_URL?>\public\template\svg\brands\gitlab-gray.svg"
                  alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?= BASE_URL?>\public\template\svg\brands\fitbit-gray.svg"
                  alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?= BASE_URL?>\public\template\svg\brands\flow-xo-gray.svg"
                  alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid ie-welcome-brands" src="<?= BASE_URL?>\public\template\svg\brands\layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->


  <!-- JS Implementing Plugins -->
  <script src="<?= BASE_URL?>\public\template\js\vendor.min.js"></script>
  <script src="<?= BASE_URL?>\public\template\vendor\chart.js\dist\Chart.min.js"></script>
  <script src="<?= BASE_URL?>\public\template\vendor\chartjs-chart-matrix\dist\chartjs-chart-matrix.min.js"></script>



  <!-- JS Front -->
  <script src="<?= BASE_URL?>\public\template\js\theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // ONLY DEV
      // =======================================================

      if (window.localStorage.getItem('hs-builder-popover') === null) {
        $('#builderPopover').popover('show')
          .on('shown.bs.popover', function () {
            $('.popover').last().addClass('popover-dark')
          });

        $(document).on('click', '#closeBuilderPopover', function () {
          window.localStorage.setItem('hs-builder-popover', true);
          $('#builderPopover').popover('dispose');
        });
      } else {
        $('#builderPopover').on('show.bs.popover', function () {
          return false
        });
      }

      // END ONLY DEV
      // =======================================================


      // BUILDER TOGGLE INVOKER
      // =======================================================
      $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
        $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
      });


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();



      // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
      // =======================================================
      var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


      // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
      // =======================================================
      $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

      $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
        if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
          return false;
        }
      });


      // INITIALIZATION OF UNFOLD
      // =======================================================
      $('.js-hs-unfold-invoker').each(function () {
        var unfold = new HSUnfold($(this)).init();
      });


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      $('.js-form-search').each(function () {
        new HSFormSearch($(this)).init()
      });


      // INITIALIZATION OF SELECT2
      // =======================================================
      $('.js-select2-custom').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });


      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);


      // INITIALIZATION OF CHARTJS
      // =======================================================
      $('.js-chart').each(function () {
        $.HSCore.components.HSChartJS.init($(this));
      });


      // INITIALIZATION OF JVECTORMAP
      // =======================================================
      $('.js-jvectormap').each(function () {
        var jVectorMap = $.HSCore.components.HSJVectorMap.init($(this));
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

</html>