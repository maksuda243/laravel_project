@extends('frontend.layouts.home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>single price plan - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;}
.price_plan_area {
    position: relative;
    z-index: 1;
    background-color: #f5f5ff;
}

.single_price_plan {
    position: relative;
    z-index: 1;
    border-radius: 0.5rem 0.5rem 0 0;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 50px;
    background-color: #ffffff;
    padding: 3rem 4rem;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single_price_plan {
        padding: 3rem;
    }
}
@media only screen and (max-width: 575px) {
    .single_price_plan {
        padding: 3rem;
    }
}
.single_price_plan::after {
    position: absolute;
    content: "";
    background-image: url("https://bootdey.com/img/half-circle-pricing.png");
    background-repeat: repeat;
    width: 100%;
    height: 17px;
    bottom: -17px;
    z-index: 1;
    left: 0;
}
.single_price_plan .title {
    text-transform: capitalize;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 2rem;
}
.single_price_plan .title span {
    color: #ffffff;
    padding: 0.2rem 0.6rem;
    font-size: 12px;
    text-transform: uppercase;
    background-color: #2ecc71;
    display: inline-block;
    margin-bottom: 0.5rem;
    border-radius: 0.25rem;
}
.single_price_plan .title h3 {
    font-size: 1.25rem;
}
.single_price_plan .title p {
    font-weight: 300;
    line-height: 1;
    font-size: 14px;
}
.single_price_plan .title .line {
    width: 80px;
    height: 4px;
    border-radius: 10px;
    background-color: #3f43fd;
}
.single_price_plan .price {
    margin-bottom: 1.5rem;
}
.single_price_plan .price h4 {
    position: relative;
    z-index: 1;
    font-size: 2.4rem;
    line-height: 1;
    margin-bottom: 0;
    color: #3f43fd;
    display: inline-block;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-color: transparent;
    background-image: -webkit-gradient(linear, left top, right top, from(#e24997), to(#2d2ed4));
    background-image: linear-gradient(90deg, #e24997, #2d2ed4);
}
.single_price_plan .description {
    position: relative;
    margin-bottom: 1.5rem;
}
.single_price_plan .description p {
    line-height: 16px;
    margin: 0;
    padding: 10px 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
}
.single_price_plan .description p i {
    color: #2ecc71;
    margin-right: 0.5rem;
}
.single_price_plan .description p .lni-close {
    color: #e74c3c;
}
.single_price_plan.active,
.single_price_plan:hover,
.single_price_plan:focus {
    -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
}
.single_price_plan .side-shape img {
    position: absolute;
    width: auto;
    top: 0;
    right: 0;
    z-index: -2;
}

.section-heading h3 {
    margin-bottom: 1rem;
    font-size: 3.125rem;
    letter-spacing: -1px;
}

.section-heading p {
    margin-bottom: 0;
    font-size: 1.25rem;
}

.section-heading .line {
    width: 120px;
    height: 5px;
    margin: 30px auto 0;
    border-radius: 6px;
    background: #2d2ed4;
    background: -webkit-gradient(linear, left top, right top, from(#e24997), to(#2d2ed4));
    background: linear-gradient(to right, #e24997, #2d2ed4);
}
    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
<section class="price_plan_area section_padding_130_80" id="pricing">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-8 col-lg-6">

<div class="section-heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<h6>Pricing Plans</h6>
<h3>Let's find a way together</h3>
<p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
<div class="line"></div>
</div>
</div>
</div>
<div class="row justify-content-center">

<div class="col-12 col-sm-8 col-md-6 col-lg-4">
<div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="title">
<h3>Basic</h3>
<p>For Small Business Team</p>
<div class="line"></div>
</div>
<div class="price">
<h4>2950.00</h4>
</div>
<div class="description">
<p><i class="lni lni-checkmark-circle"></i>Duration: 1 Month</p>
<p><i class="lni lni-checkmark-circle"></i>10 Features</p>
<p><i class="lni lni-close"></i>No Hidden Fees</p>
<p><i class="lni lni-close"></i>100+ Video Tuts</p>
<p><i class="lni lni-close"></i>No Tools</p>
</div>
<div class="button"><a class="btn btn-success btn-2" href="#">Get Started</a></div>
</div>
</div>

<div class="col-12 col-sm-8 col-md-6 col-lg-4">
<div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

<div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt></div>
<div class="title"><span>Popular</span>
<h3>Premium</h3>
<p>Startup Business</p>
<div class="line"></div>
</div>
<div class="price">
<h4>4300.00</h4>
</div>
<div class="description">
<p><i class="lni lni-checkmark-circle"></i>Duration: 1 Month</p>
<p><i class="lni lni-checkmark-circle"></i>50 Features</p>
<p><i class="lni lni-checkmark-circle"></i>No Hidden Fees</p>
<p><i class="lni lni-checkmark-circle"></i>150+ Video Tuts</p>
<p><i class="lni lni-close"></i>5 Tools</p>
</div>
<div class="button"><a class="btn btn-warning" href="#">Get Started</a></div>
</div>
</div>

<div class="col-12 col-sm-8 col-md-6 col-lg-4">
<div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="title">
<h3>Platinum</h3>
<p>For Enterprise</p>
<div class="line"></div>
</div>
<div class="price">
<h4>13000.00</h4>
</div>
<div class="description">
<p><i class="lni lni-checkmark-circle"></i>Duration: 1 Month</p>
<p><i class="lni lni-checkmark-circle"></i>Unlimited Features</p>
<p><i class="lni lni-checkmark-circle"></i>No Hidden Fees</p>
<p><i class="lni lni-checkmark-circle"></i>Unlimited Video Tuts</p>
<p><i class="lni lni-checkmark-circle"></i>Unlimited Tools</p>
</div>
<div class="button"><a class="btn btn-info" href="#">Get Started</a></div>
</div>
</div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>
@endsection