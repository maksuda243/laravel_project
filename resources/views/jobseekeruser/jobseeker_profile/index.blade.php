@extends('jobseekeruser.layout.app')

@section('title',trans('Your Profile'))

@section('content')
    <style>
        .emp-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 70%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #0062cc;
        }
        .profile-btn{
            padding:21px 11px;
        }
    </style>



<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                @if($js_profile->image)
                    <img src="{{asset('public/uploads/jobseekerusers/'.$js_profile->image)}}" alt=""/>
                @else
                    <img src="{{asset('public/images/noimage.jpg')}}" alt=""/>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                <h5>{{$js_profile->name}}</h5>
                <h6>{{$js_profile->email}}</h6>
                <h6>136/D,RF Niketon,Muradpur,Chattogram</h6>
                <h6>Cell : 0183546768</h6>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Careeer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Academic</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="profile-work">
                <p>SKILLS</p>
                @php $skills=explode(',',$js_profile->skill); @endphp
                @if(count($skills) > 0 )
                    @foreach($skills as $sk)
                        <a href="#">{{$sk}}</a><br/>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Kshiti123</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Father's Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Kshiti Ghelani</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mother's Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Kshiti Ghelani</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>kshitighelani@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>123 456 7890</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Present Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Permanent Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth </label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender </label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Religion </label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nationality </label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Marital Status </label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>National Id </label>
                                </div>
                                <div class="col-md-6">
                                    <p>gshdjdgj</p>
                                </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Skills</label>
                                </div>
                                <div class="col-md-6">
                                    <p>safsdg,dfdsgfggbsfhf,sgfwsdghfh</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Preferred Job Nature</label>
                                </div>
                                <div class="col-md-6">
                                    <p>dgsghfsh</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Preferred Job level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Preferred Job Organization</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Preferred Job Location</label>
                                </div>
                                <div class="col-md-6">
                                    <p>fafag</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Expected Salary</label>
                                </div>
                                <div class="col-md-6">
                                    <p>fafag</p>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Career Objective</label><br/>
                            <p>Your detail descriptionYour detail descriptionYour detail descriptionYour detail descriptionYour detail description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</div>

@endsection 

  



















{{-- @extends('jobseekeruser.layout.app')

@section('title',trans('Your Profile'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Your Profile</h2>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __("Father's Name") }}</th>
                                <th scope="col">{{ __("Mother's Name") }}</th>
                                <th scope="col">{{ __('Date of Birth') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Gender') }}</th>
                                <th scope="col">{{ __('Religion') }}</th>
                                <th scope="col">{{ __('Nationality') }}</th>
                                <th scope="col">{{ __('Marital Status ') }}</th>
                                <th scope="col">{{ __('National Id ') }}</th>
                                <th scope="col">{{ __('Present Address') }}</th>
                                <th scope="col">{{ __('Permanent Address') }}</th>
                                <th scope="col">{{ __('Contact No.') }}</th>
                                <th scope="col">{{ __('Expected Salary') }}</th>
                                <th scope="col">{{ __('Job Nature') }}</th>
                                <th scope="col">{{ __('Job Level') }}</th>
                                <th scope="col">{{ __('Education') }}</th>
                                <th scope="col">{{ __('Pefferred Job Category') }}</th>
                                <th scope="col">{{ __('Pefferred Organization') }}</th>
                                <th scope="col">{{ __('Pefferred Job Location') }}</th>
                                <th scope="col">{{ __('Skill') }}</th>
                                <th scope="col">{{ __('Image') }}</th>
                                
                                <th class="text-center">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php print_r($js_profile) ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- JavaScript Function to Confirm Deletion -->
<script>
    function deleteUser(userId) {
        if (confirm("Are you sure you want to delete this user?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + userId).submit();
        }
    }
</script>

@endsection --}}
