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
                        <h3 class="text-center"> System Users </h3> 
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Firstname</th>
                                        <th>Othernames</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(!$users->isEmpty())
                                <?php $i = 1 ;?>
                                    <tr>
                                    @foreach($users as $user)
                                        <th id="count-add" scope="row"><?php echo $i++;?></th>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->othernames }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td> 
                                            @if($user->admin == 0)
                                                <span class="label label-success">User</span>
                                            @else
                                                <span class="label label-warning">Admin</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Container-->
    </section>
@endsection 