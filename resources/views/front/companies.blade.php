@extends('front.layouts.front')
@section('content')
<div class="compare-area pt-60 pb-60">
    <div class="container">
        <div class="compare-table table-responsive">
            <table class="table table-bordered table-hover mb-0">
                @php $companies = DB::table('users')->where('role','seller')->get();  @endphp
                <tbody>
                    <tr>
                        <th>Company Name</th>
                        @foreach($companies as $company)
                            <td>
                                <h5 class="compare-product-name"><a href="#">{{ $company->name }}</a></h5>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Email</th>
                        @foreach($companies as $company)
                            <td><a href="mailto:{{ $company->email}}">{{ $company->email }}</a></td>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Phone</th>
                        @foreach($companies as $company)
                            <td><span>{{ $company->phone }}</span></td>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Address</th>
                        @foreach($companies as $company)
                            <td><span>{{ $company->address }}</span></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
