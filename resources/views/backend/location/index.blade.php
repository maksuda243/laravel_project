@extends('backend.layouts.app')
@section('title', trans('Location List'))

@section('content')


<section class="p-3">
    <div class="container">
        <div class="row" id="table-bordered">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ trans('Location List') }}</h4>
                        <div class="card-header-action">
                            <a href="{{ route('location.create') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> {{ trans('Add Location') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('#SL') }}</th>
                                        <th scope="col">{{ __('Name') }}</th>
                                        <th scope="col">{{ __('Areas') }}</th>
                                        <th class="text-center">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($location as $location)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $location->name }}</td>
                                        <td>{{ $location->covered_area }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('location.edit', $location->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="deleteLocation('{{ $location->id }}')" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $location->id }}" action="{{ route('location.destroy', $location->id) }}" method="post" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">{{ __('No Location Found') }}</td>
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
    function deleteJobNature(jobNatureId) {
        if (confirm("Are you sure you want to delete this job nature?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + jobNatureId).submit();
        }
    }
</script>

@endsection
