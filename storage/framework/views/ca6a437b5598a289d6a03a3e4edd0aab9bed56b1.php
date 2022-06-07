<?php $__env->startSection("contenu"); ?>
    <?php if(session('information')): ?>
        <div class="alert-container-perso bg-gradient-success mb-4">
            <?php echo e(session('information')); ?>

        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 card-header-perso">
            <div class="col-xl-6 col-perso">
                <h6 class="m-0 font-weight-bold text-primary col-xl-5">Resultat de la recherche</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prénom Nom</th>
                        <th>Métiers</th>
                        <th>Code postal - Ville</th>
                        <th>Formation</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>


                    <?php $__currentLoopData = $professionnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professionnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $professionnel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($pro->id); ?></td>
                                <td><?php echo e($pro->prenom); ?> <?php echo e($pro->nom); ?></td>
                                <td><?php echo e($pro->metier->libelle); ?></td>
                                <td><?php echo e($pro->cp); ?> - <?php echo e($pro->ville); ?></td>
                                <td>
                                    <?php if($pro->formation == 1): ?>
                                        Oui
                                    <?php else: ?>
                                        Non
                                    <?php endif; ?>
                                </td>
                                <td class="td-perso">
                                    <div class="inline-perso">
                                        <form class="form-perso" action="<?php echo e(route('professionnels.show', $pro->id)); ?>" method="post">
                                            <?php echo method_field('GET'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                                        </form>

                                        <form class="form-perso" action="<?php echo e(route('professionnels.edit', $pro->id)); ?>" method="post">
                                            <?php echo method_field('GET'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                                        </form>

                                        <form class="form-perso" action="<?php echo e(route('professionnels.destroy', $pro->id)); ?>" method="post">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="btn-perso" type="submit" title="Supprimer"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/competences/proByComp.blade.php ENDPATH**/ ?>