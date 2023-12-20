@extends('jobseekeruser.layout.app')
@section('title','Dashboard')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                {{-- <h2>Jobseeker Dashboard</h2> --}}
            </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('#SL') }}</th>
                                    <th scope="col">{{ __('Company Name') }}</th>
                                    <th scope="col">{{ __('Company Email') }}</th>
                                    <th scope="col">{{ __('Company Contact') }}</th>
                                    <th scope="col">{{ __('Job Title') }}</th>
                                    <th scope="col">{{ __('Apply Date') }}</th>
                                    <th scope="col">{{ __('Seen') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($applied as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{$p->employer?->company_name}}</td>
                                    <td>{{$p->employer?->email}}</td>
                                    <td>{{$p->jobseeker?->contact_no}}</td>
                                    <td>{{$p->job?->job_title}}</td>
                                    <td>{{\Carbon\Carbon::parse($p->created_at)->format('d/m/y h:mA')}}</td>
                                    <td>{{$p->seen?"Seen":"Not Seen"}}</td>
                                    <td>
                                        @if($p->status==0)
                                            Pending
                                        @elseif ($p->status==1)
                                            Waiting
                                        @elseif ($p->status==2)
                                            Not Accepted
                                        @else
                                            Call For interview
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a class="text-dark" href="{{ route('appliedJob_edit', encryptor('encrypt', $p->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
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


