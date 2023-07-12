<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="google-signin-client_id" content="677870234405-0h1hpespv9ad08s4qrb681l114pis3o7.apps.googleusercontent.com">
</head>
<body>
{{--<div id="my-signin2"></div>--}}
{{--<a  id="loginButton" href="/auth/google/redirect">Login with Google</a>--}}
<a  id="loginButton" href="{{route('google-auth')}}">Login with Google</a>
{{--<script>--}}
{{--    function onSuccess(googleUser) {--}}
{{--        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());--}}
{{--    }--}}
{{--    function onFailure(error) {--}}
{{--        console.log(error);--}}
{{--    }--}}
{{--    function renderButton() {--}}
{{--        gapi.signin2.render('my-signin2', {--}}
{{--            'scope': 'profile email',--}}
{{--            'width': 240,--}}
{{--            'height': 50,--}}
{{--            'longtitle': true,--}}
{{--            'theme': 'dark',--}}
{{--            'onsuccess': onSuccess,--}}
{{--            'onfailure': onFailure--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}

<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>
