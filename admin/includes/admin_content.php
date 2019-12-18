<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                            $user = new User();
                            $user->username = "Example_username3";
                            $user->password = "Example_password3";
                            $user->first_name = "Example_first_name3";
                            $user->last_name = "Example_last_name3";

                            $user->create();

                            
                            // $user = User::find_user_by_id(5);
                            // $user->last_name = "WilliamsNo";

                            // $user->update();

                            // $user = User::find_user_by_id(0);
                            // $user->delete();

                            // $user = User::find_user_by_id(0);
                            // $user->password= "Santa";
                            // $user->save();

                            // $user = new User();
                            // $user->username = "New 2020";
                            // $user->save();
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