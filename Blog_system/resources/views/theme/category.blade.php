@extends('theme.master')

@section('title','Category')

@section('categories-active','active')

<!--================ Start Blog Post Area =================-->
@section('content')
    @include('theme.partials.hero',['title'=> $categoryName])

    <section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    @if( isset($blogs) && count($blogs) > 0)
                    @foreach($blogs as $blog)
                    <div class="col-md-6">
                        <div class="single-recent-blog-post card-view">
                            <div class="thumb">
                                <img class="card-img rounded-0" src="{{ asset('storage') }}/blogs/{{$blog->image}}" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i>{{$blog->user->name}}</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="{{route('blogs.show',['blog'=>$blog])}}">
                                    <h3>{{$blog->name}}</h3>
                                </a>
                                <p>{{$blog->description}}</p>
                                <a class="button" href="{{route('blogs.show',['blog'=>$blog])}}">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif
                </div>


                <div class="row">
                    <div class="col-lg-12">

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                {{ $blogs->render('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            @include('theme.partials.siddebar')

        </div>
    </div>
</section>
@endsection
<!--================ End Blog Post Area =================-->


