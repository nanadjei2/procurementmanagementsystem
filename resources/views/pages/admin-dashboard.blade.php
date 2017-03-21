@extends("admin-dashboard-master")
@section("title")
    PMS | Admin-Dashboard
@endsection

@section("content")
    <section class="login">
        <div class="container">

                <div class="row m-b-20">
                    <div class="col-xs-12">
                        <h3> Responsive table </h3> 
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company</th>
                                        <th>Country</th>
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
                                        <th scope="row">2</th>
                                        <td>LG Electronics</td>
                                        <td>France</td>
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
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Uber</td>
                                        <td>England</td>
                                        <td> <span class="label label-danger">danger</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Microsoft Inc.</td>
                                        <td>Brazil</td>
                                        <td> <span class="label label-info">info</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Twitter</td>
                                        <td>Argentina</td>
                                        <td> <span class="label label-success">success</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Facebook</td>
                                        <td>USA</td>
                                        <td> <span class="label label-danger">danger</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Tinder</td>
                                        <td>Canada</td>
                                        <td> <span class="label label-warning">warning</span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Apple, Inc.</td>
                                        <td>Germany</td>
                                        <td> <span class="label label-primary">primary</span> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div><!--Container-->
    </section>
@endsection 