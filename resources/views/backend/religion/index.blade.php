@extends('backend.layouts.app')
@section('title', trans('Religion List'))

@section('content')


<section class="p-3">
    <div class="container">
        <div class="row" id="table-bordered">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ trans('Religion List') }}</h4>
                        <div class="card-header-action">
                            <a href="{{ route('religion.create') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> {{ trans('Add Religion') }}
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
                                        <th class="text-center">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($religion as $r)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $r->name }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('religion.edit', $r->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="deleteReligion('{{ $r->id }}')" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $r->id }}" action="{{ route('religion.destroy', $r->id) }}" method="post" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">{{ __('No Religion Found') }}</td>
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
    function deleteReligion(religionId) {
        if (confirm("Are you sure you want to delete this job nature?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + religionId).submit();
        }
    }
</script>

@endsection
