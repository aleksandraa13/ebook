 @extends('master')
 @section('content')

<!-- section -->

     <div class="section">
         <!-- container -->
         <div class="container">
             <!-- row -->
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-title my-4">

                         <h2>Aktualności</h2>
                         <hr>

                         @if (session('success'))
                             <div class="alert alert-success" role="alert">
                                 {{ session('success') }}
                             </div>
                         @endif
                     </div>
                 </div>


             @foreach($articlese as $k => $article)
                 @if($k<2)
                     <!-- post -->
                         <div class="col-md-6 ">
                             <div class="post post-thumb">
                                 <a class="post-img" href="/article/{{ $article->getId() }}"><img class="max-height" src="{{asset('storage/' .$article->getPhoto())}}?showinfo=0" frameborder="0" alt=""></a>
                                 <div class="post-body">
                                     <div class="post-meta">

                                      <a class="post-category cat-2" href="#">{{$article->getBookstore()->name}}</a>
                                         <span class="post-date">{{Str::limit($article->getDate(),10,$end = '')}}</span>
                                     </div>

                                     <h3 class="post-title"><a href="/article/{{ $article->getId() }}">{{ $article->getTitle() }}</a></h3>
                                 </div>
                             </div>
                         </div>
                         <!-- /post -->

                     @endif
                 @endforeach
             </div>
             <!-- /row -->
             <div class="row">
             @foreach($articlese as $k => $article)
                 @if($k>1)

                     <!-- post -->
                         <div class="col-md-4">
                             <div class="post">
                                 <a class="post-img" href="/article/{{ $article->getId() }}"><img class="max-height" src="{{asset('storage/' .$article->getPhoto())}}?showinfo=0" frameborder="0" alt=""></a>
                                 <div class="post-body">
                                     <div class="post-meta">
                                         <a class="post-category cat-1" href="#">{{$article->getBookstore()->name}}</a>
                                         <span class="post-date">{{Str::limit($article->getDate(),10,$end = '')}}</span>
                                     </div>
                                     <h3 class="post-title"><a href="/article/{{ $article->getId() }}">{{ $article->getTitle() }}</a></h3>
                                 </div>
                             </div>
                         </div>
                         <!-- /post -->
                     @endif
                 @endforeach

                     <div class="mx-auto">
                     {{$allArticlesTwo->links() }}
                    </div>

             </div>
         </div>
     </div>


@stop
