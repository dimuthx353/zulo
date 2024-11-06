<?php
function stmtFailed($stmt)
{
    if (!$stmt) {
        header('Location: $_SERVER["PHP_SELF"]?error=stmtFailed');
        exit();
    }
}