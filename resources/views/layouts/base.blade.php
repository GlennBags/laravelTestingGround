@include('layouts.head')
<?php if(!isset($currentUser)) {
    $currentUser = auth()->user();
} ?>
<body>
    @include('layouts.header')
    @include('layouts.menu')
    @include('layouts.main')
    @include('layouts.footer')
