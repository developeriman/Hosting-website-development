@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--md  table-responsive">
                        <table class="table table--light style--two">
                            <thead>
                            <tr>
                                <th>@lang('Name')</th>
                                <th>@lang('Product')</th>
                                <th>@lang('Nameserver')</th>
                                <th>@lang('Amount')</th>
                                <th>@lang('Payment Status')</th>
                                <th>@lang('Date')</th>
                            </tr>
                            </thead>
                            <tbody> 
                            @forelse(@$orders as $order)
                                <tr>

                                    <td>
                                        <span class="fw-bold">{{@$order->firstname}}</span>
                                         <p>{{ $order->mobile }}</p>
                                        <p>{{ $order->email }}</p>
                                    </td>  
                              
                                    <td>
                                        {{ $order->product }}
                                        <p>{{ $order->hostname }}</p>
                                        <p>{{ $order->password }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $order->ns1 }}</p>
                                        <p>{{ $order->ns2 }}</p>
                                    </td>
                                    <td>
                                        {{ $general->cur_sym }}{{ showAmount(@$order->amount) }}
                                    </td>

                                    <td>
                                        <span class="fw-bold badge badge--success text-black">Paid</span>
                                    </td>
                                      <td>
                                        {{ showDateTime(@$order->created_at) }} <br> {{ diffForHumans($order->created_at) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table><!-- table end -->
                    </div>
                </div>
                @if ($orders->hasPages())
                    <div class="card-footer py-4">
                        {{ paginateLinks($orders) }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@if(!@$user)
    @push('breadcrumb-plugins')
        <!--<x-search-form dateSearch='yes' placeholder='Username' />-->
    @endpush
@endif
