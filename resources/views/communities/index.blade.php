@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="m-0 text-primary fw-bold">รายการชุมชน (Community)</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>ชื่อชุมชน</th>
                    <th>ตำบล/แขวง</th>
                    <th>อำเภอ/เขต</th>
                    <th>จังหวัด</th>
                </tr>
            </thead>
            <tbody>
                @foreach($communities as $com)
                <tr>
                    <td>{{ $com->id }}</td>
                    <td class="fw-bold text-success">{{ $com->name }}</td>
                    <td>{{ $com->subdistrict }}</td>
                    <td>{{ $com->district }}</td>
                    <td>{{ $com->province }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection