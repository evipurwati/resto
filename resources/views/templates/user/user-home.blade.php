@extends('templates.user.user-default')

{{-- @push('styles')
    <link rel="stylesheet" href="style.css">
@endpush --}}

@section('content')

<!-- Preview Jobs -->
<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-start text-left mb-5">
            <div class="col-md-9" data-aos="fade">
                <h2 class="font-weight-bold text-black">Recent Jobs</h2>
            </div>
        </div>
        <div class="row" data-aos="fade">
            <div class="col-md-12">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                <div class="mb-4 mb-md-0 mr-5">
                    <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black h4">Frontend Development</h2>
                    <div class="badge-wrap">
                        <span class="bg-primary text-white badge py-2 px-4">Partime</span>
                    </div>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a>
                    </div>
                    <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
                    </div>
                </div>
                <div class="ml-auto">
                    <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span
                        class="icon-heart"></span></a>
                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
  <div class="row mt-5">
    <div class="col-md-12 text-center">
      <div class="site-block-27">
        <ul>
          <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Preview Jobs -->

<!-- Why You Must choose AsosiasiResto -->
<div class="site-section">
    <div class="container">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6" data-aos="fade">
        <h2 class="text-black">Why Job<strong>start</strong> </h2>
        </div>
    </div>
    <div class="row hosting">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">
        <div class="unit-3 h-100 bg-white">
            <div class="d-flex align-items-center mb-3 unit-3-heading">
            <div class="unit-3-icon-wrap mr-4">
                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter"
                    fill="none"
                    d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z">
                </path>
                </svg><span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
            </div>
            <h2 class="h5">Search Millions of Jobs</h2>
            </div>
            <div class="unit-3-body">
            <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis
                dolorem eos.</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">
        <div class="unit-3 h-100 bg-white">
            <div class="d-flex align-items-center mb-3 unit-3-heading">
            <div class="unit-3-icon-wrap mr-4">
                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter"
                    fill="none"
                    d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z">
                </path>
                </svg><span class="unit-3-icon icon fl-bigmug-line-big104"></span>
            </div>
            <h2 class="h5">Location Search</h2>
            </div>
            <div class="unit-3-body">
            <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis
                dolorem eos.</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">
        <div class="unit-3 h-100 bg-white">
            <div class="d-flex align-items-center mb-3 unit-3-heading">
            <div class="unit-3-icon-wrap mr-4">
                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter"
                    fill="none"
                    d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z">
                </path>
                </svg><span class="unit-3-icon icon fl-bigmug-line-airplane86"></span>
            </div>
            <h2 class="h5">Top Careers</h2>
            </div>
            <div class="unit-3-body">
            <p>Lorem ipsum dolor sit amet consectetur is a nice adipisicing elita ssumenda a similique perferendis
                dolorem eos.</p>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Why You Must choose AsosiasiResto -->

<!-- Testimoni starts here -->
<div class="site-section block-4 bg-light">
<div class="container">
  <div class="row justify-content-center text-center mb-5">
    <div class="col-md-6" data-aos="fade">
      <h2 class="text-black">Happy Employers</h2>
    </div>
  </div>
  <div class="nonloop-block-4 owl-carousel" data-aos="fade">
    <div class="item col-md-8 mx-auto">
      <div class="block-38 text-center bg-white p-4">
        <div class="block-38-img">
          <div class="block-38-header">
            <img src="images/person_1.jpg" alt="Image placeholder">
            <h3 class="block-38-heading">Elizabeth Graham</h3>
            <p class="block-38-subheading">Creative Director, XYG Company</p>
          </div>
          <div class="block-38-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
              recusandae doloribus ut fugit officia voluptate soluta. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item col-md-8 mx-auto">
      <div class="block-38 text-center bg-white p-4">
        <div class="block-38-img">
          <div class="block-38-header">
            <img src="images/person_2.jpg" alt="Image placeholder">
            <h3 class="block-38-heading">Jennifer Greive</h3>
            <p class="block-38-subheading">Lead Designer, Mig Company</p>
          </div>
          <div class="block-38-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
              recusandae doloribus ut fugit officia voluptate soluta. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item col-md-8 mx-auto">
      <div class="block-38 text-center bg-white p-4">
        <div class="block-38-img">
          <div class="block-38-header">
            <img src="images/person_1.jpg" alt="Image placeholder">
            <h3 class="block-38-heading">Elizabeth Graham</h3>
            <p class="block-38-subheading">Creative Director, XYG Company</p>
          </div>
          <div class="block-38-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
              recusandae doloribus ut fugit officia voluptate soluta. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item col-md-8 mx-auto">
      <div class="block-38 text-center bg-white p-4">
        <div class="block-38-img">
          <div class="block-38-header">
            <img src="images/person_2.jpg" alt="Image placeholder">
            <h3 class="block-38-heading">Jennifer Greive</h3>
            <p class="block-38-subheading">Lead Designer, Mig Company</p>
          </div>
          <div class="block-38-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio
              recusandae doloribus ut fugit officia voluptate soluta. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Testimoni end here--> --}}
  
@endsection
  