@extends("layout")

@section("header")
<!-- Header - set the background image for the header in the line below -->
<header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
        <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
    </header>
@endsection
@section("content")

    <!-- Content section -->
    <section class="py-5">
        <div class="container">
        <h1>Section Heading</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
        </div>
    </section>

    <!-- Image element - set the background image for the header in the line below -->
    <div class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
        <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
        <div style="height: 200px;"></div>
    </div>

@endsection