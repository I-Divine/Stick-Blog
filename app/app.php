<?php
    
    function getBlogs($conn){
        $query = "SELECT * FROM blogs";
        $result = mysqli_query($conn , $query);
        $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($blogs);

        return $blogs;
    }

    