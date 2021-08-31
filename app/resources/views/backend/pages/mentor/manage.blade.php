@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Branch</h4>
        <p class="mg-b-0">Manage All Branches From Here.</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                 @include('backend.flash-massage')
                <div class="d-md-flex justify-content-between pd-25">

                    {{-- Table Content start --}}
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table table-bordered table-striped table-hover table-custom">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#sl.</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($mentors as $mentor)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>@if ($mentor->profile_pic==NULL)
                                         <img src="{{asset('backend/img/mentor/default.jpg')}}" alt="" width="40">
                                    @else
                                         <img src="{{asset('backend/img/mentor/'.$mentor->profile_pic)}}" alt="" width="40">

                                    @endif</td>
                                    <td>{{$mentor->fullname}}</td>
                                    <td>{{$mentor->designation}}</td>
                                    <td>{{$mentor->phone}}</td>
                                    <td>{{$mentor->email}}</td>
                                    <td>{{$mentor->address}}</td>
                                    <td>
                                        @if ($mentor->status==1)
                                        <span class="badge badge-success">active</span>
                                        @elseif ($mentor->status==2)
                                        <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('mentor.edit',$mentor->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#mentor{{$mentor->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="mentor{{$mentor->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delte This mentor ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('mentor.destroy',$mentor->id)}}" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                                </form>

                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @if ($mentors->count()==0)
                            <div class="alert alert-info">
                                No Mentor added please add a mentor first
                            </div>
                        @endif

                    </div>

                    {{-- Table Content end --}}
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
