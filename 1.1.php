<?php
mysql_query('
  INSERT INTO stock_ledger(article_id, bin, quantity)
  SELECT qca.article_id, "quality_control", qca.quantity
  FROM quality_control_articles qca
  WHERE qca.qc_id = 720
');

mysql_query('
  INSERT INTO stock_ledger(article_id, bin, quantity)
  SELECT qca.article_id, "main_bin", -qca.quantity
  FROM quality_control_articles qca
  WHERE qca.qc_id = 720
');
?>
