<?php
// config/auth.php
function require_admin() {
  session_start();
  if (empty($_SESSION['admin_id'])) { header("Location: login.php"); exit; }
}
function require_teacher() {
  session_start();
  if (empty($_SESSION['teacher_id'])) { header("Location: login.php"); exit; }
}
