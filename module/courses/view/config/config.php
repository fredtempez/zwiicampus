<?php echo template::formOpen('coursesConfig'); ?>
<div class="row">
	<div class="col1">
		<?php echo template::button('coursesConfigBack', [
			'class' => 'buttonGrey',
			'href' => helper::baseUrl() . $this->getUrl(0),
			'value' => template::ico('left')
		]); ?>
	</div>
	<div class="col2 offset9">
		<?php echo template::submit('coursesConfigSubmit'); ?>
	</div>
</div>
<div class="row">
	<div class="col8">
		<div class="block">
			<h4>
				<?php echo helper::translate('Elements à afficher'); ?>
			</h4>
			<div class="row">
				<div class="col12">
					<?php echo template::checkbox('coursesConfigShowTitle', true, 'Titre', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'title'])
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::checkbox('coursesConfigShowShortTitle', true, 'Titre court', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'shortTitle'])
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::checkbox('coursesConfigShowAuthor', true, 'Nom de l\'auteur', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'author'])
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::checkbox('coursesConfigShowDescription', true, 'Description', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'description'])
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col4">
					<?php echo template::checkbox('coursesConfigShowAccess', true, 'Modalités d\'ouverture', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'access'])
					]); ?>
				</div>
				<div class="col4">
					<?php echo template::checkbox('coursesConfigShowOpening', true, 'Date d\'ouverture', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'opening']),
						'help' => 'Affiché si l\'accès est limité dans le temps',
					]); ?>
				</div>
				<div class="col4">
					<?php echo template::checkbox('coursesConfigShowClosing', true, 'Date de fermeture', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'closing']),
						'help' => 'Affiché si l\'accès est limité dans le temps',
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::checkbox('coursesConfigShowEnrolment', true, 'Modalités d\'inscription', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'enrolment'])
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::text('coursesConfigUrlText', [
						'label' => 'Texte du lien vers le cours',
						'value' => $this->getData(['module', $this->getUrl(0), 'config', 'urlText'])
					]); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col4">
		<div class="block">
			<h4>
				<?php echo helper::translate('Paramètres'); ?>
			</h4>
			<div class="row">
				<div class="col12">
					<?php echo template::select('coursesConfigCategories', $module::$courseCategories, [
						'label' => 'Catégorie à afficher',
						'selected' => $this->getData(['module', $this->getUrl(0), 'config', 'category'])
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::select('coursesConfigLayout', $module::$coursesLayout, [
						'label' => 'Présentation en colonnes',
						'selected' => $this->getData(['module', $this->getUrl(0), 'config', 'layout']),
						'help' => 'Chaque cours est présenté dans une colonne'
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::checkbox('coursesConfigTemplate', true, 'Bordure', [
						'checked' => $this->getData(['module', $this->getUrl(0), 'config', 'template']),
						'help' => 'Template bordure de TinyMCE, le titre en évidence'
					]); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php echo template::formClose(); ?>
<div class="moduleVersion">Version n°
	<?php echo $module::VERSION; ?>
</div>