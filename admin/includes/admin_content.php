<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                            // $user = new User();
                            // $user->username = "Example_username";
                            // $user->password = "Example_password";
                            // $user->first_name = "Example_first_name";
                            // $user->last_name = "Example_last_name";

                            // $user->create();

                            $user = User::find_user_by_id(6);
                            $user->last_name = "Williams";

                            $user->update();
                        ?>



                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

    </div>
            <!-- /.container-fluid -->