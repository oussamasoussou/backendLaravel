@extends('backEnd.layouts.app')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-3">
                    <div class="card-options d-inline-block">
                        <a href="#"><i class="ik ik-inbox"></i></a>
                        <a href="#"><i class="ik ik-plus"></i></a>
                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                        <div class="dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">More Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="card-search with-adv-search dropdown">
                        <form action="">
                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required>
                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Name" data-column="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Position" data-column="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Office" data-column="2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Age" data-column="3">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Start date" data-column="4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control column_filter" id="col5_filter" placeholder="Salary" data-column="5">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-theme">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <div class="card-options text-right">
                        <button type="button" class="btn btn-success btn-rounded">Ajouter Carousel</button>

                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body p-0 table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>
                                                <table style="border: none !important;">
                                                    <tr>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-success"><i class="ik ik-eye"></i></button>
                                                        </td>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-primary"><i class="ik ik-edit"></i></button>
                                                        </td>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>
                                                <table style="border: none !important;">
                                                    <tr>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-success"><i class="ik ik-eye"></i></button>
                                                        </td>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-primary"><i class="ik ik-edit"></i></button>
                                                        </td>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>
                                                <table style="border: none !important;">
                                                    <tr>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-success"><i class="ik ik-eye"></i></button>
                                                        </td>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-primary"><i class="ik ik-edit"></i></button>
                                                        </td>
                                                        <td style="border: none !important;">
                                                            <button type="button" class="btn btn-icon btn-outline-danger"><i class="ik ik-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                </table>
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