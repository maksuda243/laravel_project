@extends('backend.layouts.app')
@section('title', trans('Subscription Plan List'))

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Subscription List</h2>
                <div class="card-header-action float-right">
                    <a href="{{ route('subscription.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{ trans('Add Subscription Plan') }}
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
                                        <th scope="col">{{ __('Description') }}</th>
                                        <th scope="col">{{ __('Duration_Month') }}</th>
                                        <th scope="col">{{ __('Price') }}</th>
                                        <th class="text-center">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($subscription as $subscription)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $subscription->name }}</td>
                                        <td>{{ $subscription->description }}</td>
                                        <td>{{ $subscription->duration }}</td>
                                        <td>{{ $subscription->price }}</td>
                                      
                                        <td class="text-center">
                                            <a href="{{ route('subscription.edit', $subscription->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="deleteJobLevel('{{ $subscription->id }}')" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $subscription->id }}" action="{{ route('subscription.destroy', $subscription->id) }}" method="post" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">{{ __('No Subscription Plan Found') }}</td>
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
</div>

<!-- JavaScript Function to Confirm Deletion -->
<script>
    function deleteJobLevel(jobLevelId) {
    if (confirm("Are you sure you want to delete this job level?")) {
        event.preventDefault();
        document.getElementById('delete-form-' + jobLevelId).submit();
    }
}
</script>

@endsection
