@extends('layouts.app')

{{-- @section('page-title', 'Home') --}}

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            @component('tabler::components.panel', [
                'title' => 'Welcome',
            ])
                @slot('tools')
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                            class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                @endslot
                <div class="row">
                    <div class="col-md-5" style="text-align:justify">
                        <div class="col-md-10 jumbotron">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus dignissimos atque obcaecati incidunt corrupti necessitatibus natus quaerat perferendis sapiente vel voluptatum quibusdam, dicta, rerum suscipit, hic tenetur ipsa ex totam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et doloremque, dicta asperiores pariatur illum similique aliquam quas sint consectetur accusantium magni quod ab, rerum sapiente natus? Corrupti, deleniti. Adipisci, saepe! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora ratione porro saepe inventore minus esse cum. Aperiam, eius ipsam! Aliquam, temporibus rem. Consectetur illum dignissimos ex harum quisquam sit doloremque.
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
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
                        </div>
                    </div>
                </div>

            @endcomponent
        </div>
    </div>
@endsection
