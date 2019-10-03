@extends('layouts.app')

{{-- @section('page-title', 'Home') --}}

@section('content')
    <div class="alert alert-icon alert-primary" role="alert">
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> <b>Welcome to ob paycash</b>, you can securely send money to your loved ones 
      <button type="button" class="close" data-dismiss="alert"></button> 
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            @component('tabler::components.panel', [
                'title' => 'Dashboard',
            ])
                
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-status bg-cyan"></div>
                            <div class="card-body text-center">
                              <div class="h4">Current Balance</div>
                              <div class="display-4 font-weight-bold mb-3" style="color:darkcyan">$65200</div>
                              {{-- <div class="progress progress-sm">
                                <div class="progress-bar bg-cyan" style="width: 60%"></div>
                              </div> --}}
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="card p-3">
                            <div class="d-flex align-items-center">
                              {{-- <span class="stamp stamp-md bg-blue mr-3">
                                <i class="fe fe-plus"></i>
                              </span> --}}
                                <div class="col-md-6">
                                    <h4 class="m-0"><a href="javascript:void(0)">14 <small>Deposits</small></a></h4>
                                </div>
                                <div class="col-md-6">                                      
                                  <button class="btn btn-outline-primary btn-xs">
                                    <i class="fe fe-plus"></i>
                                    New deposit
                                  </button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="card p-3">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <h4 class="m-0"><a href="javascript:void(0)">6 <small>Withdrawal</small></a></h4>
                                </div>
                                <div class="col-md-6">
                                  <button class="btn btn-outline-primary btn-xs">
                                    <i class="fe fe-plus"></i>
                                    New Withdrawal
                                  </button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-success btn-block" style="font-size:16px;">                                  
                              <i class="fe fe-arrow-right-circle"></i>
                              Transfer Money
                            </button>
                            <br>
                          
                        </div>
                    </div>                                                  
                  </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-status  bg-cyan"></div>
                        <div class="card-header">
                          <h3 class="card-title">Recent Activities</h3>
                        </div>
                        
                        <div class="table-responsive">
                          <table class="table table-condensed table-hover datatable">
                            
                            <tbody>
                              <tr>
                                <td class="w-1"><span class="avatar" style="background-image: url(./demo/faces/male/9.jpg)"></span></td>
                                <td>Ronald Bradley</td>
                                <td>Initial commit</td>
                                <td class="text-nowrap">May 6, 2018</td>
                                <td class="w-1"><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                              </tr>
                              <tr>
                                <td><span class="avatar">BM</span></td>
                                <td>Russell Gibson</td>
                                <td>Main structure</td>
                                <td class="text-nowrap">April 22, 2018</td>
                                <td><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                              </tr>
                              <tr>
                                <td><span class="avatar" style="background-image: url(./demo/faces/female/1.jpg)"></span></td>
                                <td>Beverly Armstrong</td>
                                <td>Left sidebar adjustments</td>
                                <td class="text-nowrap">April 15, 2018</td>
                                <td><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                              </tr>
                              <tr>
                                  <td><span class="avatar" style="background-image: url(./demo/faces/female/11.jpg)"></span></td>
                                  <td>Sharon Wells</td>
                                  <td>Fixes #625</td>
                                  <td class="text-nowrap">April 9, 2018</td>
                                  <td><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                                </tr>
                              <tr>
                                <td><span class="avatar" style="background-image: url(./demo/faces/male/4.jpg)"></span></td>
                                <td>Bobby Knight</td>
                                <td>Topbar dropdown style</td>
                                <td class="text-nowrap">April 8, 2018</td>
                                <td><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                              </tr>
                              <tr>
                                <td><span class="avatar" style="background-image: url(./demo/faces/female/11.jpg)"></span></td>
                                <td>Sharon Wells</td>
                                <td>Fixes #625</td>
                                <td class="text-nowrap">April 9, 2018</td>
                                <td><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                              </tr>
                              <tr>
                                <td><span class="avatar">BM</span></td>
                                <td>Russell Gibson</td>
                                <td>Main structure</td>
                                <td class="text-nowrap">April 22, 2018</td>
                                <td><a href="#" class="icon" title="Details about the transaction"><i class="fe fe-info" style="color:lightseagreen"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                          <script>
                            require(['datatables', 'jquery'], function(datatable, $) {
                              $('.datatable').DataTable();
                            });
                          </script>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" value="michael23">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Company" value="Chet">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="City" value="Melbourne">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group">
                            <label class="form-label">Postal Code</label>
                            <input type="number" class="form-control" placeholder="ZIP Code">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="form-label">Country</label>
                            <select class="form-control custom-select">
                              <option value="">Germany</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <label class="form-label">About Me</label>
                            <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme</textarea>
                          </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            @endcomponent
        </div>
    </div>
@endsection
