<?php
 $msg_file = "mesage.db"; // ���� ���� ����� ������������ ������
 $msg_count = 10; // ���������� ������� ��������� � ���� ��������� ���������.
 if (!file_exists($msg_file)) { $fo = fopen($msg_file, "w"); fclose($fo); }
?>