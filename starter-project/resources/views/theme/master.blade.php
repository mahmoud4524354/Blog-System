<!DOCTYPE html>
<html lang="en">

@include("theme.partials.head")

<body>
@include("theme.partials.header")

@yield('content')

<!--================ Start Footer Area =================-->
@include("theme.partials.footer")

<!--================ End Footer Area =================-->
@include("theme.partials.scripts")


</body>
</html>
