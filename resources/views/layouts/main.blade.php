<div id="main" role="main">
    <div id="content-wrapper" class="animated fadeIn">
        @section('error')
            @if (Session::has('warning'))
                <div class="alert alert-warning">
                    <span>{{ trans(Session::get('warning')) }}</span>
                </div><!-- /.alert-warning -->
            @endif
            @if (Session::has('permissionError') || (Session::has('danger')))
                <div class="alert alert-danger">
                    @if (Session::has('permissionError'))
                        <span>User
                                {{-- Only show the username if logged in --}}
                            @if(isset($currentUser->username)) "{{ $currentUser->username }}" @endif
                                does not have access to "{{ Session::get('permissionError') }}".
                            </span>
                        <br>
                        <span>{{ Arca::STATUS_403 }}</span>
                    @elseif (Session::has('danger'))
                        <span>{{ trans(Session::get('danger')) }}</span>
                    @endif
                </div><!-- /.alert-danger -->
            @endif
            @if ($errArray = $errors->all()) @endif
            @if (Session::has('message') || (isset($errArray) && !empty($errArray)))
                <div class="alert alert-info">
                    @if (Session::has('message'))
                        {{ Session::get('message') }}
                    @endif
                    @if (isset($errArray) && !empty($errArray))
                        <h4>Oops:</h4>
                        @if (Session::has('message')) <br> @endif
                        @foreach($errArray as $error)
                            <span>{{ $error }}</span><br>
                        @endforeach
                    @endif
                </div><!-- /.alert-info -->
            @endif
        @show

        @section('body')
        @show

    </div><!-- /#content-wrapper -->
</div><!-- /#main -->
