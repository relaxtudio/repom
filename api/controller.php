<?php

function testConnection() {
	$model = new Model;
	return $model->connect();
	$model->close();
}