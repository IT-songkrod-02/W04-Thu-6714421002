@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="m-0 text-primary fw-bold">รายการคำนำหน้านาม (Title)</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th style="width: 15%">ID</th>
                    <th>คำนำหน้านาม (Title Name)</th>
                    <th style="width: 30%">วันที่สร้าง</th>
                </tr>
            </thead>
            <tbody>
                @foreach($titles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><span class="badge bg-secondary fs-6">{{ $item->name }}</span></td>
                    <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection