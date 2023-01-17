@extends('frontend.layout.main')

@section('main_section')

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

            @foreach($data as $d)
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="{{url('backend/assets/img/upload/'.$d->photo)}}" alt="">
                        <?php
                        $multi_photo=$d->multi_photo;
                        $multi_photoarr=explode(',',$multi_photo);
                        ?>
                        @foreach($multi_photoarr as $multi_photo)
                            <img src="{{url('backend/assets/img/upload/multi/'.$multi_photo)}}" width="20px" alt="">  
                        @endforeach
                        <!-- Hover Content -->
                        <div class="hover-content">x
                            <div class="line"></div>
                            <h4>{{$d->photo_name}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    
    @endsection
