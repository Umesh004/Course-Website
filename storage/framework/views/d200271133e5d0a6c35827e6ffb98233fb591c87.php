

<?php $__env->startSection('content'); ?>
        <div class="container">
                <section>
                       <div>
                           <b-jumbotron header="Online Learning Website" lead="Learn Computer Science Courses for free!!">
                                   <p>For more info Browse through courses</p>
                                   <b-button variant="primary" href="<?php echo e(route('series.index')); ?>">Browse Course</b-button>
                           </b-jumbotron>
                       </div> 
                </section>

        </div>
        <section>
        <div>
  <b-card-group>
    <?php $__currentLoopData = $featuredSeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <b-card title="<?php echo e($series->title); ?>" img-src="fullstackimg.png" width="200" height="200" img-alt="Image" img-top>
      <b-card-text>
        <?php echo e($series->description); ?>

      </b-card-text>
      <template #footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </b-card-group>
</div>
        </section>

        <pricing></pricing>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Project\resources\views/front.blade.php ENDPATH**/ ?>