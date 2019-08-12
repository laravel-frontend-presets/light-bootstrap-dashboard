@extends('layouts.app', ['activePage' => 'upgrade', 'title' => 'LightBootstrap', 'navName' => 'Upgrade', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <div class="card">
                                <div class="header text-center">
                                    <h4 class="title">{{__('Light Bootstrap Dashboard PRO')}}</h4>
                                    <p class="category">{{__('Are you looking for more components? Please check our Premium Version of Light Bootstrap Dashboard.')}}</p>
                                    <br>
                                </div>
                                <div class="content table-responsive table-upgrade">
                                    <table class="table">
                                        <thead>
                                            <th></th>
                                            <th class="text-center">{{__('Free')}}</th>
                                            <th class="text-center">{{__('PRO')}}</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{__('Components')}}</td>
                                                <td>{{__('16')}}</td>
                                                <td>{{__('115+')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Plugins')}}</td>
                                                <td>{{__('4')}}</td>
                                                <td>{{__('14+')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Example Pages')}}</td>
                                                <td>{{__('4')}}</td>
                                                <td>{{__('22+')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Documentation')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td>{{__('SASS Files')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                                    <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Login/Register/Lock Pages')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                                    <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Premium Support')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                                    <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>{{__('Free')}}</td>
                                                <td>{{__('Just $39')}}</td>
                                            </tr>
                                            <tr class="last-row">
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-round btn-fill btn-default disabled">{{__('Current Version')}}</a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro-laravel/?ref=lbdupgrade" class="btn btn-round btn-fill btn-info">{{__('Upgrade to PRO')}}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection