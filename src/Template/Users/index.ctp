<?php use  Cake\Routing\Router; ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" onclick="open_modal()">
  Adicionar Novo Usuario
</button>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->password ?></td>
                <td>
                    <!-- <?=
                        $this->Html->link(('Detalhes'), ['action' => 'view', $user->id]);
                    ?> | -->
                    <a href="<?= Router::url(['_name' => 'view', 'id' => $user->id] )?>" class="btn btn-primary">Ver</a>


                    <a href="<?= Router::url(['_name' => 'delete', 'id' => $user->id] )?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <h1></h1>
            <h2></h2>
            <h3></h3>
        <?php endforeach;?>
    </tbody>
</table>


<form class="navbar-form navbar-left form-signin" action="<?php echo Router::url(['_name' => 'add'])?>" method="post">
<?php if(isset($head)) : ?>
    <input type="hidden" name='id' value="<?= $head->id ?>">
<?php endif; ?>

    <!-- Modal -->
    <div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="UserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="UserModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <label for="Nome"></label>
            <input type="text" class="form-control" name='name' <?php if(isset($head)) : ?> value="<?= $head->name ?>" <?php endif; ?>>

        <label for="Email"></label>
            <input type="text" class="form-control" name='email' <?php if(isset($head)) : ?> value="<?= $head->email ?>" <?php endif; ?>>

        <label for="SobreNome"></label>
            <input type="text" class="form-control" name='username' <?php if(isset($head)) : ?> value="<?= $head->username ?>" <?php endif; ?>>

        <label for="Senha"></label>
            <input type="text" class="form-control" name='password' <?php if(isset($head)) : ?> value="<?= $head->password ?>" <?php endif; ?>>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

</form>


<?php if(isset($head)) : ?>

<script>
    $("#exampleModal").modal('show');
</script>

<?php endif; ?>

<script>
function open_modal(){
    $("#id").val('');
    $("#name").val('');
    $("#username").val('');
    $("#password").val('');
    $("#email").val('');
    $("#UserModal").modal('show');
}
</script>
