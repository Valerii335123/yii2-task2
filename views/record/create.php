<?php

use yii\helpers\Html;

$this->title = 'Create Record';

?>
<div class="record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
