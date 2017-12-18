<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-login">


        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"> <h1 class="title text-center">SMU</h1></div>
                </div>
               
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center" data-background-color="green">
                        <h4 class="title">
                            <?= Html::encode($this->title) ?>
                        </h4>
                        <p class="category">Please fill out the following fields to login:</p>
                    </div>

                    <div class="card-content">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                                    <div class="form-group">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                    </div>

                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>