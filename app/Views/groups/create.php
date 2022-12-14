<?php 
$this->setVar('title', 'Registro');
$this->setVar('pagetitle', 'Grupos');
$this->setVar('css_styles', array());
$this->setVar('scripts', array(
    'assets/js/groups/create.js',
  ));
?>
<?= $this->extend('layouts/main');?>
<?= $this->section('content');?>
<!-- Formulario Grupo -->
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="card-title mb-4">Datos del Grupo</h4>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight">
                            <a href="<?=base_url('groups')?>"><i class="bx bx-arrow-back"></i> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
            <form id="group-form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                          <label for="name" class="form-label">Grupo</label>
                          <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="observations" class="form-label">Observaciones</label>
                        <textarea class="form-control" name="observations" id="observations" rows="3"></textarea>
                      </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-label">
                        <i class="bx bxs-save label-icon"></i>Registrar
                    </button>
                </div>
            </form>
        </div>
        <!-- end card body -->
    </div>
</div>
<?= $this->endSection(); ?>