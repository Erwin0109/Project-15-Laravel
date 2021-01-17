<!-- sidebar -->
<div class="sidebar col-md-2">
    <div class="widget clearfix">
        <h3 class="widget-title">Ayo Belanja Sekarang...</h3>
        <div class="newsletter-widget">
            <form action="{{('filter')}}" method="post" class="form-inline" role="search">
                @csrf
                <div class="form-1">
                    <input type="text" name="nama" value="{{$nama ?? ""}}" class="form-control" placeholder="Cari Produk Anda">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div><!-- end newsletter -->
    </div><!-- end widget -->
    
    <div class="widget clearfix">
        <h3 class="widget-title">Kategori</h3>
        <div class="tags-widget">
            <ul class="list-inline">
                @foreach($list_kategori as $item) 
                <li><a href="#">{{$item->nama}}</a></li>
                @endforeach
            </ul>
        </div><!-- end list-widget -->
    </div><!-- end widget -->

    <div class="widget clearfix">
        <h3 class="widget-title">Rekomendasi Produk</h3>
        <div class="post-widget">
            <div class="media">
                <img src="{{url('public')}}/edulogy/client/upload/blog_small_01.jpg" alt="" class="img-responsive alignleft img-rounded">
                <div class="media-body">
                    <h5 class="mt-0"><a href="blog-single.html">Learning English Like a Pro..</a></h5>
                    <div class="blog-meta">
                        <ul class="list-inline">
                            <li>4 days ago</li>
                            <li><span>by</span> <a href="#">Edulogy Team</a></li>
                        </ul>
                    </div><!-- end blog-meta -->
                </div>
            </div>
        </div><!-- end post-widget -->
    </div><!-- end widget -->
</div>
<!-- end sidebar -->