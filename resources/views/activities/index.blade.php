@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="m-0 text-primary fw-bold">รายการกิจกรรมชุมชน (Activities)</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>กิจกรรม</th>
                    <th>องค์กรผู้รับผิดชอบ</th>
                    <th>พื้นที่ชุมชน</th>
                    <th>วันที่จัด</th>
                    <th>งบประมาณ (บาท)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $act)
                <tr>
                    <td>
                        <strong class="text-primary">{{ $act->title }}</strong><br>
                        <small class="text-muted">{{ $act->description }}</small>
                    </td>
                    <td><span class="badge bg-secondary">{{ $act->organization->name }}</span></td>
                    <td><span class="badge bg-success">{{ $act->community->name }}</span></td>
                    <td>{{ date('d/m/Y', strtotime($act->activity_date)) }}</td>
                    <td class="text-end fw-bold">{{ number_format($act->budget, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection