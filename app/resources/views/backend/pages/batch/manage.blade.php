@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Batch</h4>
        <p class="mg-b-0">Manage All Batches Of Admission Going On From Here.</p>
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
                                    <th scope="col">Batch Name</th>
                                    <th scope="col">Admission Status</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Mentor Name</th>
                                    <th scope="col">Branch Name</th>
                                    <th scope="col">Class Starting Date</th>
                                    <th scope="col">Batch Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($batches as $batch)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$batch->batch_name}}</td>
                                    <td>
                                        @if ($batch->admission_status==1)
                                        <span class="badge badge-success">Admission Going On</span>
                                        @elseif ($batch->admission_status==2)
                                        <span class="badge badge-warning">Admission Closed</span>
                                        @endif
                                    </td>
                                    <td>{{$batch->course->english_title}}</td>
                                    <td>{{$batch->mentor->fullname}}</td>
                                    <td>{{$batch->branch->name}}</td>
                                    <td>{{$batch->starting_date}}</td>
                                    <td>
                                        @if ($batch->batch_type==1)
                                        <span class="badge badge-info">Online Batch</span>
                                        @elseif ($batch->batch_type==2)
                                        <span class="badge badge-dark">Offline Batch</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($batch->status==1)
                                        <span class="badge badge-success">active</span>
                                        @elseif ($batch->status==2)
                                        <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('batch.edit',$batch->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#batch{{$batch->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="batch{{$batch->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This batch ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('batch.destroy',$batch->id)}}" method="POST">
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
                        @if ($batches->count()==0)
                            <div class="alert alert-info">
                                No Batch added please add a batch first
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
