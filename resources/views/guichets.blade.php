@extends('layouts.user_type.auth')

@section('content')
  <div class="nav-wrapper position-relative end-0">
  <ul class="nav nav-pills nav-fill p-1" role="tablist">
    <li class="nav-item">
      <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#tab-table1" role="tab" aria-controls="preview" aria-selected="true">
      <i class="ni ni-badge text-sm me-2"></i> Compagnie
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link mb-0 px-0 py-1  {{ (Request::is('vehicles') ? 'active' : '') }}" data-bs-toggle="tab" href=" {{route('vehicles')}}" role="tab" aria-controls="code" aria-selected="false">
        <i class="ni ni-laptop text-sm me-2"></i> Vehicules
      </a>
    </li>
  </ul>
</div>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
     <div class= col-12>
      <div class= "card mb-4">
        <div class ="card-header pb-0">
          <h6>All Guichets</h6>
        <div class= "row">
          <div class="tab-content pt-2">
            <div class="tab-pane show active" id="tab-table1">
              <table id="myTable1" class="table align-items-center mb-0">
                <thead>
                  <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Name')</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps2">@lang('Mobile Number')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('City')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Location')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Status')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Action')</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($guichets as $item)
                  <tr>
                    <td data-label="@lang('Name')">
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ __($item->name) }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ __($item->city) }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                      <p class="text-xs text-secondary mb-0">{{ __($item->mobile) }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{ __($item->location) }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                    </td>
                    <td data-label="@lang('Status')">                              
                    @if($item->status == 1)
                              <span class="badge badge-sm bg-gradient-success">@lang('Active')</span>
                      @else         
                              <span class="badge badge-sm bg-gradient-danger">@lang('Disable')</span>
                              
                          </td>
                    @endif 
                    <td data-label="@lang('Action')">
                      @if ($item->status != 1)
                      <button type="button"
                        class="btn btn-icon-only btn-info rounded-circle"
                        data-bs-toggle="modal"
                        data-bs-target="#editGuichetModalMessages"
                        title="Edit guichet"
                        data-id="{{ $item->id }}"
                        data-name="{{ $item->name }}"
                        data-original-title="@lang('Active')">
                        <i class="ni ni-settings"></i>                            
                      </button>
                      <button type="button"
                        class="btn btn-icon-only btn-success rounded-circle"
                        data-bs-toggle="modal"
                        title="Enable Guichets" 
                        data-bs-placement="top" 
                        data-bs-target="#exampleModalMessage"
                        data-name="{{ $item->name }}"
                        data-id="{{ $item->id }}"
                        data-original-title="@lang('Active')">
                        <i class="ni ni-ui-04"></i>
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="ni ni-bell-55 ni-3x"></i>
                              <h4 class="text-gradient text-danger mt-4">You should read this!</h4>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn bg-gradient-primary">Send message</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal fade" id="editGuichetModalMessages" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="ni ni-bell-55 ni-3x"></i>
                              <h4 class="text-gradient text-danger mt-4">You should read this!</h4>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn bg-gradient-primary">Send message</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @else
                          <button type="button"
                              class="btn btn-icon-only btn-warning rounded-circle disableBtn"
                              data-toggle="modal" data-target="#disableModal"
                              data-id="{{ $item->id }}"
                              data-name="{{ $item->name }}"
                              data-original-title="@lang('Disable')">
                              <i class="la la-eye-slash"></i>
                          </button>
                      @endif
                    </td>
                  </tr>
                  @empty
                          <tr>
                              <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                          </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="tab-table2">
            <table id="myTable2" class="table align-items-center mb-0">
                <thead>
                  <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Name')</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps2">@lang('Mobile Number')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('City')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Location')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Status')</th>
                      <th class= "text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">@lang('Action')</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($guichets as $item)
                  <tr>
                    <td data-label="@lang('Name')">
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ __($item->city) }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ __($item->city) }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                      <p class="text-xs text-secondary mb-0">{{ __($item->mobile) }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{ __($item->location) }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                    </td>
                    <td data-label="@lang('Status')">                              
                    @if($item->status == 1)
                              <span class="badge badge-sm bg-gradient-success">@lang('Active')</span>
                      @else         
                              <span class="badge badge-sm bg-gradient-danger">@lang('Disable')</span>
                              
                          </td>
                    @endif 
                    <td data-label="@lang('Action')">
                      @if ($item->status != 1)
                      <button type="button"
                        class="btn btn-icon-only btn-info rounded-circle"
                        data-bs-toggle="modal"
                        data-bs-target="#editGuichetModalMessages"
                        title="Edit guichet"
                        data-id="{{ $item->id }}"
                        data-name="{{ $item->name }}"
                        data-original-title="@lang('Active')">
                        <i class="ni ni-settings"></i>                            
                      </button>
                      <button type="button"
                        class="btn btn-icon-only btn-success rounded-circle"
                        data-bs-toggle="modal"
                        title="Enable Guichets" 
                        data-bs-placement="top" 
                        data-bs-target="#exampleModalMessage"
                        data-name="{{ $item->name }}"
                        data-id="{{ $item->id }}"
                        data-original-title="@lang('Active')">
                        <i class="ni ni-ui-04"></i>
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="ni ni-bell-55 ni-3x"></i>
                              <h4 class="text-gradient text-danger mt-4">You should read this!</h4>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn bg-gradient-primary">Send message</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal fade" id="editGuichetModalMessages" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="py-3 text-center">
                              <i class="ni ni-bell-55 ni-3x"></i>
                              <h4 class="text-gradient text-danger mt-4">You should read this!</h4>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn bg-gradient-primary">Send message</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @else
                          <button type="button"
                              class="btn btn-icon-only btn-warning rounded-circle disableBtn"
                              data-toggle="modal" data-target="#disableModal"
                              data-id="{{ $item->id }}"
                              data-name="{{ $item->name }}"
                              data-original-title="@lang('Disable')">
                              <i class="la la-eye-slash"></i>
                          </button>
                      @endif
                    </td>
                  </tr>
                  @empty
                          <tr>
                              <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                          </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
      </div>
        </div>
      </div>
     </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Projects table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-users-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Spotify</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$2,500</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-users-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">60%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Invision</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$5,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">done</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-users-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Jira</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$3,400</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-users-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">30%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$1,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-users-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">0%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Webdev</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$14,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-users-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">80%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Adobe XD</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$2,300</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">done</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-users-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  @endsection
@push('')
<script>
  document.querySelectorAll('button[data-bs-toggle="tab"]').forEach((el) => {
    el.addEventListener('shown.bs.tab', () => {
        DataTable.tables({ visible: true, api: true }).columns.adjust();
    });
});
</script>
@endpush