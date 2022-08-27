<?php $v->layout('theme'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!--  <h1></h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $error->code; ?> Página de erro</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning"> <?= $error->code; ?> </h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> <?= $error->title; ?> </h3>
                <p>
                    <?= $error->message; ?>
                </p>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->
</div>