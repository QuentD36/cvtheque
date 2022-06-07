<?php $__env->startSection("contenu"); ?>
    <?php if(session('information')): ?>
        <div class="alert-container-perso bg-gradient-success mb-4">
            <?php echo e(session('information')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert-danger-perso is-invalid mb-4 alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <div class="parent mb-3">
        <div class="div1"> Liste des compétences V2 </div>
        <div class="div2"> Recherche intitulé :
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                action="<?php echo e(route('competences.search')); ?>" method="POST">
                <?php echo method_field('GET'); ?>
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small input-search-perso" placeholder="Recherche..."
                           aria-label="Search" aria-describedby="basic-addon2" name="search" <?php if(isset($search)): ?> value="<?php echo e($search); ?>" <?php endif; ?>>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form></div>
    </div>
    <div class="row mb-2">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Intitulé</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $competences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($competence->id); ?></td>
                    <td><?php echo e($competence->intitule); ?></td>
                    <td><?php echo e($competence->description); ?></td>
                    <td class="td-perso">
                        <div class="inline-perso">
                            <form class="form-perso" action="<?php echo e(route('competences.show', $competence->id)); ?>" method="post">
                                <?php echo method_field('GET'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                            </form>

                            <form class="form-perso" action="<?php echo e(route('competences.edit', $competence->id)); ?>" method="post">
                                <?php echo method_field('GET'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                            </form>

                            <a class="dropdown-item dropdown-item-perso" href="#" data-toggle="modal" data-target="#deleteModal">
                                <i class='bx bx-trash'></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="pagination justify-content-center pagination-perso">
            <?php echo e($competences->links()); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/competences/index2.blade.php ENDPATH**/ ?>