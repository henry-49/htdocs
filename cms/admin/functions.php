<?php

// comfirmQuery Function
function comfirmQuery($result){
    global $connection;
     if(!$result){
            die("QUERY FAILED ".mysqli_error($connection));
        }
}
// insertCategories Function
function insertCategories(){
    global $connection;
    
     if(isset($_POST['submit'])){
                    $cat_title = $_POST['cat_title'];
                    
                    if($cat_title == "" || empty($cat_title)){
                        
                        echo "<div class='alert alert-warning'>This field must not be empty</div>";
                    }else{
                        
                     $query_cat_title = "INSERT INTO categories(cat_title)";
                     $query_cat_title .="VALUE ('{$cat_title}')";
                        
                $create_cat_query = mysqli_query($connection, $query_cat_title);
                        if(!$create_cat_query){
                            die("Query Failed ".mysqli_error($connection));
                        }
                    }
                    
                   
                }
}

//fineAllCategories Function
function fineAllCategories(){
    global $connection;
 
    
    $query = "SELECT * FROM categories ";
        $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<tr>";       
        echo " <td>{$cat_id}</td>";
        echo " <td>{$cat_title}</td>";
        echo " <td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo " <td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo "</tr>";
    }
}

// Delete Function
function deleteCategories(){
    global $connection;
    
       if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories ";
        $query .="WHERE cat_id={$the_cat_id}";
        $delete_query = mysqli_query($connection, $query);
        // reloads the page 
        header("Location: categories.php");    
    }
}

?>