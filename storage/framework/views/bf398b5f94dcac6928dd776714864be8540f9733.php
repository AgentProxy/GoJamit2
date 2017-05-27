<?php $__env->startSection('details'); ?>

<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" id="post-<?php echo e($post->id); ?>">
        <div class="panel-heading">

             <a href="#" id="delete" class="btn btn-danger pull-right" data-toggle="modal" data-target="#delete-confirm-<?php echo e($post->id); ?>">Delete Post</a>

            <a href="profile/<?php echo e($user->username); ?>/about" ><?php echo e($user->username); ?></a>
            <!-- <a id="delete-post" href="javascript:void(0)" data-pg="<?php echo e($post->id); ?>" class="pull-right btn btn-danger"> Delete Post </button>  -->
        </div>

        <div class="panel-body">
            <div>
                  <?php echo e($post->content); ?>  
            </div>
            <div>
            <?php if($post->filename!='0'): ?> 

                <audio controls>
                  <!-- <source src="horse.ogg" type="audio/ogg"> -->
                  <source src="/user-audios/<?php echo e($post->filename); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            <?php endif; ?>

            <?php if($post->user_id == $user->id): ?>

            <?php endif; ?>
            </div>
        </div>
        <div class="panel-footer clearfix" style="background-color: #fff;">
            <a href="#" class="pull-right"> Like </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete-confirm-<?php echo e($post->id); ?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete Post</h4>
            </div>
            <div class="modal-body">
                <p>
                    Do you really want to delete this post? 
                </p>
            </div>
            <div class="modal-footer">
                <p> <?php echo e($post->id); ?> </p>
                <a id="delete-post" href="javascript:void(0)" data-pg="<?php echo e($post->id); ?>" class="delete-post btn btn-danger" data-dismiss="modal"> Delete Post </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<!--  END OF MODAL -->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    No Posts
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>