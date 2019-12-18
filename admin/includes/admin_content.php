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
                            // $user->username = "Example_username4";
                            // $user->password = "Example_password4";
                            // $user->first_name = "Example_first_name4";
                            // $user->last_name = "Example_last_name4";

                            // $user->create();

                            
                            // $user = User::find_user_by_id(5);
                            // $user->last_name = "WilliamsNoNo";

                            // $user->update();

                            // $user = User::find_user_by_id(0);
                            // $user->delete();

                            // $user = User::find_user_by_id(0);
                            // $user->password= "Santa";
                            // $user->save();

                            // $user = new User();
                            // $user->username = "New user";
                            // $user->save();

                            // $users = User::find_all();

                            // foreach ($users as $user) {
                            //     echo $user->username;
                            // }

                            // $photos = Photo::find_all();

                            // foreach ($photos as $photo) {
                            //     echo $photo->title;
                            // }

                            $photos = new Photo();
                            $photos->title = "Example1";
                            $photos->size = 20;
                            
                            $photos->create();
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