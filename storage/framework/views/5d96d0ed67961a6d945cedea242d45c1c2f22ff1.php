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
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                     aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Actions :</div>
                    <a class="dropdown-item" href="<?php echo e(route('metiers.edit', $metier->id)); ?>">Modifier</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('metiers.index')); ?>">Retour</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="form-group col-xl-12 col-perso">
                <input type="text" class="form-control form-control-user input-perso"
                       placeholder="Intitulé" value="<?php echo e($metier->libelle); ?>" readonly>
            </div>
            <div class="form-group col-xl-12 col-perso">
                <input type="text" class="form-control form-control-user input-perso"
                       placeholder="Slug" value="<?php echo e($metier->slug); ?>" readonly>
            </div>
            <div class="form-group col-xl-12 col-perso">
                <textarea class="form-control form-control-user input-perso"
                          placeholder="Description" rows="5" cols="50" readonly><?php echo e($metier->description); ?>

                </textarea>
            </div>
            <a href="<?php echo e(route('metiers.index')); ?>" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                <span class="text">Retour</span>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/metiers/show.blade.php ENDPATH**/ ?>