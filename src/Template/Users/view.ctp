<div class="users view large-12">
    <h3> <?= $users->name ?> </h3>
</div>

<?=

$this->Html->link(('Voltar'), ['controller' => 'users', 'action' => 'index']);

?>
