<div id="homepage-carousel" class="owl-carousel owl-theme">
@foreach($banners as $banner)
  <div class="item">
    <img class="hidden-xs" src="{{ asset($banner->desktopUrl) }}" alt="{{ $banner->altText }}">
    <img class="visible-xs" src="{{ asset($banner->mobileUrl) }}" alt="{{ $banner->altText }}">
  </div>
  @endforeach
</div>