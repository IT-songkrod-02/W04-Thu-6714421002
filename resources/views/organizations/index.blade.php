@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="m-0 text-primary fw-bold">รายการองค์กร / หน่วยงาน (Organization)</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>รหัส</th>
                    <th>ชื่อองค์กร</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>อีเมล</th>
                </tr>
            </thead>
            <tbody>
                @foreach($organizations as $org)
                <tr>
                    <td><span class="badge bg-info text-dark">{{ $org->code }}</span></td>
                    <td class="fw-bold">{{ $org->name }}</td>
                    <td>{{ $org->phone }}</td>
                    <td>{{ $org->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection