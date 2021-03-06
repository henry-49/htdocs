<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
     <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Admin
                            <small>Author</small>
                        </h1>
             
                        <div class="col-xs-6">
                           
                      <?php 
                        
                           // INSERT CATEGORIES FUNCTION
                            insertCategories();
                        ?>
                            <form action="" method="post">
                                <div class="form-group">
                                   <label for="cat_title">Category Title</label>
                                    <input type="text" name="cat_title" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Add Category"  class="btn btn-primary">
                                </div>
                            </form>
                            
                            <?php 
                                
                            if(isset($_GET['edit'])){
                                
                                $cat_id = $_GET['edit'];
                                
                                include "includes/update_categories.php";
                            }
                            
                            ?>
                        </div>
                        
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                               <theader>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </theader>
                                <tbody>
                                   
                                   <?php // FINE ALL CATEGORIES QUERY
                                    
                                        fineAllCategories();
                                
                                    ?>
                                    
                                    <?php 
                                    // DELETE QUERY
                                     deleteCategories();
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
  