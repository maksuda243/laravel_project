@extends('backend.layouts.app')
@section('title', trans('Job Nature'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Job Nature List</h2>
                <div class="card-header-action float-right">
                    <a href="{{ route('job-natures.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{ trans('Add Job Nature') }}
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('#SL') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th class="text-center">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($jobNatures as $jobNature)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $jobNature->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('job-natures.edit', $jobNature->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="deleteJobNature('{{ $jobNature->id }}')" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="delete-form-{{ $jobNature->id }}" action="{{ route('job-natures.destroy', $jobNature->id) }}" method="post" style="display: none;">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">{{ __('No Job Nature Found') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Function to Confirm Deletion -->
<script>
    function deleteJobNature(jobNatureId) {
        if (confirm("Are you sure you want to delete this job nature?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + jobNatureId).submit();
        }
    }
</script>

@endsection
