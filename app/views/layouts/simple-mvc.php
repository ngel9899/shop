<?= /** @var array $categories */
$this->getPart('parts/header', compact('categories'));?>
<?=$this->content;?>
<?=$this->getPart('parts/footer');?>


