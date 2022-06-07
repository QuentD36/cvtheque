<?php $__env->startSection("contenu"); ?>
    <?php if(session('information')): ?>
        <div class="alert-container-perso bg-gradient-success mb-4">
            <?php echo e(session('information')); ?>

        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e($titreSecondaire); ?></h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" action="<?php echo e(route('competences.store')); ?>">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['intitule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Intitulé" value="<?php echo e(old('intitule')); ?>" name="intitule">
                    <?php $__errorArgs = ['intitule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group col-xl-12 col-perso">
                <textarea class="textarea-perso form-control form-control-user <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="5" cols="50" name="description" placeholder="Description"><?php echo e(old('description')); ?></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-xl-6 col-perso">
                    <a href="<?php echo e(route('competences.index')); ?>" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                        <span class="text">Retour</span>
                    </a>

                    <button class="btn btn-info btn-info-perso" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/competences/create.blade.php ENDPATH**/ ?>