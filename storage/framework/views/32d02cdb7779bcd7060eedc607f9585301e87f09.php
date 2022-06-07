<?php $__env->startSection("contenu"); ?>
    <?php if(session('information')): ?>
        <div class="alert-container-perso bg-gradient-success mb-4">
            <?php echo e(session('information')); ?>

        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 card-header-perso">
            <h6 class="m-0 font-weight-bold text-primary col-xl-5">Liste des métiers</h6>
            <a href="<?php echo e(route('metiers.create')); ?>" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class='bx bx-plus-circle bx-perso'></i>
                                        </span>
                <span class="text">Ajouter</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $metiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($metier->id); ?></td>
                            <td><?php echo e($metier->libelle); ?></td>
                            <td><?php echo e($metier->description); ?></td>
                            <td class="td-perso">
                                <div class="inline-perso">
                                    <form class="form-perso" action="<?php echo e(route('metiers.show', $metier->id)); ?>" method="post">
                                        <?php echo method_field('GET'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                                    </form>

                                    <form class="form-perso" action="<?php echo e(route('metiers.edit', $metier->id)); ?>" method="post">
                                        <?php echo method_field('GET'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                                    </form>

                                    <form class="form-perso" action="<?php echo e(route('metiers.delete', $metier->id)); ?>" method="post">
                                        <?php echo method_field('GET'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn-perso" type="submit" title="Supprimer"><i class='bx bx-trash'></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/metiers/index.blade.php ENDPATH**/ ?>