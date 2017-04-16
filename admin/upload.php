<?php 

    include_once "includes/header.php"; 

    if (!$session->is_signed_in()) {
        redirect("login.php");
    }
    
    $message = "";

    if ( $_POST['submit']) {

        $photo = new Photo();
        $photo->title = $_POST['title'];
        $photo->set_file( $_FILES['file_upload'] );

        if ( $photo->save() ) {
            $message = "Photo uploaded successfully.";
        }else {
            $message = join("<br>", $photo->errors );
        }

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
                        Upload <small>Statistics Overview</small>
                    </h1>
                    
                    <div class="col-md-6">

                        <?php echo $message; ?>

                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="file" name="file_upload">
                            </div>
                                
                            <input type="submit" name="submit" class="btn btn-default btn-success">

                        </form>
                    </div>

                </div>
            </div>
            <!-- /.row -->


        </div>
        <!-- /.container-fluid -->

<?php include_once "includes/footer.php"; ?>