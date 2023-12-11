@extends('jobseekeruser.layout.app')

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

@endsection
