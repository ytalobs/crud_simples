<?php $v->layout('theme'); ?>
<!-- Main content -->
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $usersCount; ?></h3>

                    <p>Usuários</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <br>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $porcUsers; ?><sup style="font-size: 20px">%</sup></h3>

                    <p>Usuários Confirmados</p>
                </div>
                <div class="icon">
                    <i class="fa-regular fa-thumbs-up"></i>
                </div>
                <br>
            </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= $posts; ?></h3>

                    <p>Posts</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-comment"></i>
                </div>
                <br>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>

<!-- TABLE: LATEST ORDERS -->
<div class="card">
    <div class="card-header border-transparent">
        <h3 class="card-title">Últimos usuários cadastrados</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Status</th>
                    <th>Endereço</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><a href="#"><?= "{$user->first_name}  {$user->last_name}" ?></a></td>
                        <td><?= $user->email; ?></td>
                        <?php if ($user->status == "registered"): ?>
                            <td><span class="badge badge-warning">Registrado</span></td>
                        <?php else: ?>
                            <td><span class="badge badge-success">Confirmado</span></td>
                        <?php endif; ?>
                        <td>
                            <div class="sparkbar" data-color="#00a65a"
                                 data-height="20"> <?= $user->address()->street ?>  </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="#" class="btn btn-sm btn-info float-left">Inserir novo</a>
        <a href="#" class="btn btn-sm btn-secondary float-right">Ver todos</a>
    </div>
</div>
<?php $v->start('scripts') ?>

<script src="<?= theme("../dist/js/demo.js") ?>"></script>

<?php $v->end() ?>

<!-- /.card-footer -->
