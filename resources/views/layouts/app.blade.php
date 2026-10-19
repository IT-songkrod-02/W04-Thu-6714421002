<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ระบบบริหารจัดการโครงการชุมชน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"> Community System</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('activities.index') }}"> activities (กิจกรรม)</a>
                <a class="nav-link" href="{{ route('organizations.index') }}"> organization (องค์กร)</a>
                <a class="nav-link" href="{{ route('communities.index') }}"> community (ชุมชน)</a>
                <a class="nav-link" href="{{ route('staff.index') }}"> staff (เจ้าหน้าที่)</a>
                <a class="nav-link" href="{{ route('titles.index') }}"> title (คำนำหน้า)</a>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>