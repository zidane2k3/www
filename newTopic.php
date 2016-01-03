<?php require_once("header.php"); ?>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="forum">
<div class="newPostBorder">  
    <div class="row" id="title">
        <form>
        <div class="col-md-12">   
                <div class="form-group">         
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
        </div>
    </div>
                <div class="row" id="post">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="post">Post</label>
                            <textarea class="form-control" rows="3" name="post"placeholder="Your content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div> 
            </form>
</div>
</div>
</div>
</div>
<?php require_once("footer.php"); ?>