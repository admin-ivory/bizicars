@extends('layouts.user_type.auth')

@section('content')

    <div class="accordion-1">
    <div class="container">
        <div class="row my-5">
        <div class="col-md-6 mx-auto text-center">
            <h2>Manage Frontend Section</h2>
            <p>A lot of people don’t appreciate the moment until it’s passed. I'm not trying my hardest, and I'm not trying to do </p>
        </div>
        </div>
        <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="accordion" id="accordionRental">
            <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingOne">
                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    About Us
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
                </h5>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                <div class="accordion-body text-sm opacity-8">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Regular" class="form-control" disabled />
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                            <input class="form-control" placeholder="Birthday" type="text">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group has-success">
                            <input type="text" placeholder="Success" class="form-control is-valid" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-danger">
                            <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                        </div>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingTwo">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Contact
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
                </h5>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Regular" class="form-control" disabled />
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                            <input class="form-control" placeholder="Birthday" type="text">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group has-success">
                            <input type="text" placeholder="Success" class="form-control is-valid" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-danger">
                            <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                        </div>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingThree">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Cookiees Policy
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
                </h5>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Regular" class="form-control" disabled />
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group mb-4">
                            <input class="form-control" placeholder="Birthday" type="text">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group has-success">
                            <input type="text" placeholder="Success" class="form-control is-valid" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-danger">
                            <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                        </div>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingFour">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Testimonial
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
                </h5>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Regular" class="form-control" disabled />
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                <input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                <input class="form-control" placeholder="Birthday" type="text">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group has-success">
                                <input type="text" placeholder="Success" class="form-control is-valid" />
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-danger">
                                <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingFifth">
                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                    Where do I find the shipping details?
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                </button>
                </h5>
                <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                <div class="accordion-body text-sm opacity-8">
                    There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill. I’m not really specifically talented at anything except for the ability to learn. That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you can’t learn anything from a compliment.
                    I always felt like I could do anything. That’s the main thing people are controlled by! Thoughts- their perception of themselves! They're slowed down by their perception of themselves. If you're taught you can’t do anything, you won’t do anything. I was taught I could do everything.
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    @endsection
@push('dashboard')
  <script>
    window.onload = function() {
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6

            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }
  </script>
@endpush