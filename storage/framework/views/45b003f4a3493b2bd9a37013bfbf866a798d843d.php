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
            <form method="post" action="<?php echo e(route('professionnels.store')); ?>" enctype="multipart/form-data">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>


                <div class="form-group col-xl-12 col-perso">
                    <select class="custom-select select-perso <?php $__errorArgs = ['metier_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="metier_id">
                        <option value="" <?php if(old('metier_id') ==''): ?> selected <?php endif; ?>>
                            Choix du métier
                        </option>
                        <?php $__currentLoopData = $metiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($metier->id); ?>" <?php if(old('metier_id') == $metier->id): ?> selected <?php endif; ?>>
                                <?php echo e($metier->libelle); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['metier_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="radio-container offset-xl-2">
                        Activité de formation déjà effectuée ?
                        <div class="radio-content custom-radio">
                            <input class="custom-radio" type="radio" value="1" name="formation" <?php if(old('formation') ==1): ?> checked <?php endif; ?>>
                            <label for="oui">Oui</label>
                            <input class="custom-radio" type="radio" value="0" name="formation"  <?php if(old('formation') ==0): ?> checked <?php endif; ?>>
                            <label for="non">Non</label>
                        </div>
                    </div>
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Nom" value="<?php echo e(old('nom')); ?>" name="nom">
                    <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Prénom" value="<?php echo e(old('prenom')); ?>" name="prenom">
                    <?php $__errorArgs = ['prenom'];
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
                    <input <?php if(old('naissance') != ''): ?> type="date" <?php else: ?> type="text" <?php endif; ?> class="input-perso form-control form-control-user <?php $__errorArgs = ['naissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Date de naissance" value="<?php echo e(old('naissance')); ?>" name="naissance" onfocus="(this.type='date')">
                    <?php $__errorArgs = ['naissance'];
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
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['cp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Code postal" value="<?php echo e(old('cp')); ?>" name="cp">
                    <?php $__errorArgs = ['cp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Ville" value="<?php echo e(old('ville')); ?>" name="ville">
                    <?php $__errorArgs = ['ville'];
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
                    <input type="tel" class="input-perso form-control form-control-user <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Téléphone" value="<?php echo e(old('telephone')); ?>" name="telephone">
                    <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="E-mail" value="<?php echo e(old('email')); ?>" name="email">
                    <?php $__errorArgs = ['email'];
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
                    <div class="checkbox-container" >
                        <span class="span-perso-pro">Domaine(s) :</span>

                        <label for="reseaux">Réseaux</label>
                            <input type="checkbox" id="reseaux" name="domaine[]" value="R" <?php echo e((is_array(old('domaine')) && in_array('R', old('domaine'))) ? 'checked' : ''); ?>>
                        <label for="systemes">Systèmes</label>
                            <input type="checkbox" id="systemes" name="domaine[]" value="S" <?php echo e((is_array(old('domaine')) && in_array('S', old('domaine'))) ? 'checked' : ''); ?>>
                        <label for="developpement">Développement</label>
                            <input type="checkbox" id="developpement" name="domaine[]" value="D" <?php echo e((is_array(old('domaine')) && in_array('D', old('domaine'))) ? 'checked' : ''); ?>>
                    </div>
                    <?php $__errorArgs = ['domaine'];
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
                    <input type="text" class="input-perso form-control form-control-user <?php $__errorArgs = ['source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Source" value="<?php echo e(old('source')); ?>" name="source">
                    <?php $__errorArgs = ['source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="alert-danger alert-danger-perso p-perso" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <select multiple data-none-selected-text="Compétences" data-live-search="true"  class="selectpicker <?php $__errorArgs = ['comp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> col-xl-6" name="comp[]">
                        <?php $__currentLoopData = $competences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($competence->id); ?>"

                                <?php echo e(collect(old('comp'))->contains($competence->id) ? 'selected' : ''); ?>

                            >
                                <?php echo e($competence->intitule); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['comp'];
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
                    <label for="pdf" class="mr-2">CV : (.pdf)</label>
                    <input type="file" name="pdf" accept="application/pdf">
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <textarea class="textarea-perso form-control form-control-user <?php $__errorArgs = ['observation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="5" cols="50" name="observation" placeholder="Observation"><?php echo e(old('observation')); ?></textarea>
                    <?php $__errorArgs = ['observation'];
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
                    <a href="<?php echo e(route('professionnels.index')); ?>" class="btn btn-info btn-icon-split">
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

<?php echo $__env->make('cvtheque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cvtheque\resources\views/professionnels/create.blade.php ENDPATH**/ ?>