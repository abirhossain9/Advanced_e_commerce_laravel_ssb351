@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update The Branch Information</h4>
        <p class="mg-b-0">Update Branch Informations Of this company</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">

                        <form action="{{route('mentor.update',$mentor->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" class="form-control" required="required" value="{{$mentor->fullname}}" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control" required="required" value="{{$mentor->designation}}" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" required="required" value="{{$mentor->address}}" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                    <label>Overview</label>
                                    <textarea type="text" rows="4" name="overview" class="form-control" required="required" ">{{$mentor->overview}}</textarea>
                                </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Phone</label>
                                         <input type="text" name="phone" class="form-control" required="required" autocomplete="off" value="{{$mentor->overview}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" required="required" autocomplete="off" value="{{$mentor->email}}">
                                    </div>
                                    <div class="form-gorup">
                                        <label>Fiverr Url</label>
                                        <input type="text" name="fiver_url" class="form-control" value="{{$mentor->fiverr_url}}">
                                    </div>
                                    <div class="form-gorup">
                                        <label>Upwork Url</label>
                                        <input type="text" name="upwork_url" class="form-control" value="{{$mentor->upwork_url}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if($mentor->status == 1) selected @endif>Active</option>
                                            <option value="2" @if($mentor->status == 2) selected @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                     <div class="form-gorup">
                                        <label>Profile Picture</label>
                                          <br>
                                        @if ($mentor->profile_pic==NULL)
                                          <img src="{{asset('backend/img/mentor/default.jpg')}}" alt="" width="40">
                                        @else
                                          <img src="{{asset('backend/img/mentor/'.$mentor->profile_pic)}}" alt="" width="40">

                                        @endif
                                    <br><br>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>

                                    <div class="form-gorup">
                                        <br>
                                        <label>Fiverr Logo</label>
                                        <br>
                                        @if ($mentor->fiverr_img==NULL)

                                          no logo uploaded
                                        @else
                                          <img src="{{asset('backend/img/mentor/badge/'.$mentor->fiverr_img)}}" alt="" width="40">

                                        @endif
                                    <br>
                                        <input type="file" name="fiverr_img" class="form-control-file">
                                    </div>

                                    <div class="form-gorup">
                                        <br>
                                        <label>Upwork Logo</label>
                                          <br>
                                        @if ($mentor->upwork_img==NULL)
                                          no logo uploaded
                                        @else
                                          <img src="{{asset('backend/img/mentor/badge/'.$mentor->upwork_img)}}" alt="" width="40">

                                        @endif
                                    <br>
                                        <input type="file" name="upwork_img" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="updateMentor" value="Update Mentor" class="custom-btn btn btn-teal mg-b-10">
                                    </div>

                                </div>


                            </div>

                        </form>
                    <!-- d-flex -->
                </div>
                <!-- d-flex -->
            </div>
            <!-- card -->

            {{-- page body content end --}}
        </div>
    </div>
</div>
@endsection
