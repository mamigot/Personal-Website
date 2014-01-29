<?php
//Includes the modal block (button and then listing of all blog posts)
//==============================================================
?>
<!-- View all posts: Button trigger modal (repeated below)-->
<a data-toggle="modal" href="#allPosts" class="btn btn-primary btn-lg">View all posts &raquo;</a>
<!-- Modal -->
<div class="modal fade" id="allPosts" tabindex="-1" role="dialog" aria-labelledby="allPostsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Web development, Start-ups and More</h4>
        <h3 class="modal-title">All Posts</h3>
      </div>
      <div class="modal-body">
        <!-- This is where we want to fetch all posts from the database -->
        <!-- Include blogDbContent.php -->
        <!-- Their links, titles, dates and descriptions -->
        
        <?php
        //Displays modals
        require_once($DOCUMENT_ROOT. 'includes/blogQueriesDb.php');
        echo giveModals();
        ?>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><!-- end of View all posts modal -->