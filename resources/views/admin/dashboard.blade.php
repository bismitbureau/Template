@extends('admin.layout.master')

@section('sidebar')
<li id="nav-info" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-info"></i>
        <span>Information</span>
    </a>
</li>
<li id="nav-profile" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-users"></i>
        <span>Profil</span>
    </a>
</li>
<li id="nav-article" class="nav-item">
    <a class="nav-link" href="{{ route('admin.articles.index') }}">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Artikel</span>
    </a>
</li>
<li id="nav-media" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-music"></i>
        <span>Ruang Estetika</span>
    </a>
</li>
@endsection

@section('counter-notification', 1)
@section('counter-message', 1)

@section('content')
@yield('actions')
@yield('dashboard-content')

<!-- Sticky Footer -->
<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright © BismitRevolution 2018</span>
        </div>
    </div>
</footer>
</div>
<!-- /.content-wrapper -->
@endsection
