@extends('layouts.app')

@section('content')
 <!-- BANNER -->
    <section class="bannercontainer">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
              @php $counter = 1; @endphp
            @foreach($slider as $slid)
 <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="@if($counter % 2 == 0) 700 @endif" data-title="@if($counter % 2 == 0) Slide 1  @endif">              
 <img src="{{url('public/front/images/slider/'.$slid->imageslide)}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  {{$slid->heading}}
                  <span>{{$slid->sub_title}}</span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  {{$slid->body}}
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="http://goo.gl/lXpsqr" class="btn buttonCustomPrimary">Buy Now</a></span>
                </div>
              </div>
            </li>
            @php $counter++; @endphp
            @endforeach
          </ul>
        </div>
      </div>
    </section>
@endsection
