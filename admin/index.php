<?php include_once "includes/header.php"; ?>

<?php 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }

?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once "includes/top_nav.php"; ?>

        <?php include_once "includes/sidebar_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <?php 

                    // $user = User::find_user_by_id(4);

                    // $user->delete();

                    // $user = User::find_user_by_id(4);

                    // $user->username = "ashik";
                    // $user->first_name = "Habibur";
                    // $user->last_name = "Rahman";
                    // $user->save(); 

                    // $user = new User();

                    // $user->username = "Suave";
                    // $user->save();

                    
                    // $user = new User();

                    // $user->username = "kazi";
                    // $user->password = "passw";
                    // $user->first_name = "Sudipto";
                    // $user->last_name = "Sahin";

                    // $user->create();


                    // $user = User::find_user_by_id(7);

                    // $user->username = "kaji";
                    // $user->password = "pass";
                    // $user->first_name = "Sodipto";
                    // $user->last_name = "Saheen";

                    // $user->update();

                    // $users = User::find_all();

                    // foreach ( $users as $user ) {
                    //     echo $user->username;
                    // }

                    // $photos = Photo::find_all();
 
                    // foreach ($photos as $photo ) {
                    //     echo $photo->title;
                    // }

                    // $photo = new Photo();

                    // $photo->title = "Just some test title";
                    // $photo->size = 20;

                    // $photo->create();

                    echo INCLUDES_PATH;


                ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

<?php include_once "includes/footer.php"; ?>