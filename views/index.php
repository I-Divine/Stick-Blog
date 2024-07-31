<?php 

    require "../app/app.php";
    require "../app/db_connection.php";
    $blogs = getBlogs($conn) ?? null;

    

?>
<?php require_once("./templates/head.php") ?>
<!-- body goes here -->
 <section class=" p-8">
    <?php foreach($blogs as $blog):?>
        <div class=" my-4">
            <h3 class=" text-red-400 text-3xl">
                 <?php 
            $heading = htmlspecialchars($blog['heading']) ?? "";
            echo $heading ;
            ?>
            </h3>
            <p class="text-lg font-normal text-neutral-700 ">
                 <?php 
            $content = htmlspecialchars($blog['content']) ?? "An error occurred";
            echo strlen($content) < 200 ? $content : substr($content, 0, 300) //trimming preview text
            ?>
            </p>
           
        </div>
        <?php endforeach ?>
 </section>
<?php require_once("./templates/footer.php") ?>