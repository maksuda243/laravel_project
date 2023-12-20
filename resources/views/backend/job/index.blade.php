@extends('backend.layouts.app')
@section('title', trans('Jobs List'))

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Jobs List</h2>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Employer') }}</th>
                                <th scope="col">{{ __('Service Type') }}</th>
                                <th scope="col">{{ __('No.of.Vacancies') }}</th>
                                <th scope="col">{{ __('Company Name') }}</th>
                                <th scope="col">{{ __('Job Title') }}</th>
                                <th scope="col">{{ __('Industry') }}</th>
                                <th scope="col">{{ __('Job Nature') }}</th>
                                <th scope="col">{{ __('Job Level') }}</th>
                                <th scope="col">{{ __('Organization Type') }}</th>
                                <th scope="col">{{ __('Location') }}</th>
                                <th scope="col">{{ __('Salary') }}</th>
                                <th scope="col">{{ __('Application Date') }}</th>
                                <th scope="col">{{ __('Deadline') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th class="text-center">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($job as $p)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $p->employer?->name }}</td>
                                <td>{{ $p->serviceType?->name }}</td>
                                <td>{{ $p->no_of_vacancies }}</td>
                                <td>{{ $p->employer?->company_name }}</td>
                                <td>{{ $p->job_title }}</td>
                                <td>{{ $p->jobCategory?->name }}</td>
                                <td>{{ $p->jobNature?->name }}</td>
                                <td>{{ $p->jobLevel?->name }}</td>
                                <td>{{ $p->organizationType?->name }}</td>
                                <td>{{ $p->jobLocation?->name }}</td>
                                <td>{{ $p->salary }}</td>
                                <td>{{ $p->application_start_date }}</td>
                                <td>{{ $p->application_deadline }}</td>
                                <td>{{ $p->status?"Approved":"Not Approved" }}</td>
                                <td class="text-center">
                                    <a href="{{ route('job.edit', $p->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="deleteJob('{{ $p->id }}')" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="delete-form-{{ $p->id }}" action="{{ route('job.destroy', encryptor('encrypt', $p->id)) }}" method="post" style="display: none;">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">{{ __('No Job Found') }}</td>
                            </tr>
                            @endforelse
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
    function deleteJob(jobId) {
        if (confirm("Are you sure you want to delete this job post?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + jobId).submit();
        }
    }
</script>

@endsection
