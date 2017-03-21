@extends("admin-dashboard-master")
@section("title")
    PMS | Admin-Dashboard
@endsection

@section("content")
    <section class="login">
        <div class="container">
            <div class="admin-dashboard-table">
                <div class="row m-b-20">
                    <div class="col-xs-12">
                        <h3 class="text-center"> <strong>System Users</strong> </h3> 
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Firstname</th>
                                        <th>Othernames</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Facebook</td>
                                        <td>Mexico</td>
                                        <td> <span class="label label-danger">danger</span> 
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Pinterest</td>
                                        <td>Sweden</td>
                                        <td> <span class="label label-success">success</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Google Inc.</td>
                                        <td>USA</td>
                                        <td> <span class="label label-warning">warning</span> 
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Container-->
    </section>
@endsection 