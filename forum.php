<?php require_once("header.php"); ?>
<?php
$getCategories = $db->prepare("Select * FROM categories");
$getCategories->execute();
$categories = $getCategories->fetchAll();
?>

<div class="container">
<div class="forum">
    <?php foreach ($categories as $category){ ?>
	<div class="row" id="categories">
		<div class="col-md-7"><h4><?=$category['name']?></h4></div>
		<div class="col-md-1"><h4>Topics</h4></div>
		<div class="col-md-1"><h4>Posts</h4></div>
		<div class="col-md-3"><h4>Last Post</h4></div>
	</div>
    
    <?php 
        $getSubCategories = $db->prepare("Select * FROM sub_categories where categories_id = $category[id]");
        $getSubCategories->execute();
        $subCategories = $getSubCategories->fetchAll();
        foreach ($subCategories as $subCategory){
    ?>      
            <div class="row" id="subcategories">
                <div class="col-md-7"><h5><img id="forumPic" src="../img/MBB_backstageforum.jpg"><?=$subCategory['name']?></$?><br></h5>
                <h6><?=$subCategory['description']?></h6></div>
                <div class="col-md-1"><h5>NumOfTopics</h5></div>
                <div class="col-md-1"><h5>NumOfPost</h5></div>
                <div class="col-md-3"><h5>DetailsOfLastPost</h5></div>
            </div>
            <?php if($subCategory === end($subCategories)){
                // do nothing.
            }
            else
            {
            echo"<hr>"; ?>
        <?php } ?>
        <?php } ?>
    <?php if($category === end($categories)){
         // do nothing.   
        }else{ ?>
	<div class="row" id="space">
		<div class="col-md-12"></div>
	</div>
    <?php } ?>
    <?php } ?>
</div>
</div>	
<?php require_once("footer.php"); ?>
