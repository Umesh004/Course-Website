

<?php $__env->startSection('content'); ?>
    <b-container>
        <section>
            <h2>Video Player</h2>
            <b-breadcrumb :items="<?php echo e(json_encode($breadCrumbs)); ?>"></b-breadcrumb>
            <video-player :video="<?php echo e($video); ?>" next-video-url="<?php echo e($nextVideoUrl); ?>"
            ></video-player>
        </section>
        
        <section class="mb-5 pt-5 text-center">
            <a href="#" class="text-decoration-none" style="color:black">
                <b-card  class="mb-2" no-body class="overflow-hidden">
                    <b-row no-gutters>
                        <b-col>
                            <h3 class="pt-3"><strong>About this Episode</strong></h3>

                            <b-card-body title="<?php echo e($video->title); ?>">
                                <b-card-text>
                                    <?php echo e($video->description); ?>

                                </b-card-text>
                            </b-card-body>
                        </b-col>
                    </b-row>
                </b-card>
            </a>

        </section>
        <section class="mb-5">
            <h3 class="mb-3 text-center">Episodes</h3>
                <episodes :videos="<?php echo e($series->videos); ?>"></episodes>
        </section>
    </b-container>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Project\resources\views/front/series/video.blade.php ENDPATH**/ ?>