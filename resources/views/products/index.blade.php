@extends('layouts.master')

@section('title')
	Products List
@endsection

@section('body')

<!-- *** LOGIN MODAL *** -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Category with left sidebar</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Category with left sidebar</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">


                    <!-- *** LEFT COLUMN *** -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS *** -->

                        @include('layouts.sidebar')
 
                        <!-- *** MENUS AND FILTERS END *** -->

                        <div class="banner">
                            <a href="shop-category.html">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                        <!-- /.banner -->

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN *** -->

                    <div class="col-sm-9">

                        @forelse($products as $product)
                    
                        <div class="col-md-12" id="blog-listing-medium">
                            <section class="post" style="background-color: #e6e6e6; padding: 4px;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="image">
                                            <a href="blog-post.html">
                                                <img src="img/blog-medium.jpg" class="img-responsive" alt="Example blog post alt">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="border-right:solid white 1px;">
                                        <h2><a href="post.htmls">{{ $product->name}}</a></h2>
                                        <div class="clearfix">
                                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                            </p>
                                            <p class="date-comments">
                                                <a href="blog-post.html"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                                                <a href="blog-post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                                            </p>
                                        </div>
                                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>SM 800.00</p>
                                        <p>Puregold 820</p>
                                        <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a></p>
                                    </div>
                                </div>
                            </section>
                        </div>

                         @empty
                            No articles.
                        @endforelse

                        <div class="row">

                            <div class="col-md-12 banner">
                                <a href="#">
                                    <img src="img/banner2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>

                        </div>


                        <div class="pages">

                            <p class="loadMore">
                                <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                            </p>

                            {{ $products->links() }}

                        </div>


                    </div><!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div><!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT *** -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Do you want cool website like this one?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->
@endsection