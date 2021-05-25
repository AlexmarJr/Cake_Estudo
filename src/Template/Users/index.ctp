<?= $this->Html->link(('Add'), ['action' => 'add']);?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Usuario</th>
            <th>Email</th>
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
                <td>
                    <?=
                        $this->Html->link(('Detalhes'), ['action' => 'view', $user->id]);
                    ?> |
                    <button>E</button> |
                    <button>D</button>
                </td>
            </tr>
            <h1></h1>
            <h2></h2>
            <h3></h3>
        <?php endforeach;?>
    </tbody>
</table>


