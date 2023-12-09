@extends('backend.layouts.app')
@section('title', trans('Posted Job List'))

@section('content')

<!-- Enhanced Bordered table -->
<section class="p-3">
    <div class="container">
     <div class="row" id="table-bordered">
        <div class="col-lg-10 offset-lg-2">
            <div class="card">
                <div class="card-header">
                    <h4>{{ trans('Posted Job List') }}</h4>
                    <div class="card-Posted Job Listheader-action">
                        <a href="{{ route('job_post.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> {{ trans('Post New Job') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('#SL') }}</th>
                                    <th scope="col">{{ __('Employer ID') }}</th>
                                    <th scope="col">{{ __('Service Type') }}</th>
                                    <th scope="col">{{ __('No. of Vacancies') }}</th>
                                    <th scope="col">{{ __('Job Title') }}</th>
                                    <th scope="col">{{ __('Industry') }}</th>
                                    <th scope="col">{{ __('Job Nature') }}</th>
                                    <th scope="col">{{ __('Job Level') }}</th>
                                    <th scope="col">{{ __('Organization Type') }}</th>
                                    <th scope="col">{{ __('Location') }}</th>
                                    <th scope="col">{{ __('Salary') }}</th>
                                    <th scope="col">{{ __('Requirment') }}</th>
                                    <th scope="col">{{ __('Special Instruction') }}</th>
                                    <th scope="col">{{ __('Application Start Date') }}</th>
                                    <th scope="col">{{ __('Application Deadline') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->employer_id }}</td>
                                    <td>{{ $p->service_type}}</td>
                                    <td>{{ $p->no_of_vacancies }}</td>
                                    <td>{{ $p->job_title }}</td>
                                    <td>{{ $p->job_categories}}</td>
                                    <td>{{ $p->job_nature}}</td>
                                    <td>{{ $p->job_level}}</td>
                                    <td>{{ $p->organization_type}}</td>
                                    <td>{{ $p->location}}</td>
                                    <td>{{ $p->salary}}</td>
                                    <td>{{ $p->requirment}}</td>
                                    <td>{{ $p->special_instruction}}</td>
                                    <td>{{ $p->special_instruction}}</td>
                                    <td>{{ $p->application_start_date}}</td>
                                    <td>{{ $p->application_deadline}}</td>
                                   
                                    <td class="text-center">
                                        <a href="{{ route('job_post.edit', encryptor('encrypt', $p->id)) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteUser('{{ $p->id }}')" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $p->id }}" action="{{ route('job_post.destroy', encryptor('encrypt', $p->id)) }}" method="post" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">{{ __('No jobpost Found') }}</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
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
