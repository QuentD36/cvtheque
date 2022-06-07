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


                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('professionnels.index')); ?>">Retour</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" action="<?php echo e(route('professionnels.store')); ?>">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>


                <div class="form-group col-xl-12 col-perso">
                    <input class="input-perso form-control form-control-user" type="text" name="metier" value="<?php echo e($professionnel->metier->libelle); ?>" readonly>

                    <div class="radio-container offset-xl-2">
                        Activité de formation déjà effectuée ?
                        <div class="radio-content custom-radio">
                            <?php if($professionnel->formation == 1): ?> Oui <?php else: ?> Non <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Nom" value="<?php echo e($professionnel->nom); ?>" name="nom" readonly>
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Prénom" value="<?php echo e($professionnel->prenom); ?>" name="prenom" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="date" class="input-perso form-control form-control-user"
                           placeholder="Date de naissance" value="<?php echo e($professionnel->naissance); ?>"
                           name="naissance" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Code postal" value="<?php echo e($professionnel->cp); ?>" name="cp" readonly>
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Ville" value="<?php echo e($professionnel->ville); ?>" name="ville" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="tel" class="input-perso form-control form-control-user"
                           placeholder="Téléphone" value="<?php echo e($professionnel->telephone); ?>" name="telephone" readonly>
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="E-mail" value="<?php echo e($professionnel->email); ?>" name="email" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <div class="checkbox-container" >
                        <span class="span-perso-pro">Domaine(s) :</span>
                        <?php if(is_array($professionnel->domaine) && in_array('R', $professionnel->domaine)): ?> Réseaux - <?php endif; ?>
                        <?php if(is_array($professionnel->domaine) && in_array('S', $professionnel->domaine)): ?> Systèmes - <?php endif; ?>
                        <?php if(is_array($professionnel->domaine) && in_array('D', $professionnel->domaine)): ?> Développement <?php endif; ?>
                    </div>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-userid"
                           placeholder="Source" value="<?php echo e($professionnel->source); ?>" name="source" readonly>
                    <div class="col-xl-6">
                        Compétences :
                        <?php $__currentLoopData = $professionnel->competences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($competence->intitule); ?> /
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>



                <div class="form-group col-xl-12 col-perso">
                    <a href="<?php echo e(asset('storage/cv/'. $professionnel->id . '/' .$professionnel->pdf)); ?>" download>test</a>
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <textarea class="textarea-perso form-control form-control-user" rows="5" cols="50" name="observation" placeholder="Observation" readonly><?php echo e($professionnel->observation); ?></textarea>
                </div>

                <div class="col-xl-6 col-perso">
                    <a href="<?php echo e(route('professionnels.index')); ?>" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                        <span class="text">Retour</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/professionnels/show.blade.php ENDPATH**/ ?>