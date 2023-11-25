<div class="row">
    <div class="col1">
        <?php echo template::button('courseBack', [
            'class' => 'buttonGrey',
            'href' => helper::baseUrl(),
            'value' => template::ico('home')
        ]); ?>
    </div>
    <?php if ($this->getUser('group') === self::GROUP_ADMIN): ?>
    <div class="col1 offset9">
		<?php echo template::button('courseCategory', [
			'href' => helper::baseUrl() . 'course/category',
			'value' => template::ico('table'),
			'help' => 'Catégories'
		]); ?>
	</div>
    <div class="col1 ">
        <?php echo template::button('courseAdd', [
            'class' => 'buttonGreen',
            'href' => helper::baseUrl() . 'course/add',
            'value' => template::ico('plus')
        ]); ?>
    </div>
    <?php endif; ?>
</div>
<?php if($module::$courses): ?>
	<?php echo template::table([2, 2, 2, 3, 1, 1, 1], $module::$courses, ['Titre court', 'Auteur', 'Description', 'Lien direct', '', '', ''], ['id' => 'dataTables']); ?>
<?php else: ?>
	<?php echo template::speech('Aucun Contenu'); ?>
<?php endif; ?>
