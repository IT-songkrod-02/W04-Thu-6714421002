@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="m-0 text-primary fw-bold">รายการเจ้าหน้าที่ (Staff)</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-warning">
                <tr>
                    <th>ID</th>
                    <th>ชื่อ - นามสกุล</th>
                    <th>สังกัดองค์กร</th>
                    <th>อีเมล</th>
                    <th>เบอร์โทรศัพท์</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td class="fw-bold">{{ $person->title->name }} {{ $person->first_name }} {{ $person->last_name }}</td>
                    <td><span class="badge bg-primary">{{ $person->organization->name }}</span></td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection