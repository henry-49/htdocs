 <form action="" method="post">
                                <div class="form-group">
                                   <label for="cat_title"> Edit Category</label>
                                      
                                       <?php // EDIT CATEGORIES QUERY
                                    if(isset($_GET['edit'])){
                                        
                                        $cat_id = $_GET['edit'];
                                        
                                          $query = "SELECT * FROM categories WHERE cat_id= $cat_id ";
                                            $edit_category = mysqli_query($connection, $query);

                                        while($row = mysqli_fetch_assoc($edit_category)){

                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];
                                            
                                            ?>
                                            
                 <input type="text" value="<?php if(isset($cat_title)){ echo $cat_title;} ?>" name="cat_title" class="form-control">
                                    <?php }} ?>
                                      
                                                          
                                    <?php 
                                    // UPDATE QUERY
                                        if(isset($_POST['update_category'])){
                                            $cat_title = $_POST['cat_title'];
                                            $query = "UPDATE categories SET cat_title = '{$cat_title}'";
                                            $query .="WHERE cat_id={$cat_id}";
                                            $update_query = mysqli_query($connection, $query);
                                            // reloads the page 
                                            header("Location: categories.php");
                                            
                                        }
                                    
                                    ?> 
                                                           
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="update_category" value="Update Category"  class="btn btn-success">
                                </div>
                            </form>