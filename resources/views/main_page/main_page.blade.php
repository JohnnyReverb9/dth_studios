@extends("layouts.app")

@section("content")

    <div>
        <h1 id="user">{{ $user }}</h1>
    </div>

    <script>
        $(document).ready(function() {
            let user = $("#user");

            user.animate({
                fontSize: "3em",
                opacity: 0.5,
                color: "#FF5733"
            }, 2000).animate({
                    fontSize: "2em",
                    opacity: 1,
                    color: "#333"
                }, 2000);

            setInterval(function() {
                user.fadeOut(1000).fadeIn(1000);
            }, 4000);
        });
    </script>

@endsection
