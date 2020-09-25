@extends('layouts.app', ['activePage' => 'upgrade', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Upgrade', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <div class="card">
                                <div class="header text-center">
                                    <h4 class="title">{{ __('Light Bootstrap Dashboard')}}</h4>
                                    <p class="category">{{ __('Are you looking for more components? Please check our Premium Version of Light Bootstrap Dashboard Laravel.')}}</p>
                                    <br>
                                </div>
                                <div class="content table-responsive table-upgrade">
                                    <table class="table">
                                        <thead>
                                            <th></th>
                                            <th class="text-center">{{ __('Free')}}</th>
                                            <th class="text-center">{{ __('PRO')}}</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><h3 class="mb-0 mt-0">Laravel</h3></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                            </tr>
                                            <tr>
                                                <td>Login, Register, Forgot password pages</td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>User profile</td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Users management</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>User roles management </td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Items management </td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Categories management, Tags management </td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Image upload, date picker inputs</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Radio button, checkbox, toggle inputs</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                <td><i class="fa fa-check text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td><h3 class="mb-0 mt-0">Frontend</h3></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Components')}}</td>
                                                <td>{{ __('16')}}</td>
                                                <td>{{ __('115+')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Plugins')}}</td>
                                                <td>{{ __('4')}}</td>
                                                <td>{{ __('14+')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Example Pages')}}</td>
                                                <td>{{ __('7')}}</td>
                                                <td>{{ __('22+')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('SASS Files')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                                    <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Login/Register/Lock Pages')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                                    <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Premium Support')}}</td>
                                                <td><i class="fa fa-times text-danger"></i></td>
                                                                    <td><i class="fa fa-check text-success"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>{{ __('Free')}}</td>
                                                <td>{{ __('Just $149')}}</td>
                                            </tr>
                                            <tr class="last-row">
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn btn-round btn-fill btn-default disabled">{{ __('Current Version')}}</a>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro-laravel" class="btn btn-round btn-fill btn-info">{{ __('Upgrade to PRO') }}</a>
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