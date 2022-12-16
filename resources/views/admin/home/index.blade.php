@extends('layouts.master_admin')

@section('content')
    @if(!empty($listTotalReport) && is_array($listTotalReport))
        <div class="row">
            @foreach($listTotalReport as $item)
                @if(isset($item['title']) && isset($item['value']))
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ $item['title'] }}
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $item['value'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas {{ $item['icon'] ?? 'fa-user-alt' }} fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
@endsection
