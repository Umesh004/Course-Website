

<?php $__env->startSection('content'); ?>
    <b-container>
        <section>
            <b-jumbotron>
                <template v-slot:header><?php echo e($series->title); ?></template>
                <template v-slot:lead>
                    <?php echo e($series->description); ?>

                </template>
                <hr class="my-4">
                <b-button variant="primary" href="#">Start Services</b-button>
                <b-button variant="success" href="#">Subscribe</b-button>
            </b-jumbotron> 
        </section>
        <section class="mb-5">
            <h3 class="mb-3 text-center">Episodes</h3>
                <episodes :videos="<?php echo e($series->videos); ?>"></episodes>
        </section>
    </b-container>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Project\resources\views/front/series/show.blade.php ENDPATH**/ ?>