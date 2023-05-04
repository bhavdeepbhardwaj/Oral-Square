@extends('layouts.app')

@section('css')
@endsection

@section('content')

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        You are Admin.
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Appointment Lead Report</div>
                    <div class="card-body">

                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    {{-- <th>S.No</th> --}}
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Appointment Date</th>
                                    <th>Email</th>
                                    <th>Note</th>
                                    <th>Treatment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($appointment) && $appointment->count())
                                    @foreach ($appointment as $key => $value)
                                        <tr>
                                            {{-- <td>{{ $value->id }}</td> --}}
                                            <td>{{ $value->fname }}</td>
                                            <td>{{ $value->phone }}</td>
                                            <td>{{ $value->app_date }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ $value->note }}</td>
                                            <td>{{ $value->treatment_needed }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10">There are no data.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {!! $appointment->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
