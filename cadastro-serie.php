<?php
require "src/SeriesDAO.php";

SeriesDAO::inserir($_POST);

header("location:form_serie.php");

