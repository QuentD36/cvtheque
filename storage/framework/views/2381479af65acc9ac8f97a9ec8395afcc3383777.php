<?php $__env->startSection("contenu"); ?>
    <?php if(session('information')): ?>
        <div class="alert-container-perso bg-gradient-success mb-4">
            <?php echo e(session('information')); ?>

        </div>
    <?php endif; ?>

    <div class="row mb-2">
        Liste des professionnels v2

        <div class="col-xl-6">
            <select onchange="location.href=this.value" name="filtre" id="filtre">
                <option value="<?php echo e(route('professionnels.v2')); ?>" <?php if (! ($slug)): ?> selected <?php endif; ?>>
                    Tous les métiers
                </option>

                <?php $__currentLoopData = $metiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(route('professionnels.metier2',['slug' => $metier->slug])); ?>"
                        <?php echo e($slug == $metier->slug ? 'selected' : ''); ?>>
                        <?php echo e($metier->libelle); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <div class="row mb-2">
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
            <?php $__empty_1 = true; $__currentLoopData = $professionnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professionnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($professionnel->id); ?></td>
                    <td><?php echo e($professionnel->prenom); ?> <?php echo e($professionnel->nom); ?></td>
                    <td><?php echo e($professionnel->metier->libelle); ?></td>
                    <td><?php echo e($professionnel->cp); ?> - <?php echo e($professionnel->ville); ?></td>
                    <td>
                        <?php if($professionnel->formation == 1): ?>
                            Oui
                        <?php else: ?>
                            Non
                        <?php endif; ?>
                    </td>
                    <td class="td-perso">
                        <div class="inline-perso">
                            <form class="form-perso" action="<?php echo e(route('professionnels.show', $professionnel->id)); ?>" method="post">
                                <?php echo method_field('GET'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                            </form>
                            <form class="form-perso" action="<?php echo e(route('professionnels.edit', $professionnel->id)); ?>" method="post">
                                <?php echo method_field('GET'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                            </form>
                            <form class="form-perso" action="<?php echo e(route('professionnels.destroy', $professionnel->id)); ?>" method="post">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn-perso" type="submit" title="Supprimer"><i class='bx bx-trash'></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>
                        Il n'y a pas de professionnel correspondant à votre demande !
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <div class="pagination justify-content-center pagination-perso">
                <?php echo e($professionnels->links()); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/professionnels/index2.blade.php ENDPATH**/ ?>