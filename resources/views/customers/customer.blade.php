@extends('layouts.app')

@section('title',__('Customer Form'))

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Customer Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="customer_full_name" class="col-md-3 col-form-label text-md-right">{{ __('Customer Full Name') }}</label>

                                <div class="col-md-7">
                                    <input id="customer_full_name" type="text" class="form-control" name="customer_full_name" value="{{-- old('name') --}}" required autocomplete="full name" autofocus>

                                 {{--   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer_address" class="col-md-3 col-form-label text-md-right">{{ __('Customer Address') }}</label>

                                <div class="col-md-7">
                                    <input id="customer_address" type="text" class="form-control" name="customer_address" value="{{-- old('address') --}}" required autocomplete="address">

                                 {{--   @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact_number" class="col-md-3 col-form-label text-md-right">{{ __('Customer Contact Number') }}</label>

                                <div class="col-md-7">
                                    <input id="contact_number" type="text" class="form-control" name="contact_number" required autocomplete="contact number">

                                   {{-- @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="working_at" class="col-md-3 col-form-label text-md-right">{{ __('Working At') }}</label>

                                <div class="col-md-7">
                                    <input id="working_at" type="text" class="form-control" name="working_at" required autocomplete="working at">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_of_birth" class="col-md-3 col-form-label text-md-right">{{__('Date of Birth')}}</label>

                                <div class="col-md-7">
                                    <input id="dob" type="date" class="form-control" name="date_of_birth">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 text-md-right">{{__('Customer Gender')}}</label>
                                <div class="form-check  text-md-right ml-3">
                                    <input type="radio" class="form-check-input" id="male" name="customer_gender" value="{{__('Male')}}" checked>
                                </div>
                                    <label class="col-md-2 form-check-label text-md-left" for="male">Male</label>

                                <div class="form-check  text-md-right">
                                    <input type="radio" class="form-check-input" id="female" name="customer_gender" value="{{__('Female')}}">
                                </div>
                                    <label class="col-md-2 form-check-label text-md-left" for="female" >Female</label>
                            </div>

                            <div class="form-group row">
                                <label for="balance" class="col-md-3 text-md-right">{{__('Balance')}}</label>
                                <div class="col-md-7">
                                    <input id="balance" type="text" class="form-control" name="balance" required autocomplete="balance">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="favoraited_contact_method" class="col-md-3 text-md-right">{{__('Favoraited Contact Method')}}</label>
                                <div class="col-md-7">
                                    <select name="favoraited_contact_method" class="form-control" id="fcn">
                                        @foreach($contact_methods as $key => $contact_method)
                                            <option value="{{$contact_method}}">{{__($contact_method)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add new customer') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                       {{--<table class="table no-min-height">--}}
                        <div class="row">
                                <div class="text-md-center col-md-3">Customer Name</div>
                                <div class="text-md-center col-md-3">Contact Number</div>
                                <div class="text-md-center col-md-3">Work</div>
                                <div class="text-md-center col-md-3">Contact Method</div>
                        </div>
                        {{--</table>--}}
                    </div>
                    <div class="card-body">

                            <table class="table">
                                @foreach($customers as $customer)
                                    <tr class="clickable" data-action="{{route('c_panel.index')}}">
                                    <td class="text-md-center" width="30%">{{$customer->customer_full_name}}</td>
                                    <td class="text-md-center" width="20%">{{$customer->contact_number}}</td>
                                    <td class="text-md-center" width="30%">{{$customer->working_at}}</td>
                                    <td class="text-md-center" width="20%">{{$customer->favoraited_contact_method}}</td>
                                    </tr>
                                @endforeach
                            </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

