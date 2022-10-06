<?php
$PNota = (float) $_POST ['txtPNota'];
$SNota = (float) $_POST ['txtSNota'];
$TNota = (float) $_POST ['txtTNota'];
$media = ($PNota + $SNota + $TNota) /3;
$situacao = "";