<?php

use yii\helpers\Html;

$this->title = 'Update Record';

?>
<div class="record-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
